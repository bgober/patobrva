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
    return $request->user();
});

/* Songs 
Route::get('songs', 'SongsController@index');
Route::get('song/{id}', 'SongsController@show');
Route::post('song', 'SongsController@store');
Route::put('song', 'SongsController@store');
Route::delete('song/{id}', 'SongsController@destroy');

Route::get('venues', 'VenuesController@index');
Route::get('venue/{id}', 'VenuesController@show');
Route::post('venue', 'VenuesController@store');
Route::put('venue', 'VenuesController@store');
Route::delete('venue/{id}', 'VenuesController@destroy');

Route::get('requests', 'RequestsController@index');
Route::get('request/{id}', 'RequestsController@show');
Route::post('request', 'RequestsController@store');
Route::put('request', 'RequestsController@store');
Route::delete('request/{id}', 'RequestsController@destroy');

Route::get('gigs', 'Api\GigsController@index');
Route::get('gig/{id}', 'Api\GigsController@show');
Route::post('gig', 'Api\GigsController@store');
Route::put('gig', 'Api\GigsController@store');
Route::delete('gig/{id}', 'Api\GigsController@destroy');

*/
Route::resource('songs', 'Api\SongsController');
/* Venues */
Route::resource('venues', 'Api\VenuesController');
/* Requests */
Route::resource('requests', 'Api\RequestsController');
/* Gigs */
Route::resource('gigs', 'Api\GigsController');