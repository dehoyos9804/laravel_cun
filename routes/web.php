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

/*Route::get('/', function () {
    //return view('welcome');
    return csrf_token();
    //tbJFkZdG5XUoRGExVNHnkjslvNrK43Heuac5FdSO
});*/

Route::get('/user', 'UserController@index');
Route::post('/user/post', 'UserController@store');

//rutas para la prueba del taller
Route::get('/modulo/index', 'ModuloController@index');
Route::get('/modulo/create', 'ModuloController@create');
Route::post('/modulo/store', 'ModuloController@store');

//rutas para la prueba del taller 2
Route::post('/historial/store', 'HistorialController@store');//primer punto
Route::get('/cliente/index', 'ClienteController@index');//primer punto
Route::post('/cliente/store', 'ClienteController@store');//segundo punto
Route::post('/cliente/guardar', 'ClienteController@guardarCreate');//segundo punto
Route::post('/estudiante/guardar_attach', 'EstudianteController@storeAttach');//tercer punto
Route::post('/estudiante/guardar_sync', 'EstudianteController@storeSync');//tercer punto
Route::get('/pais/index', 'PaisController@index');//cuarto punto

//rutas para la prueba del taller 3
Route::post('/comentario/store_create', 'ComentarioController@storeCreate');//segundo punto
Route::post('/comentario/store_createmany', 'ComentarioController@storeCreateMany');//segundo punto
Route::get('/comentario/index', 'ComentarioController@index');//tercer punto
Route::get('/comentario/get_noticia', 'ComentarioController@getNoticias');//tercer punto

//rutas para el primer taller corte 3
Route::post('/estudiante/store', 'EstudianteController@store');