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

/*
* Home page route
*/
Route::get('/', "FormController@index");

Route::resource('admin', 'AdminController');
Route::resource('form', 'FormController');
Route::resource('applicants', 'ApplicantController');
Route::resource('positions', 'PositionController');

/*
* Register Admin routes
*/
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

/*
* Login Admin routes
*/
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');

/*
* Logout Admin route
*/
Route::get('auth/logout', 'Auth\AuthController@getLogout');
