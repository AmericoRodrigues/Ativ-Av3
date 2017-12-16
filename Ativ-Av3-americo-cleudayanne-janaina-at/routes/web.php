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

Route::get('lista-turmas', 'TurmaController@listaTurma');
Route::get('index-turmas', 'TurmaController@homeTurma');	
Route::get('cria-turma', 'TurmaController@formularioTurma');
Route::get('editar-turma/{id}', 'TurmaController@editarTurma');
Route::put('altera-turma/{id}', 'TurmaController@alteraTurma');
Route::post('salva-turma','TurmaController@salvarTurma');
Route::delete('deletar-turma/{id}', 'TurmaController@deletarTurma');
