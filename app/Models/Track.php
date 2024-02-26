<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    //use HasFactory;
   /*  protected $fillable = [
        'user_id','content_type','primary_track_type','secondary_track_type','instrumental','track_title','version_subtitle','primary_artist','feature','remixer','author','composer','arranger','pline','productionYear','publisher','ISRC','generate_isrc','genre','subgenre','track_price','Producer_catalog_number','advisory','preview_start','metadataLanguage','idLyricsSelect','lyrics_information',
    ]; */

    protected $fillable = [
        'user_id','data',
    ];

     protected function data(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    } 
}
