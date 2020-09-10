<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Showplace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\AddingRequest;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function main()
    {
        $country = Country::all();
        $destroy = Lang::get('messages.delete');
        return view('admin.main',['country'=>$country,'destroy'=>$destroy]);
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

    /*public function add(AddingRequest $request)*/
    public function add(Request $request)
    {
        $messages=[
            'country.max' => 'Максимальная длина - :max'
            ];

            $rules = [
                'city' => 'required',
                'country' => 'max:5'
            ];
            //$this->validate($request,$rules,$messages);



            $validator = Validator::make($request->all(),$rules,$messages);

            $validator->sometimes('showplace','required',function ($input){
                    return strlen($input->city) >= 7;
            });

           $validator->after(function ($validator){
               $validator->errors()->add('country','extra');
           });

            if ($validator->fails()){
                /*dump($validator->failed());
                die();*/
                return redirect()->route('showAdd')->withErrors($validator)->withInput();
            }



            $country = Country::firstOrNew( ['name' =>$request->country] );
            $country->slug=$request->slugCountry;
            $country->save();

            $city = $country->city()->firstOrNew( ['name' =>$request->city]);
            $city->slug = $request->slugCity;
            $city->save();

            $show = $city->showplace()->save(new Showplace(['name'=>$request->showplace, 'desc'=>$request->desc,'slug' => $request->showslug  ]));

            return redirect()->route('main')->with('status','Достопремечательность добавлена');
    }

    public function showAdd()
    {
            return view('admin.add');
    }

}
