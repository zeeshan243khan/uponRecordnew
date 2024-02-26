<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::where('type', '0')->paginate(10);
     
        return view('users.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          =>  'required',
            'email'         =>  'required|email|unique:Users',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'profile_image'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $file_name = time() . '.' . request()->profile_image->getClientOriginalExtension();

        request()->profile_image->move(public_path('profile'), $file_name);

        $User = new User;

        $User->name = $request->name;
        $User->email = $request->email;
        $User->gender = $request->gender;
        $User->profile_image = $file_name;
        $User->password = Hash::make($request->password);
        $User->save();

        return redirect()->route('users.index')->with('success', 'User Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $User)
    {
        $request->validate([
            'name'      =>  'required',
            'email'     =>  'required|email',
            'image'     =>  'image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $profile_image = $request->hidden_profile_image;

        if($request->profile_image != '')
        {
            $profile_image = time() . '.' . request()->profile_image->getClientOriginalExtension();

            request()->profile_image->move(public_path('profile'), $profile_image);
        }

        $User = User::find($request->hidden_id);

        $User->name = $request->name;

        $User->email = $request->email;

        $User->gender = $request->gender;

        $User->profile_image = $profile_image;

        $User->save();

        return redirect()->route('users.index')->with('success', 'User Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $User)
    {
        $User->delete();

        return redirect()->route('users.index')->with('success', 'User Data deleted successfully');
    }
}

