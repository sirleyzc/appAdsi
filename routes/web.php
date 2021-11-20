<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\DetFacturaController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

//Routes Categoria
Route::middleware(['auth:sanctum'])->get('/api/categoria', [CategoriaController::class, 'index'])->name('categoria');
Route::middleware(['auth:sanctum'])->post('/api/categoria/registrar', [CategoriaController::class, 'store']);
Route::middleware(['auth:sanctum'])->put('/api/categoria/actualizar', [CategoriaController::class, 'update']);
Route::middleware(['auth:sanctum'])->post('/api/categoria/eliminar', [CategoriaController::class, 'destroy']);
Route::middleware(['auth:sanctum'])->get('/api/categoria/getCat', [CategoriaController::class, 'getCategoria']);

//Routes Marca
Route::middleware(['auth:sanctum'])->get('/api/marca', [MarcaController::class, 'index'])->name('marca');
Route::middleware(['auth:sanctum'])->post('/api/marca/registrar', [MarcaController::class, 'store']);
Route::middleware(['auth:sanctum'])->post('/api/marca/registrar', [MarcaController::class, 'store']);
Route::middleware(['auth:sanctum'])->put('/api/marca/actualizar', [MarcaController::class, 'update']);
Route::middleware(['auth:sanctum'])->delete('/api/marca/eliminar', [MarcaController::class, 'destroy']);

//Routes Cliente
Route::middleware(['auth:sanctum'])->get('/api/cliente', [ClienteController::class, 'index'])->name('cliente');
Route::middleware(['auth:sanctum'])->post('/api/cliente/registrar', [ClienteController::class, 'store']);
Route::middleware(['auth:sanctum'])->post('/api/cliente/registrar', [ClienteController::class, 'store']);
Route::middleware(['auth:sanctum'])->post('/api/cliente/actualizar', [ClienteController::class, 'update']);
Route::middleware(['auth:sanctum'])->post('/api/cliente/eliminar', [ClienteController::class, 'destroy']);

//Routes Producto
Route::post('/api/producto/registrar', [ProductoController::class, 'store']);

//Routes Factura
Route::post('/api/factura/registrar', [FacturaController::class, 'store']);

//Routes DetFactura
Route::post('/api/detFactura/registrar', [DetFacturaController::class, 'store']);