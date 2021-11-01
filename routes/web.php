<?php

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
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\DetFacturaController;

Route::get('/', function () {
    return view('welcome');
});

//Routes Categoria
Route::get('/api/categoria', [CategoriaController::class, 'index']);
Route::post('/api/categoria/registrar', [CategoriaController::class, 'store']);
Route::put('/api/categoria/actualizar', [CategoriaController::class, 'update']);
Route::post('/api/categoria/eliminar', [CategoriaController::class, 'destroy']);
Route::get('/api/categoria/getCat', [CategoriaController::class, 'getCategoria']);

//Routes Marca
Route::get('/api/marca', [MarcaController::class, 'index']);
Route::post('/api/marca/registrar', [MarcaController::class, 'store']);
Route::put('/api/marca/actualizar', [MarcaController::class, 'update']);
Route::delete('/api/marca/eliminar', [MarcaController::class, 'destroy']);

//Routes Cliente
Route::get('/api/cliente', [ClienteController::class, 'index']);
Route::post('/api/cliente/registrar', [ClienteController::class, 'store']);
Route::post('/api/cliente/actualizar', [ClienteController::class, 'update']);
Route::post('/api/cliente/eliminar', [ClienteController::class, 'destroy']);

//Routes Producto
Route::post('/api/producto/registrar', [ProductoController::class, 'store']);

//Routes Factura
Route::post('/api/factura/registrar', [FacturaController::class, 'store']);

//Routes DetFactura
Route::post('/api/detFactura/registrar', [DetFacturaController::class, 'store']);
