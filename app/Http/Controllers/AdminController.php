<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Showplace;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function main()
    {
        $country = Country::all();
        return view('admin.main',['country'=>$country]);
    }

    public function delete($id)
    {
        Showplace::destroy($id);
        return redirect()->route('main');
    }

    public function edit($id,Request $request)
    {
        $item =Showplace::find($id);
        $city = City::find($item->city->id);

        if ($request->isMethod('post')){

            $item->update(['name'=>$request->showplace, 'desc'=>$request->desc,'slug' => $request->showslug]);
            $city->update(['name' =>$request->city,'slug'=>$request->slugCity]);
            Country::find($city->country->id)->update(['name' =>$request->country,'slug'=>$request->slugCountry]);

            return redirect()->route('main')->with('status','Запись изменена');
        }


        return view('admin.edit',['item'=>$item,'city'=>$city]);

    }

    public function add(Request $request)
    {
        if($request->isMethod('post')){
            $country = Country::firstOrNew( ['name' =>$request->country] );
            $country->slug=$request->slugCountry;
            $country->save();

            $city = $country->city()->firstOrNew( ['name' =>$request->city]);
            $city->slug = $request->slugCity;
            $city->save();

            $show = $city->showplace()->save(new Showplace(['name'=>$request->showplace, 'desc'=>$request->desc,'slug' => $request->showslug  ]));

            return redirect()->route('main')->with('status','Достопремечательность добавлена');
        }
        else{
            return view('admin.add');
        }
    }
}
