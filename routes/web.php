<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware'=>'userCheck'],function(){
	
	Route::get('/','dbController@show')->name('form');
	Route::post('/','dbController@store')->name('submit');
	Route::get('/task/{id}/edit','dbController@edit')->name('edit.form');
	Route::post('/task/{id}/edit','dbController@update')->name('update.form');
	Route::get('/task/{id}/delete','dbController@delete')->name('delete.form');
	Route::get('/logout','loginController@logout');


});

Route::get('/register','registerController@show')->name('register.form');
Route::post('/register','registerController@register')->name('register.form');

Route::get('/login','loginController@show')->name('login.form.show');
Route::post('/login','loginController@login')->name('login.form');


