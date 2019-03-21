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

// Route::prefix('chapitre')->group(function() {
//     Route::get('/admin', 'ChapitreController@index');  
//     Route::get('/show','ChapitreController@show');
//     Route::get('/create','ChapitreController@create');
//     Route::post('/store','ChapitreController@store');
//     Route::get('/search/{id}','ChapitreController@search');
//     Route::post('delete/{id}','ChapitreController@destroy');
//     Route::get('edit/{id}','ChapitreController@edit');
//     Route::post('update/{id}','ChapitreController@update');
//     Route::get('cours/{id}', 'ChapitreController@cours');
// });

Route::prefix('coding')->group(function() {
    Route::get('/admin', 'CodingController@index');  
    Route::get('/show','CodingController@show');
    Route::get('/create','CodingController@create');
    Route::post('/store','CodingController@store');
    Route::get('/search/{id}','CodingController@search');
    Route::post('delete/{id}','CodingController@destroy');
    Route::get('edit/{id}','CodingController@edit');
    Route::post('update/{id}','CodingController@update');
});

Route::get('/{any}', function(){
    return view('matiere::chapitres.index');
})->where('any', '.*');


// Route::post('/chapitre/create', 'ChapitreController@store');
// Route::get('/chapitre/edit/{id}', 'ChapitreController@edit');
// Route::post('/chapitre/update/{id}', 'ChapitreController@update');
// Route::delete('/chapitre/delete/{id}', 'ChapitreController@delete');
// Route::get('chapitres', 'ChapitreController@index');

Route::resource('chapitres', 'ChapitreController');