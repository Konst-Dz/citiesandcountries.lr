<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Showplace extends Model
{
    protected $fillable = ['name','desc','slug'];

    public function city()
    {
        return $this->belongsTo('App\City','city_id','id');
    }


}
