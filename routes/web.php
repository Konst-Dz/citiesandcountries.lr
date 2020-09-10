<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('check.admin')->prefix('admin')->group(function (){
    Route::get('/', 'AdminController@main')->name('main');
    Route::delete('delete/{id}', 'AdminController@delete');
    Route::match(['get','post'],'edit/{id}', 'AdminController@edit');
    Route::get('add', 'AdminController@showAdd')->name('showAdd');
    Route::post('add', 'AdminController@add');
});

Route::get('/', 'MakerController@all');
Route::get('/{country}', 'CountryController@show');
Route::get('/{country}/{city}', 'CityController@show');
Route::get('/{country}/{city}/{showplace}', 'ShowplaceController@show');



