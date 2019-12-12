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
Route::resource('/proyectos','ProyectoController')->only([
    'index', 'create', 'update', 'destroy', 'show'
]);

Route::get('/proyectos', 'ProyectoController@index')->name('proyectos.index');
Route::get('/proyectos/create', 'ProyectoController@create')->name('proyectos.create');
Route::post('/proyectos', 'ProyectoController@store')->name('proyectos.store');
Route::get('/proyectos/{id}', 'ProyectoController@show')->name('proyectos.show');
Route::get('/proyectos/{id}/edit', 'ProyectoController@edit')->name('proyectos.edit');
Route::post('/proyectos/{id}/update', 'ProyectoController@update')->name('proyectos.update');
Route::delete('/proyectos/{id}', 'ProyectoController@destroy')->name('proyectos.destroy');



Route::get('/Departamentos','DepartamentoController@index')->name('Dep');

