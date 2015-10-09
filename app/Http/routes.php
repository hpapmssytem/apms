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
Route::resource('links', 'LinkController');

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

Route::post('checkcode',
	['as' => 'checkcode', 'uses' => 'FormController@checkCode']);
/*
* Logout Admin route
*/
Route::get('auth/logout', 'Auth\AuthController@getLogout');

/*
* Email verification route for users
*/
Route::get('register/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'RegistrationController@confirm'
]);
