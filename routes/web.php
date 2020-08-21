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
Route::get('admin', 'AdminController@main')->name('main');
Route::get('admin/delete/{id}', 'AdminController@delete');
Route::match(['get','post'],'admin/edit/{id}', 'AdminController@edit');
Route::match(['get','post'],'admin/add', 'AdminController@add');
Route::get('/', 'MakerController@all');
Route::get('/{country}', 'CountryController@show');
Route::get('/{country}/{city}', 'CityController@show');
Route::get('/{country}/{city}/{showplace}', 'ShowplaceController@show');

