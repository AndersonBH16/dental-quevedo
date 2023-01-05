<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\OdontogramController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\HistoriaClinicaController;
//use App\Http\Controllers\ProductoController;
//use App\Http\Controllers\ProveedorController;
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
    'historial-clinico'       => HistoriaClinicaController::class,
    'citas'                   => CitasController::class,
    'categorias'              => CategoriaController::class,
    'inventario'              => InventarioController::class,
//    'proveedores'             => ProveedorController::class,
//    'productos'               => ProductoController::class
]);

Route::get('/pacientes_total', [App\Http\Controllers\PacienteController::class, 'mostrarTodos']);
Route::get('/categorias_total', [App\Http\Controllers\CategoriaController::class, 'mostrarTodos']);
Route::get('/productos_total', [App\Http\Controllers\InventarioController::class, 'mostrarTodos']);
Route::get('/pacientes/{paciente:dni}/odontograma', [\App\Http\Controllers\PacienteController::class, 'odontogram']);
Route::get('/historia-clinica/{paciente:dni}/ver-historial-clinico', [HistoriaClinicaController::class, 'index']);

Route::get('/odontograma', [\App\Http\Controllers\OdontogramController::class, 'canvas']);
Route::get('/odontograms/{id}/{tooth}', [\App\Http\Controllers\OdontogramController::class, 'display']);
Route::post('/odontograma', [\App\Http\Controllers\OdontogramController::class, 'data']);
Route::put('/odontograma', [\App\Http\Controllers\OdontogramController::class, 'update']);
