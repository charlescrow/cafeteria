<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;
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
    
    $info['mayorStock'] = DB::SELECT("
        SELECT * FROM productos WHERE stock = (select MAX(stock) from productos)
    ");

    $info['masVendido'] = DB::SELECT("
        select sum(ventas.cantidad) as cantidadMayor, p.nombre from ventas 
        inner join productos as p on p.id = ventas.producto_id
        group by producto_id 
        order by cantidadMayor desc
    ");

    return view('welcome', $info);

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

