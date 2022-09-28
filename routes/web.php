<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\FormularioContactoController;
use App\Models\articulos;
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

    $articulos = articulos::all();
    return view('template', ['articulos' => $articulos ]);
})->name('inicio');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('articulos', ArticulosController::class);

Route::resource('formulariocontacto', FormularioContactoController::class);
require __DIR__.'/auth.php';
