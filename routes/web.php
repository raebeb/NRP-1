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

Route::get('/', ['as' => 'inicio', function (){return view('inicio');}]);

Route::get('planificar', ['as' => 'planificar', function(){return view('planificar');}]);

Route::get('historial', ['as' => 'historial', function(){return view('historial');}]);

Route::get('log-acceso', ['as' => 'log-acceso', function(){return view('logAcceso');}]);

Route::get('gestionar-usuarios', ['as' => 'gestionar-usuarios', function(){return view('gestionar-usuarios');}]);
