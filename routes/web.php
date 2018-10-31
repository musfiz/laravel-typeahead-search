<?php

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

Route::get('/','HomeController@index');
Route::get('/list','HomeController@viewDistrict');
Route::get('search-district','HomeController@searchDistrict')->name('district.search');
Route::get('district/{id}','HomeController@getDistrict')->name('district.get');