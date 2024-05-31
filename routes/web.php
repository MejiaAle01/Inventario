<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\productosController;
use App\Http\Controllers\proveedoresController;
use App\Http\Controllers\transaccionesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [authController::class, 'index'])->name('login.index');
Route::post('/verify', [authController::class, 'login'])->name('verify-user');
Route::get('/dashboard', [authController::class, 'logados'])->name('login.dashboard')->middleware('auth');
Route::get('/logout', [authController::class, 'logout'])->name('login.logout');
Route::get('/vistaRegistroForm', [authController::class, 'vistaRegistroForm'])->name('registroForm.vista');
Route::post('/registrarUsuario', [authController::class, 'registrarUsuario'])->name('usuario.crear');

// Hacer grupo
//Route::get('/transacciones/crear', [transaccionesController::class, 'create'])->name('transaccion.create');
Route::post('/transacciones/guardar', [transaccionesController::class, 'store'])->name('transaccion.store');
Route::get('/transacciones/editar/{id}', [transaccionesController::class, 'edit'])->name('transaccion.edit');
Route::put('/transacciones/actualizar/{id}', [transaccionesController::class, 'update'])->name('transaccion.update');
Route::get('/transacciones/mostrar/{id}', [transaccionesController::class, 'show'])->name('transaccion.show');
Route::delete('/transacciones/eliminar/{id}', [transaccionesController::class, 'delete'])->name('transaccion.delete');

/*Route::controller(transaccionesController::class)->group(function () {
    Route::get('/transacciones/crear', 'create');
});*/

Route::name('transacciones.')->group(function () {
    Route::get('/crear', [transaccionesController::class, 'create'])->name('transaccion.create');
});

// Hacer grupo
Route::get('/proveedores/create', [proveedoresController::class, 'create'])->name('proveedor.create');

// Hacer grupo
Route::get('/productos/create', [productosController::class, 'create'])->name('producto.create');
