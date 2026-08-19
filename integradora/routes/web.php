<?php

use App\Models\Libro;
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

Route::get('/libros', function () {
    $libros = Libro::all();
    return view('libros', compact('libros'));
});
Route::get('/libros/nuevo', function () {
    return view('libros-nuevo');
});
Route::post('/libros/nuevo', function () {
    $datos = request()->validate(
        [
            'titulo' => 'required',
            'precio' => 'required|integer'
        ],
        [
            'titulo.required' => 'Falta el título del libro.',
            'precio.required' => 'Falta el precio del libro.',
            'precio.integer' => 'Ese precio no es un número entero.'
        ]
    );
    Libro::create([
        'titulo' => request()->input('titulo'),
        'precio' => request()->input('precio')
    ]);
    return redirect('/libros');
});
