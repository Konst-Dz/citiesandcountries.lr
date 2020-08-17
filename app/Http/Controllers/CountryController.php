<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function show($country)
    {
        $country = Country::where('slug',$country)->first();
        $cities = $country->city;
        return view('country.show',['cities' => $cities,'title'=>$country->name,'slug'=>$country->slug]);
    }
}
