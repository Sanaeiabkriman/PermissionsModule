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

Route::prefix('coach')->group(function() {
    // Route::get('/admin', 'CoachController@index');
    // Route::post('create','CoachController@create');
    // Route::post('delete/{id}','CoachController@destroy');
    // Route::get('edit/{id}','CoachController@edit');
    // Route::post('update/{id}','CoachController@update');
});
Route::prefix('matiere')->group(function() {
    Route::get('/admin', 'MatiereController@index');
    Route::post('create','MatiereController@create');
    Route::post('delete/{id}','MatiereController@destroy');
    Route::get('edit/{id}','MatiereController@edit');
    Route::post('update/{id}','MatiereController@update');
});
