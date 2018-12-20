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

Route::prefix('permission')->group(function() {
    Route::get('/', 'PermissionController@index');
    // Vers les permissions
    Route::get('admin/permis','PermiController@index');
    Route::post('create','PermiController@create');
    Route::post('delete/{id}','PermiController@destroy');
    Route::get('edit/{id}','PermiController@edit');
    Route::post('update/{id}','PermiController@update');
    // Vers les categories role
});
Route::prefix('catrole')->group(function(){ 
    Route::get('admin/categorierole','CategorieroleController@index');
    Route::post('create','CategorieroleController@create');
    Route::post('delete/{id}','CategorieroleController@destroy');
    Route::get('edit/{id}','CategorieroleController@edit');
    Route::post('update/{id}','CategorieroleController@update');
});
Route::prefix('role')->group(function(){ 
    Route::get('admin/role','RoleController@index');
    Route::post('create','RoleController@create');
    Route::post('delete/{id}','RoleController@destroy');
    Route::get('edit/{id}','RoleController@edit');
    Route::post('update/{id}','RoleController@update');
});
Route::prefix('users')->group(function(){ 
    Route::get('admin','UsersController@index');
    Route::post('create','UsersController@create');
    Route::post('delete/{id}','UsersController@destroy');
    Route::get('edit/{id}','UsersController@edit');
    Route::post('update/{id}','RoleController@update');
});