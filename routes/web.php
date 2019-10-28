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

Route::get('/carros', 'CarroController@index');
Route::get('/caronas', 'CaronaController@index');
Route::get('/caronapas', 'CaronaPassageiroController@index');
Route::get('/cidades', 'CidadeController@index');
Route::get('/destinos', 'DestinoController@index');
Route::get('/estados', 'EstadoController@index');
Route::get('/modelos', 'ModeloController@index');
Route::get('/usuarios', 'UsuarioController@index');
