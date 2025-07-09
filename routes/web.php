<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelacionesController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\RevistaController;
use App\Http\Controllers\VerSubsController;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/menuG', function () {
    return view('menuG');
});

Route::get('/menuS', function () {
    return view('menuS');
});

Route::resource('/articulos', 'App\Http\Controllers\ArticuloController');
Route::post('/articulos/guardar', 'App\Http\Controllers\ArticuloController@store');
Route::post('/articulos/editar', 'App\Http\Controllers\ArticuloController@update');
Route::post('/articulos/eliminar', 'App\Http\Controllers\ArticuloController@destroy');

Route::get('/revistas', 'App\Http\Controllers\RevistaController@index');
Route::post('/revista', 'App\Http\Controllers\RevistaController@store');
Route::put('/revista/edit/{id}', 'App\Http\Controllers\RevistaController@update');
Route::delete('/revista/delete/{id}', 'App\Http\Controllers\RevistaController@destroy');

Route::resource('/relaciones', 'App\Http\Controllers\RelacionesController');
Route::post('/relaciones/guardar', 'App\Http\Controllers\RelacionesController@store');
Route::post('/relaciones/editar', 'App\Http\Controllers\RelacionesController@update');
Route::post('/relaciones/eliminar', 'App\Http\Controllers\RelacionesController@destroy');

Route::get('/autores', 'App\Http\Controllers\AutorController@index');
Route::post('/autores', 'App\Http\Controllers\AutorController@store');
Route::put('/autores/edit/{id}', 'App\Http\Controllers\AutorController@update');
Route::delete('/autores/delete/{id}', 'App\Http\Controllers\AutorController@destroy');

Route::resource('/verSubs', 'App\Http\Controllers\VerSubsController');
Route::get('/revistas/{id}/articulos', 'App\Http\Controllers\RevistaController@verArticulos');
Route::get('/articulos/{titulo}/autores', 'App\Http\Controllers\ArticuloController@verAutores');
