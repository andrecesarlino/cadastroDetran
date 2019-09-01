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
Route::get('cities', 'CitiesController@index');
Route::get('cities/{cities}', 'CitiesController@show');
Route::post('cities', 'CitiesController@store');
Route::put('cities/{cities}', 'CitiesController@update');
Route::delete('cities/{cities}', 'CitiesController@destroy');

//Peoples
Route::get('peoples', 'PeoplesController@index');
Route::get('peoples/{peoples}', 'PeoplesController@show');
Route::post('peoples', 'PeoplesController@store');
Route::put('peoples/{peoples}', 'PeoplesController@update');
Route::delete('peoples/{peoples}', 'PeoplesController@destroy');

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
