<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/usuarios', 'userController@index');
Route::post('/EliminarUsuarios', 'userController@eliminarUsuario');
Route::get('/MostrarUsuarios', 'userController@mostrarUsuario');
Route::post('/ActualizarUsuarios', 'userController@actualizarUsuario');

