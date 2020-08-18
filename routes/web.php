<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', ['as' => 'site.home', 'uses' => 'Site\HomeController@index']);

Route::get('/contato/{id?}', ['uses' => 'ContatoController@index']);

Route::post('/contato/{id?}', ['uses' => 'ContatoController@create']);

Route::put('/contato/{id?}', ['uses' => 'ContatoController@edit']);

Route::get('/admin/cursos', ['as' => 'admin.cursos', 'uses' => 'Admin\CursoController@index']);
Route::get('/admin/cursos/adicionar', ['as' => 'admin.cursos.adicionar', 'uses' => 'Admin\CursoController@create']);
Route::post('/admin/cursos/salvar', ['as' => 'admin.cursos.salvar', 'uses' => 'Admin\CursoController@save']);
Route::get('/admin/cursos/editar/{id}', ['as' => 'admin.cursos.editar', 'uses' => 'Admin\CursoController@edit']);
Route::put('/admin/cursos/atualizar/{id}', ['as' => 'admin.cursos.atualizar', 'uses' => 'Admin\CursoController@atualizar']);
Route::get('/admin/cursos/deletar/{id}', ['as' => 'admin.cursos.deletar', 'uses' => 'Admin\CursoController@delete']);
