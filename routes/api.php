<?php

use Illuminate\Http\Request;
use App\State;

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

//States


//Cities
Route::get('cities', 'CityController@index');
Route::get('cities/{city}', 'CityController@show');
Route::post('cities', 'CityController@store');
Route::put('cities/{city}', 'CityController@update');
Route::delete('cities/{city}', 'CityController@destroy');

//Peoples
Route::get('people', 'PersonController@index');
Route::get('people/{person}', 'PersonController@show');
Route::post('people', 'PersonController@store');
Route::put('people/{person}', 'PersonController@update');
Route::delete('people/{person}', 'PersonController@destroy');

//Vehicle
Route::get('vehicles', 'VehicleController@index');
Route::get('vehicles/{vehicle}', 'VehicleController@show');
Route::post('vehicles', 'VehicleController@store');
Route::put('vehicles/{vehicle}', 'VehicleController@update');
Route::delete('vehicles/{vehicle}', 'VehicleController@destroy');

//Traffics
Route::get('traffics', 'TrafficController@index');
Route::get('traffics/{traffic}', 'TrafficController@show');
Route::post('traffics', 'TrafficController@store');
Route::put('traffics/{traffic}', 'TrafficController@update');
Route::delete('traffics/{traffic}', 'TrafficController@destroy');

Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');

Route::group(['middleware' => 'auth:api'], function() {

    Route::get('states', 'StateController@index');
    Route::get('states/{state}', 'StateController@show');
    Route::post('states', 'StateController@store');
    Route::put('states/{state}', 'StateController@update');
    Route::delete('states/{state}', 'StateController@destroy');

});

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
