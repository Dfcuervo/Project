<?php

use Illuminate\Support\Facades\Route;
//Agregamos los controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\TipoPagoController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\DetalleContratoController;


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
    return view('inicio');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function(){
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('categorias', CategoriaController::class);
    Route::resource('servicios', ServicioController::class);
    Route::resource('tipo_pagos', TipoPagoController::class);
    Route::resource('contratos', ContratoController::class);
    Route::resource('detalle_contratos', DetalleContratoController::class);
});
