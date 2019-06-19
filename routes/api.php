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

Route::get('/search/{keyword}', 'TravelAPIController@search');

Route::get('/event/{id}/images', 'EventAPIController@getImagesEvent');

Route::post('/event/{id}/image', 'EventAPIController@postImagesEvent');

Route::get('/nhung/place', 'NhungController@getPlace');


Route::resource('events', 'EventAPIController');

Route::resource('image_events', 'ImageEventAPIController');

Route::post('/uploadImage', 'TravelAPIController@uploadImage');

