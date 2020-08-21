<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name'];
    public function showplace()
    {
        return $this->hasMany('App\Showplace','city_id','id');
    }
    public function country()
    {
        return $this->belongsTo('App\Country','country_id','id');
    }

}
