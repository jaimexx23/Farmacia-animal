<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CargosController;
use App\Http\Controllers\ProveedoresController;



Route::get('admin/productos', [ProductosController::class, 'index'])->name('admin.productos.index');
Route::get('admin/productos/crear', [ProductosController::class, 'crear'])->name('admin.productos.crear');
Route::post('admin/productos', [ProductosController::class, 'store'])->name('productos.store');
Route::get('admin/productos/{id}/editar', [ProductosController::class, 'editar'])->name('admin.productos.edit');
Route::put('admin/productos/{id}', [ProductosController::class, 'update'])->name('admin.productos.update');
Route::delete('admin/productos/{id}', [ProductosController::class, 'destroy'])->name('admin.productos.destroy');


Route::get('/admin/marcas', [MarcasController::class, 'index'])->name('marcas.index');
Route::get('/admin/marcas/crear', [MarcasController::class, 'crear'])->name('marcas.crear');
Route::post('/admin/marcas', [MarcasController::class, 'store'])->name('marcas.store');
Route::get('/admin/marcas/{id}', [MarcasController::class, 'show'])->name('marcas.show');
Route::get('/admin/marcas/{id}/editar', [MarcasController::class, 'actualizar'])->name('marcas.editar');
Route::delete('/admin/marcas/{id}', [MarcasController::class, 'eliminar'])->name('marcas.eliminar');

Route::get('admin/clientes', [ClientesController::class, 'index'])->name('admin.clientes.index');
Route::get('admin/clientes/crear', [ClientesController::class, 'crear'])->name('admin.clientes.crear');
Route::post('admin/clientes', [ClientesController::class, 'store'])->name('admin.clientes.store');
Route::get('admin/clientes/{id}/edit', [ClientesController::class, 'actualizar'])->name('admin.clientes.actualizar');
Route::put('admin/clientes/{id}', [ClientesController::class, 'update'])->name('admin.clientes.update');
Route::delete('admin/clientes/{id}', [ClientesController::class, 'eliminar'])->name('admin.clientes.destroy');


Route::get('admin/cargos', [CargosController::class, 'index'])->name('admin.cargos.index');
Route::get('admin/cargos/crear', [CargosController::class, 'crear'])->name('admin.cargos.crear');
Route::post('admin.cargos', [CargosController::class, 'store'])->name('admin.cargos.store');
Route::get('admin.cargos/{id}/editar', [CargosController::class, 'editar'])->name('admin.cargos.edit');
Route::put('admin.cargos/{id}', [CargosController::class, 'actualizar'])->name('admin.cargos.update');
Route::delete('admin.cargos/{id}', [CargosController::class, 'eliminar'])->name('admin.cargos.destroy');


Route::get('admin/proveedores', [ProveedoresController::class, 'index'])->name('admin.proveedores.index');
Route::get('admin/proveedores/crear', [ProveedoresController::class, 'crear'])->name('admin.proveedores.crear');
Route::post('admin/proveedores', [ProveedoresController::class, 'store'])->name('admin.proveedores.store');
Route::get('admin/proveedores/{id}/actualizar', [ProveedoresController::class, 'actualizar'])->name('admin.proveedores.actualizar'); // Cambiada la ruta de edición a 'actualizar'
Route::put('admin/proveedores/{id}', [ProveedoresController::class, 'update'])->name('admin.proveedores.update');
Route::delete('admin/proveedores/{id}', [ProveedoresController::class, 'destroy'])->name('admin.proveedores.destroy');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
