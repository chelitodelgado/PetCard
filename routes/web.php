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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', 'RutasController@index')->name('index');

Route::get('GenerarId', 'RutasController@generate')->name('generadorid');

Route::get('Sobre', 'RutasController@about')->name('about');

Route::get('Contacto', 'RutasController@contact')->name('contact');
