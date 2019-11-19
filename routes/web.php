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

Route::get('/','EmpleadoController@index')->name('Emp');
Route::get('/Proyectos','ProyectoController@index')->name('Proy');
Route::get('/Departamentos','DepartamentoController@index')->name('Dep');