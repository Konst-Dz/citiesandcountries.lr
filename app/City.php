<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function showplace()
    {
        return $this->hasMany('App\Showplace','city_id','id');
    }
}
