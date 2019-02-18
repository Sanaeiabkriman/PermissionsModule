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
    Route::get('show/{id}','ChapitreController@show');

});

Route::prefix('szf')->group(function() {
    Route::get('/admin', 'CodingController@index');
    Route::post('create','CodingController@create');
    Route::post('delete/{id}','CodingController@destroy');
    Route::get('edit/{id}','CodingController@edit');
    Route::post('update/{id}','CodingController@update');
});

