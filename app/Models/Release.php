<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Release extends Model
{
   // use HasFactory;
   protected $fillable = [
    'user_id','media_type','genre','title','image','subgenre','version_subtitle','primary_artist','featur','featur','checkboxartist',
    'label_name','format','release_date','production_year','line1','line2','upc','producer_catalogue_number','audio','main_price','live_release_date'
];

}
