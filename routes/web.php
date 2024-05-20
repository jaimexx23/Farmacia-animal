<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CargosController;
// routes/web.php



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas web para tu aplicación.
| Estas rutas son cargadas por RouteServiceProvider dentro de un grupo que
| contiene el middleware "web". ¡Ahora crea algo genial!
|
*/

// Mostrar todos los productos
Route::get('admin/productos', [ProductosController::class, 'index'])->name('admin.productos.admin.index');
Route::get('admin/productos/crear', [ProductosController::class, 'crear'])->name('admin.productos.crear');
Route::post('admin/productos', [ProductosController::class, 'store'])->name('productos.store');
Route::get('admin/productos/{id}/editar', [ProductosController::class, 'editar'])->name('admin.productos.edit');
Route::put('admin/productos/{id}', [ProductosController::class, 'actualizar'])->name('admin.productos.update');
Route::delete('admin/productos/{id}', [ProductosController::class, 'eliminar'])->name('admin.productos.destroy');


// Rutas para marcas
Route::get('/admin/marcas', [MarcasController::class, 'index'])->name('marcas.index');
Route::get('/admin/marcas/crear', [MarcasController::class, 'crear'])->name('marcas.crear');
Route::post('/admin/marcas', [MarcasController::class, 'store'])->name('marcas.store');
Route::get('/admin/marcas/{id}', [MarcasController::class, 'show'])->name('marcas.show');
Route::get('/admin/marcas/{id}/editar', [MarcasController::class, 'actualizar'])->name('marcas.editar');





// Rutas para clientes
Route::get('admin/clientes', [ClientesController::class, 'index'])->name('admin.clientes.index');
Route::get('/admin/clientes/crear', [ClientesController::class, 'crear'])->name('admin.clientes.crear');
Route::post('/clientes', [ClientesController::class, 'store'])->name('clientes.store');
Route::get('admin/clientes/{id}/edit', [ClientesController::class, 'actualizar'])->name('admin.clientes.edit');
Route::put('admin/clientes/{id}', [ClientesController::class, 'update'])->name('admin.clientes.update');
Route::delete('admin/clientes/{id}', [ClientesController::class, 'eliminar'])->name('admin.clientes.destroy');


// Rutas para la gestión de cargos
Route::get('admin/cargos', [CargosController::class, 'index'])->name('admin.cargos.index');
Route::get('admin/cargos/crear', [CargosController::class, 'crear'])->name('admin.cargos.crear');
Route::post('admin/cargos', [CargosController::class, 'store'])->name('admin.cargos.store');
Route::get('admin/cargos/{id}', [CargosController::class, 'show'])->name('admin.cargos.show');
Route::get('admin/cargos/{id}/editar', [CargosController::class, 'actualizar'])->name('admin.cargos.edit');
Route::put('admin/cargos/{id}', [CargosController::class, 'update'])->name('admin.cargos.update');
Route::delete('admin/cargos/{id}', [CargosController::class, 'eliminar'])->name('admin.cargos.destroy');




// Ruta de bienvenida y autenticación
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
