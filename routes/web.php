<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;
use App\Models\Producto;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

/** Grupo de rutas ventas */
Route::group(['prefix' => 'ventas', 'as' => 'ventas.'], function () {
    
    Route::get('/listado', [VentaController::class, 'index'])->name('index');
    Route::post('/crear', [VentaController::class, 'store'])->name('crear');
});


/** Grupo de rutas productos */
Route::group(['prefix' => 'productos', 'as' => 'productos.'], function () {
    
    Route::get('/listado', [ProductoController::class, 'index'])->name('index');
    Route::post('/crear', [ProductoController::class, 'store'])->name('crear');
    Route::get('/editar/{producto}', [ProductoController::class, 'edit'])->name('editar');
    Route::post('/actualizar', [ProductoController::class, 'update'])->name('actualizar');
    Route::get('/eliminar/{producto}', [ProductoController::class, 'destroy'])->name('eliminar');

});

