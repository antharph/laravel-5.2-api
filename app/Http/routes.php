<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api'], function () {
    Route::get('cars', 'Api\CarsController@index');
    Route::get('cars/{car}', 'Api\CarsController@show');
    Route::post('cars', 'Api\CarsController@store');
    Route::put('cars/{car}', 'Api\CarsController@update');
    Route::delete('cars/{car}', 'Api\CarsController@delete');
});
