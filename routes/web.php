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

Route::get('/','MainController@index')->name('principal');
Route::get('/contactanos','ContactoController@index')->name('contacto');



//Route::get('prueba','MainController@index')->name('prueba');
