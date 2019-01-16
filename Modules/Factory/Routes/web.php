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

Route::prefix('factory')->group(function() {
    Route::get('/', 'FactoryController@index');
});

Route::prefix('statut')->group(function(){ 
    Route::get('admin','StatutController@index');
    Route::post('create','StatutController@create');
    Route::post('delete/{id}','StatutController@destroy');
    Route::get('edit/{id}','StatutController@edit');
    Route::post('update/{id}','StatutController@update');
});
Route::prefix('client')->group(function(){ 
    Route::get('admin','ClientController@index');
    Route::post('create','ClientController@create');
    Route::post('delete/{id}','ClientController@destroy');
    Route::get('edit/{id}','ClientController@edit');
    Route::post('update/{id}','ClientController@update');
});
Route::prefix('projet')->group(function(){ 
    Route::get('admin','ProjetController@index');
    Route::get('create','ProjetController@create');
    Route::post('store','ProjetController@store');
    Route::post('delete/{id}','ProjetController@destroy');
    Route::get('edit/{id}','ProjetController@edit');
    Route::post('update/{id}','ProjetController@update');
});