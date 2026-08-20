<?php

use App\Http\Controllers\AuthController;
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

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('index');
});

Route::get('/productos', [ProductoController::class, 'index'])->name('productos');
Route::get('/productos/crear', [ProductoController::class, 'create'])->middleware('auth')->name('productos.create');
Route::post('/productos', [ProductoController::class, 'store'])->middleware('auth')->name('productos.store');

Route::get('/contacto', function () {
    return view('contacto');
});
Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');

Route::get('/panel', [ContactoController::class, 'index'])->middleware('auth')->name('panel');
