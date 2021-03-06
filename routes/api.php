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
Route::get('/article', 'ArticleController@index');
Route::get('/user', 'UserController@index1');
Route::get('/user/{id}', 'UserController@show');
Route::post('/create','UserController@create');
Route::post('/create1','UserController@create1');
