<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/productos', function () {
    return view('productos');
});
Route::get('/productos', [ProductoController::class, 'index'])->name('productos');
Route::get('/productos/crear', [ProductoController::class, 'create'])->name('productos.create');
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');

Route::get('/contacto', function () {
    return view('contacto');
});
Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');
