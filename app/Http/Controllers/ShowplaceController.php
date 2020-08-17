<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;
use App\Showplace;

class ShowplaceController extends Controller
{
    public function show($country,$city,$showplace)
    {
        $place = Showplace::where('slug',$showplace)->first();
       return view('shoplace.show',['showplace' => $place,'title'=>$place->name]);
    }
}
