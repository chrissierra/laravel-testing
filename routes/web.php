<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\FormularioContactoController;
use App\Models\articulos;
use App\Models\User;
use App\Models\FormularioContacto;
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
    return view('inicio', ['articulos' => $articulos ]);

})->name('inicio');


Route::get('/deportes', function () {

    $articulos = articulos::all();
    return view('deportes', ['articulos' => $articulos ]);

})->name('deportes');

Route::get('/negocios', function () {

    $articulos = articulos::all();
    return view('negocios', ['articulos' => $articulos ]);

})->name('negocios');

Route::get('/dashboard', function () {
    $usuarios = User::all();
    $formulario_contacto = FormularioContacto::all();
    return view('dashboard', ['usuarios' => $usuarios , 'formulario' => $formulario_contacto ]);
})->name('dashboard');

Route::resource('articulos', ArticulosController::class);

Route::resource('formulariocontacto', FormularioContactoController::class);
require __DIR__.'/auth.php';
