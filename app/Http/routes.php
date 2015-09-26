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

Route::get('/', "FormController@index");

Route::resource('admin', 'AdminController');
Route::resource('form', 'FormController');

//Route::group(['prefix' => 'admin'], function(){
	Route::resource('applicants', 'ApplicantController');
	Route::resource('positions', 'PositionController');
//});