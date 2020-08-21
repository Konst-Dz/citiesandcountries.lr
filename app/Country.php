<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name'];
    public function city()
    {
        return $this->hasMany('App\City','country_id','id');
    }

    public function showplace()
    {
        return $this->hasManyThrough('App\Showplace','App\City','country_id','city_id','id');
    }
}
