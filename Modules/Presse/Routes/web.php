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

Route::prefix('presse')->group(function() {
    Route::get('admin', 'PresseController@index');
    Route::get('create','PresseController@create');
    Route::post('store','PresseController@store');
    Route::post('delete/{id}','PresseController@destroy');
    Route::get('edit/{id}','PresseController@edit');
    Route::post('update/{id}','PresseController@update');
});