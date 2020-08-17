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

Route::get('/', 'MakerController@all');
Route::get('/{country}', 'CountryController@show');
Route::get('/{country}/{city}', 'CityController@show');
Route::get('/{country}/{city}/{showplace}', 'ShowplaceController@show');
