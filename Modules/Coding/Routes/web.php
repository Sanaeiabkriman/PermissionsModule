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
Route::prefix('etats')->group(function() {
    Route::get('/admin', 'EtatController@index');
    Route::post('create','EtatController@create');
    Route::post('delete/{id}','EtatController@destroy');
    Route::get('edit/{id}','EtatController@edit');
    Route::post('update/{id}','EtatController@update');
});
Route::prefix('coding')->group(function() {
    Route::get('/admin', 'CodingController@index');
    Route::post('create','CodingController@create');
    Route::post('delete/{id}','CodingController@destroy');
    Route::get('edit/{id}','CodingController@edit');
    Route::post('update/{id}','CodingController@update');
});
