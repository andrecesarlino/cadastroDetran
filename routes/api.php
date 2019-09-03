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
Route::get('vehicles', 'VehiclesController@index');
Route::get('vehicles/{vehicles}', 'VehiclesController@show');
Route::post('vehicles', 'VehiclesController@store');
Route::put('vehicles/{vehicles}', 'VehiclesController@update');
Route::delete('vehicles/{vehicles}', 'VehiclesController@destroy');

//Traffics
Route::get('traffics', 'TrafficsController@index');
Route::get('traffics/{traffics}', 'TrafficsController@show');
Route::post('traffics', 'TrafficsController@store');
Route::put('traffics/{traffics}', 'TrafficsController@update');
Route::delete('traffics/{traffics}', 'TrafficsController@destroy');

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
