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

    Route::post('register', 'Auth\RegisterController@register');

    Route::get('users', 'Api\UsersController@index');
    Route::get('users/{user}', 'Api\UsersController@show');
    Route::post('users', 'Api\UsersController@store');
    //add hidden field _method=PUT but POST request
    Route::put('users/{user}', 'Api\UsersController@update');
    //add hidden field _method=DELETE but POST request
    Route::delete('users/{user}', 'Api\UsersController@delete');

    Route::get('cars', 'Api\CarsController@index');
    Route::get('cars/{car}', 'Api\CarsController@show');
    Route::post('cars', 'Api\CarsController@store');
    Route::put('cars/{car}', 'Api\CarsController@update');
    Route::delete('cars/{car}', 'Api\CarsController@delete');

    Route::get('carbrands', 'Api\CarBrandsController@index');
    Route::get('carbrands/{carBrand}', 'Api\CarBrandsController@show');
    Route::post('carbrands', 'Api\CarBrandsController@store');
    Route::put('carbrands/{carBrand}', 'Api\CarBrandsController@update');
    Route::delete('carbrands/{carBrand}', 'Api\CarBrandsController@delete');

});

Route::auth();

Route::get('/home', 'HomeController@index');
