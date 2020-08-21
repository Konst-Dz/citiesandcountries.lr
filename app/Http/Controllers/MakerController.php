<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class MakerController extends Controller
{
    public function all()
    {
        $countries = Country::paginate(2);
        //$countries->setPath('ex/amp');
        return view('maker.main',['country' =>$countries]);
    }
}
