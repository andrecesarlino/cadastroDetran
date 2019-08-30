<?php

use Illuminate\Http\Request;
use App\Estado;

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

Route::get('states', 'StateController@index');
Route::get('states/{states}', 'StateController@show');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
