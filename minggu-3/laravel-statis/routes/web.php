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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/register','registerController@index');
// Route::post('/welcome','registerController@register');

Route::get('/', function () {
    return view('main');
});

Route::get('/data-tables', function () {
    return view('data-tables');
});

// Route::get('/pertanyaans/create', 'pertanyaansControllers@create');
// Route::post('/pertanyaans', 'pertanyaansControllers@store');
// Route::get('/pertanyaans', 'pertanyaansControllers@index');
// Route::get('/pertanyaans/{id}/edit', 'pertanyaansControllers@edit');
// Route::put('/pertanyaans/{id}', 'pertanyaansControllers@update');
// Route::delete('/pertanyaans/{id}', 'pertanyaansControllers@destroy');
// Route::get('/pertanyaans/{id}', 'pertanyaansControllers@show');

Route::resource('pertanyaans', 'pertanyaansControllers');
