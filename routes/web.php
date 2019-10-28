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

Route::get('/','dbController@show')->name('form');

Route::post('/','dbController@store')->name('submit');
Route::get('/task/{id}/edit','dbController@edit')->name('edit.form');
Route::post('/task/{id}/edit','dbController@update')->name('update.form');
Route::get('/task/{id}/delete','dbController@delete')->name('delete.form');
