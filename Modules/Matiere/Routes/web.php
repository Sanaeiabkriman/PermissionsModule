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

Route::prefix('chapitre')->group(function() {
    Route::get('/admin', 'ChapitreController@index');  
    Route::get('/show','ChapitreController@show');
    Route::get('/create','ChapitreController@create');
    Route::post('/store','ChapitreController@store');
    Route::get('/search/{id}','ChapitreController@search');
    Route::post('delete/{id}','ChapitreController@destroy');
    Route::get('edit/{id}','ChapitreController@edit');
    Route::post('update/{id}','ChapitreController@update');
});