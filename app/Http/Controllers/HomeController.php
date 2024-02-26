<?php
  
namespace App\Http\Controllers;
namespace App\Models;
namespace App\Http\Controllers;

use App\Models\Release;
use App\Http\Controllers\Id;
use Illuminate\Http\Request;
use App\Models\User;

use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    } 
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $customer = DB::table('users')->where('type','0')->get();
        return view('adminHome', compact('customer'));
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
     public function postCreateStepOne(Request $request)
     {
         $validatedData = $request->validate([
            
             'media_type' => 'required',
             'genre' => 'required',
             'title'=>'required'
 
         ]);
          $request->media_type;
          $request->user_id;
         $release= Release::create([
             'title' => $request->title,
             'user_id' => $request->user_id,
             'genre' => $request->genre,
             'media_type' => $request->media_type,
         ]);
       
        
         $release=$release->id;
         //$release = random_int(100000, 999999);
         return redirect()->route('release.edit',$release);
     }
}