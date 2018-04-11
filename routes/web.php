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

Route::get('/clientes/pesquisar', 'ClienteController@pesquisar');
Route::post('/clientes/pesquisar', 'ClienteController@pesquisar');

Route::get('/clientes/inserir', 'ClienteController@mostrar_inserir');
Route::post('/clientes/inserir', 'ClienteController@inserir');

Route::get('/clientes/alterar/{id}', 'ClienteController@mostrar_alterar');
Route::post('/clientes/alterar', 'ClienteController@alterar');

Route::get('/clientes/excluir/{id}', 'ClienteController@excluir');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
