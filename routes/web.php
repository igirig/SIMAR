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

Route::get('/manifiestos/create', [App\Http\Controllers\ManifiestoController::class, 'create'])->name('manifiestos.create');
