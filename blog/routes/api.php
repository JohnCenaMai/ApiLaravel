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

Route::post('/truyencuoi','ApiController@create');

Route::get('/truyencuoi','ApiController@show');

Route::get('/truyencuoi/{id}','ApiController@showbyid');

Route::put('/truyencuoiupdate/{id}','ApiController@updatebyid');

Route::delete('/truyencuoidelete/{id}','ApiController@deletebyid');
