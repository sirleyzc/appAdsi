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

Route::get('/', function () {
    return view('welcome');
});

//Routes Categoria
Route::post('/api/categoria/registrar', [CategoriaController::class, 'store']);
Route::get('/api/categoria', [CategoriaController::class, 'index']);

//Routes Marca
Route::post('/api/marca/registrar', [MarcaController::class, 'store']);
Route::get('/api/marca', [MarcaController::class, 'index']);

//Routes Cliente
Route::post('/api/cliente/registrar', [ClienteController::class, 'store']);
Route::get('/api/cliente', [ClienteController::class, 'index']);
