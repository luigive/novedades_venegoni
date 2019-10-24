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
Route::post('/categoria/agregar','categoriaController@create')->name("categorias_guardar");
Route::get('/categoria/editar/{id}','categoriaController@edit')->name("editar_categoria");
Route::put('/categoria/actualizar/{id}','categoriaController@update')->name("categorias_actualizar");
Route::delete('/categoria/borrar/{id}','categoriaController@delete')->name("eliminar_categoria");

//Route::get('prueba','MainController@index')->name('prueba');

//Rutas de productos
Route::get('/productos/crear','ProductoController@create')->name("crear_productos");
Route::post('/productos/crear','ProductoController@store')->name("guardar_productos");
Route::get('/productos','ProductoController@index')->name("productos");