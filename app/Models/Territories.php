<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Territories extends Model
{
    //use HasFactory;
    protected $fillable = [
        'release_id','user_id','asia_country','europe_country','africa_country','SouthAmerica_country','NorthAmerica_country',
        'asia_country_url','europe_country_url','africa_countr_url','SouthAmerica_country_url','NorthAmerica_country_url',
    ];
}
