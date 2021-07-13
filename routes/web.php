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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');

Route::get('/clientes/create', [App\Http\Controllers\ClienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [App\Http\Controllers\ClienteController::class, 'store'])->name('clientes.store');
Route::get('/clientes', [App\Http\Controllers\ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/{cliente}', [App\Http\Controllers\ClienteController::class, 'show'])->name('clientes.show');
Route::get('/clientes/{cliente}/edit', [App\Http\Controllers\ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/{cliente}', [App\Http\Controllers\ClienteController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/{cliente}', [App\Http\Controllers\ClienteController::class, 'destroy'])->name('clientes.destroy');

Route::get('/sucursales/create', [App\Http\Controllers\SucursalController::class, 'create'])->name('sucursales.create');
Route::post('/sucursales', [App\Http\Controllers\SucursalController::class, 'store'])->name('sucursales.store');
Route::get('/sucursales', [App\Http\Controllers\SucursalController::class, 'index'])->name('sucursales.index');
Route::get('/sucursales/{sucursal}', [App\Http\Controllers\SucursalController::class, 'show'])->name('sucursales.show');
Route::get('/sucursales/{sucursal}/edit', [App\Http\Controllers\SucursalController::class, 'edit'])->name('sucursales.edit');
Route::put('/sucursales/{sucursal}', [App\Http\Controllers\SucursalController::class, 'update'])->name('sucursales.update');
Route::delete('/sucursales/{sucursal}', [App\Http\Controllers\SucursalController::class, 'destroy'])->name('sucursales.destroy');

Route::get('/plantas/create', [App\Http\Controllers\PlantaController::class, 'create'])->name('plantas.create');
Route::post('/plantas', [App\Http\Controllers\PlantaController::class, 'store'])->name('plantas.store');
Route::get('/plantas', [App\Http\Controllers\PlantaController::class, 'index'])->name('plantas.index');
Route::get('/plantas/{planta}', [App\Http\Controllers\PlantaController::class, 'show'])->name('plantas.show');
Route::get('/plantas/{planta}/edit', [App\Http\Controllers\PlantaController::class, 'edit'])->name('plantas.edit');
Route::put('/plantas/{planta}', [App\Http\Controllers\PlantaController::class, 'update'])->name('plantas.update');
Route::delete('/plantas/{planta}', [App\Http\Controllers\PlantaController::class, 'destroy'])->name('plantas.destroy');

Route::get('/estaciones/create', [App\Http\Controllers\EstacionController::class, 'create'])->name('estaciones.create');
Route::post('/estaciones', [App\Http\Controllers\EstacionController::class, 'store'])->name('estaciones.store');
Route::get('/estaciones', [App\Http\Controllers\EstacionController::class, 'index'])->name('estaciones.index');
Route::get('/estaciones/{estacion}', [App\Http\Controllers\EstacionController::class, 'show'])->name('estaciones.show');
Route::get('/estaciones/{estacion}/edit', [App\Http\Controllers\EstacionController::class, 'edit'])->name('estaciones.edit');
Route::put('/estaciones/{estacion}', [App\Http\Controllers\EstacionController::class, 'update'])->name('estaciones.update');
Route::delete('/estaciones/{estacion}', [App\Http\Controllers\EstacionController::class, 'destroy'])->name('estaciones.destroy');

Route::get('/transportistas/create', [App\Http\Controllers\TransportistaController::class, 'create'])->name('transportistas.create');
Route::post('/transportistas', [App\Http\Controllers\TransportistaController::class, 'store'])->name('transportistas.store');
Route::get('/transportistas', [App\Http\Controllers\TransportistaController::class, 'index'])->name('transportistas.index');
Route::get('/transportistas/{transportista}', [App\Http\Controllers\TransportistaController::class, 'show'])->name('transportistas.show');
Route::get('/transportistas/{transportista}/edit', [App\Http\Controllers\TransportistaController::class, 'edit'])->name('transportistas.edit');
Route::put('/transportistas/{transportista}', [App\Http\Controllers\TransportistaController::class, 'update'])->name('transportistas.update');
Route::delete('/transportistas/{transportista}', [App\Http\Controllers\TransportistaController::class, 'destroy'])->name('transportistas.destroy');

Route::get('/vehiculos/create', [App\Http\Controllers\VehiculoController::class, 'create'])->name('vehiculos.create');
Route::post('/vehiculos', [App\Http\Controllers\VehiculoController::class, 'store'])->name('vehiculos.store');
Route::get('/vehiculos', [App\Http\Controllers\VehiculoController::class, 'index'])->name('vehiculos.index');
Route::get('/vehiculos/{vehiculo}', [App\Http\Controllers\VehiculoController::class, 'show'])->name('vehiculos.show');
Route::get('/vehiculos/{vehiculo}/edit', [App\Http\Controllers\VehiculoController::class, 'edit'])->name('vehiculos.edit');
Route::put('/vehiculos/{vehiculo}', [App\Http\Controllers\VehiculoController::class, 'update'])->name('vehiculos.update');
Route::delete('/vehiculos/{vehiculo}', [App\Http\Controllers\VehiculoController::class, 'destroy'])->name('vehiculos.destroy');

Route::get('/residuos/create', [App\Http\Controllers\ResiduoController::class, 'create'])->name('residuos.create');
Route::post('/residuos', [App\Http\Controllers\ResiduoController::class, 'store'])->name('residuos.store');
Route::get('/residuos', [App\Http\Controllers\ResiduoController::class, 'index'])->name('residuos.index');
Route::get('/residuos/{residuo}', [App\Http\Controllers\ResiduoController::class, 'show'])->name('residuos.show');
Route::get('/residuos/{residuo}/edit', [App\Http\Controllers\ResiduoController::class, 'edit'])->name('residuos.edit');
Route::put('/residuos/{residuo}', [App\Http\Controllers\ResiduoController::class, 'update'])->name('residuos.update');
Route::delete('/residuos/{residuo}', [App\Http\Controllers\ResiduoController::class, 'destroy'])->name('residuos.destroy');

Route::get('/manifiestos/create', [App\Http\Controllers\ManifiestoController::class, 'create'])->name('manifiestos.create');
Route::get('/manifiestos', [App\Http\Controllers\ManifiestoController::class, 'index'])->name('manifiestos.index');
Route::post('/manifiestos', [App\Http\Controllers\ManifiestoController::class, 'store'])->name('manifiestos.store');
Route::get('/LE/create', [App\Http\Controllers\LimpiezaEcologicaController::class, 'create'])->name('LE.create');
Route::POST('/LE/store', [App\Http\Controllers\LimpiezaEcologicaController::class, 'store'])->name('LE.store');
Route::get('/RME/create', [App\Http\Controllers\ResiduosManejoEspecialController::class, 'create'])->name('RME.create');
Route::get('/MRP/create', [App\Http\Controllers\ResiduosPeligrososController::class, 'create'])->name('MRP.create');