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

Route::get('/', 'ComerciantesController@view');

Route::get('/comerciantes', 'ComerciantesController@index');
Route::get('/comerciantes/criar', 'ComerciantesController@create');
Route::post('/comerciantes/criar', 'ComerciantesController@store');
Route::delete('/comerciantes/remover/{id}', 'ComerciantesController@destroy');
