<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\OdontogramController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\HistogramaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
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

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resources([
    'pacientes'               => PacienteController::class,
    'histograma'              => HistogramaController::class,
    'citas'                   => CitasController::class,
    'categorias'              => CategoriaController::class,
    'proveedores'             => ProveedorController::class,
    'productos'               => ProductoController::class
]);

Route::get('/pacientes_total', [PacienteController::class, 'mostrarTodos']);
Route::get('/odontograma', [OdontogramController::class, 'canvas']);
Route::get('/categorias_total', [CategoriaController::class, 'mostrarTodos']);

