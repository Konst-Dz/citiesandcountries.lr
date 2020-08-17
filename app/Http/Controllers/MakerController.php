<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class MakerController extends Controller
{
    public function all()
    {
        $countries = Country::all();
        return view('maker.main',['country' =>$countries]);
    }
}
