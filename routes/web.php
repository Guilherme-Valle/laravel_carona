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
Route::post('carros/save', 'CarroController@salvarCarro');
Route::get('/caronas', 'CaronaController@index');
Route::post('/caronas/save', 'CaronaController@salvarCarona');
Route::get('/caronapas', 'CaronaPassageiroController@index');
Route::post('caronapas/save', 'CaronaPassageiroController@salvarCaronaPas');
Route::get('/cidades', 'CidadeController@index');
Route::post('cidades/save', 'CidadeController@salvarCidade');
Route::get('/destinos', 'DestinoController@index');
Route::post('/destinos/save', 'DestinoController@salvarDestino');
Route::get('/estados', 'EstadoController@index');
Route::post('estados/save', 'EstadoController@salvarEstado');
Route::get('/modelos', 'ModeloController@index');
Route::post('modelos/save', 'ModeloController@salvarModelo');
Route::get('/usuarios', 'UsuarioController@index');
Route::post('usuarios/save', 'UsuarioController@salvarUsuario');
