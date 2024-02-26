<?php

namespace App\Http\Controllers;
use App\Models\Release;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\Auth;
use App\Models\Track;
class ReleaseController extends Controller
{
    
    public function index(){
        //echo "fdjxfd";

        $release = Release::latest()->paginate(5);
    
        return view('release.index',compact('release'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    public function destroy(Release $release)
    {
        //
        $release->delete();
     
        return redirect()->route('release.index')
                        ->with('success','release deleted successfully');
    }

     public function edit(Release $release)
    {
        //

        
       

        return view('release.edit',compact('release'));
    } 

 
  
    public function update(Request $request, Release $release)
    {

        

        $this->validate($request, [
           
            
           
            //'audio' =>'nullable|mimes:audio/mpeg,mpga,mp3,wav,aac',
            'audio' =>'nullable|mimes:wav',
      ]);
  
      
      

    
      /*-----video and audio <rigtone--></rigtone--*/

        $input = $request->all();
        if ($Fileaudio = $request->file('audio')) {
            $destinationPath = 'audio/';
            $audioname = $Fileaudio->getClientOriginalExtension();
            $audiopath =$Fileaudio->move($destinationPath, $audioname);
            $input['audio'] =  $audioname;
        }else{
            unset($input['audio']);
        }

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
       
        
        $release->update($input);
    
      
        return back()->with('success', 'data updated successfully!');
    }

   
 public function show(Release $release){

 }
    public function upload()
    {
        //
        return view('release.upload');
    }

   
}
