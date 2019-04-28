<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    // return $request->user();

    
});


Route::resource('categories', 'CategoryAPIController');

Route::resource('travels', 'TravelAPIController');

Route::get('/travels-near', 'TravelAPIController@getPlace');

Route::resource('images', 'ImageAPIController');

Route::get('/travel/{id}/images', 'TravelAPIController@getImagesTravel');

Route::get('/category/{id}/travels', 'CategoryAPIController@getTravelsCategory');

Route::get('/nhung/{lat}/{lng}', 'NhungController@add');







Route::resource('events', 'EventAPIController');