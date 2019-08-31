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
Route::get('states', 'StateController@index');
Route::get('states/{state}', 'StateController@show');
Route::post('states', 'StateController@store');
Route::put('states/{state}', 'StateController@update');
Route::delete('states/{state}', 'StateController@destroy');

//Cities
Route::get('cities', 'CitiesController@index');
Route::get('cities/{cities}', 'CitiesController@show');
Route::post('cities', 'CitiesController@store');
Route::put('cities/{cities}', 'CitiesController@update');
Route::delete('cities/{cities}', 'CitiesController@destroy');


//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
