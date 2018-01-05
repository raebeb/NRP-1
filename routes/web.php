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

Route::get('/', ['as' => 'inicio', 'uses' => 'PagesController@inicio']);

Route::get('planificar', ['as' => 'planificar', 'uses' => 'PagesController@planificar']);

Route::get('historial', ['as' => 'historial', 'uses' => 'PagesController@historial']);

Route::get('log-acceso', ['as' => 'log-acceso', 'uses' => 'PagesController@logAcceso']);

Route::get('gestionar-usuarios', ['as' => 'gestionar-usuarios', 'uses' => 'PagesController@gestionarUsuarios']);
