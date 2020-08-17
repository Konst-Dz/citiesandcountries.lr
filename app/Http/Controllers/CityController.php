<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
{
    public function show($country,$city)
    {
        $cities = City::where('name',$city)->first();
        $showpaces = $cities->showplace;

        return view('city.show',['showplaces' => $showpaces,'title'=>$cities->name,'slugCountry'=>$country,'slugCity'=>$city]);
    }
}
