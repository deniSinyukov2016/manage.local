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

Route::group(['prefix' => '/v1', 'namespace' => 'API', 'as' => 'api.'], function () {
    Route::post('login', 'Auth\LoginController@handle')->name('login.post');
    Route::resource('projects', 'ProjectController', ['only' => ['show', 'destroy', 'index', 'update', 'store']]);
});
