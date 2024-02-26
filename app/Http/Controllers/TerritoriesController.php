<?php

namespace App\Http\Controllers;


use App\Models\Release;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\TrackController;
use App\Models\Track;
use App\Models\Territories;


class TerritoriesController extends Controller
{
    //

    

    public function update(Request $request){
       
       /*  $asia_country= implode(',',$request['asia_country']);
        $europe_country= implode(',',$request['europe_country']);
        $africa_country= implode(',',$request['africa_country']);
        
        $SouthAmerica_country= implode(',',$request['SouthAmerica_country']);
        $NorthAmerica_country= implode(',',$request['NorthAmerica_country']); */
       
       /*  $input=[
            'user_id' =>$request->user_id,
            'asia_country' => $asia_country,
            'europe_country' => $europe_country,
            'africa_country' =>  $africa_country,
            'SouthAmerica_country' =>  $SouthAmerica_country,
            'NorthAmerica_country' =>  $NorthAmerica_country,
        ]; */

        if( $request['asia_country']){

            $asia_country= implode(',',$request['asia_country']);
            $input['asia_country'] = $asia_country;
            $input['asia_country_url'] = $request['asia_country_url'];
            $input['user_id'] = $request['user_id'];
            $input['release_id'] = $request['release_id'];
        }
        else{
            unset($input['asia_country']);
        }
       
  

        if( $request['europe_country']){
            $europe_country= implode(',',$request['europe_country']);
            $input['europe_country'] = $europe_country;
            $input['europe_country_url'] =$request['europe_country_url'];
            $input['user_id'] = $request['user_id'];
            $input['release_id'] = $request['release_id'];
        }
        else{
            unset($input['europe_country']);
        }
        
        if( $request['africa_country']){
            $africa_country= implode(',',$request['africa_country']);
            $input['africa_country'] = $africa_country;
            $input['africa_countr_url'] =  $request['africa_countr_url'];
          
            $input['user_id'] = $request['user_id'];
            $input['release_id'] = $request['release_id'];
        }
        else{
            unset($input['africa_country']);
        }

        if( $request['SouthAmerica_country']){
            $SouthAmerica_country= implode(',',$request['SouthAmerica_country']);
            $input['SouthAmerica_country'] = $SouthAmerica_country;
            $input['SouthAmerica_country_url'] = $request['SouthAmerica_country_url'];
           
            $input['user_id'] = $request['user_id'];
            $input['release_id'] = $request['release_id'];
        }
        else{
            unset($input['SouthAmerica_country']);
        }

        if( $request['NorthAmerica_country']){
            $NorthAmerica_country= implode(',',$request['NorthAmerica_country']);
            $input['NorthAmerica_country'] = $NorthAmerica_country;
            $input['NorthAmerica_country_url'] = $request['NorthAmerica_country_url'];
            
            $input['user_id'] = $request['user_id'];
            $input['release_id'] = $request['release_id'];
        }
        else{
            unset($input['NorthAmerica_country']);
        }
        Territories::create($input);
      
        return back()->with('success', 'data updated successfully!');
    }
}
