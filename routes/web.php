<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\productosController;
use App\Http\Controllers\proveedoresController;
use App\Http\Controllers\transaccionesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [authController::class, 'index'])->name('login.index');
Route::post('/verificarUsuario', [authController::class, 'login'])->name('verify.user');
Route::get('/dashboard', [authController::class, 'logados'])->name('login.dashboard')->middleware('auth');
Route::get('/cerrarSesion', [authController::class, 'logout'])->name('login.logout');
Route::get('/registroForm', [authController::class, 'vistaRegistroForm'])->name('registroForm.vista');
Route::post('/registrarUsuario', [authController::class, 'registrarUsuario'])->name('usuario.crear');

Route::controller(transaccionesController::class)
    ->prefix('transacciones')
    ->as('transaccion.')
    ->group(function () {
        Route::get('/inicio', 'index')->name('index');
        Route::get('/crear', 'create')->name('create');
        Route::post('/guardar', 'store')->name('store');
        Route::get('/editar/{id}', 'edit')->name('edit');
        Route::put('/actualizar/{id}', 'update')->name('update');
        Route::get('/mostrar/{id}', 'show')->name('show');
        Route::delete('/eliminar/{id}', 'destroy')->name('delete');
    });

Route::controller(proveedoresController::class)
    ->prefix('proveedores')
    ->as('proveedor.')
    ->group(function () {
        Route::get('/inicio', 'index')->name('index');
        Route::get('/crear', 'create')->name('create');
        Route::post('/guardar', 'store')->name('store');
        Route::get('/editar/{id}', 'edit')->name('edit');
        Route::put('/actualizar/{id}', 'update')->name('update');
        Route::get('/mostrar/{id}', 'show')->name('show');
        Route::delete('/eliminar/{id}', 'destroy')->name('delete');
    });

Route::controller(productosController::class)
    ->prefix('productos')
    ->as('producto.')
    ->group(function () {
        Route::get('/inicio', 'index')->name('index');
        Route::get('/crear', 'create')->name('create');
        Route::post('/guardar', 'store')->name('store');
        Route::get('/editar/{id}', 'edit')->name('edit');
        Route::put('/actualizar/{id}', 'update')->name('update');
        Route::get('/mostrar/{id}', 'show')->name('show');
        Route::delete('/eliminar/{id}', 'destroy')->name('delete');
    });

/*
Route::controller(authController::class)
    ->group(function () {
        Route::get('/', 'index')->name('login.index');
        Route::post('/verify', 'login')->name('verify.user');
        Route::get('/dashboard', 'logados')->name('login.dashboard')->middleware('auth');
        Route::get('/logout', 'logout')->name('login.logout');
        Route::get('/registroForm', 'vistaRegistroForm')->name('registroForm.vista');
        Route::post('/registrarUsuario', 'registrarUsuario')->name('usuario.crear');
    });
*/

/*Route::get('/transacciones/crear', [transaccionesController::class, 'create'])->name('transaccion.create');
Route::post('/transacciones/guardar', [transaccionesController::class, 'store'])->name('transaccion.store');
Route::get('/transacciones/editar/{id}', [transaccionesController::class, 'edit'])->name('transaccion.edit');
Route::put('/transacciones/actualizar/{id}', [transaccionesController::class, 'update'])->name('transaccion.update');
Route::get('/transacciones/mostrar/{id}', [transaccionesController::class, 'show'])->name('transaccion.show');
Route::delete('/transacciones/eliminar/{id}', [transaccionesController::class, 'delete'])->name('transaccion.delete');*/

/*Route::name('transacciones.')->group(function () {
    Route::get('/crear', [transaccionesController::class, 'create'])->name('transaccion.create');
});*/
