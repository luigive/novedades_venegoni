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


//RUTAS PRINCIPALES --------------------------------------------------
Route::get('/','MainController@index')->name('principal');
Route::get('/contactanos','ContactoController@index')->name('contacto');

//RUTAS DE CATEGORIA------------------------------------------------
Route::get('/categoria','categoriaController@index')->name("categorias");
Route::get('/categoria/agregar','categoriaController@add')->name("categorias_add");


//Route::get('prueba','MainController@index')->name('prueba');
