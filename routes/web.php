<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\PostoController;
use App\Http\Controllers\LeituraController;
use App\Http\Controllers\BombaController;
use App\Http\Controllers\BicoController;
use App\Http\Controllers\TurnoController;



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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// ------------------------ USUÁRIOS ------------------------
Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');

Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');

Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');

// ------------------------ CONTRATOS ------------------------
Route::get('/contrato', [ContratoController::class, 'index'])->name('contrato.index');

Route::get('/contrato/create', [ContratoController::class, 'create'])->name('contrato.create');
Route::post('/contrato/create', [ContratoController::class, 'store'])->name('contrato.store');

Route::get('/contrato/{id}', [ContratoController::class, 'show'])->name('contrato.show');

Route::get('/contrato/{id}/edit', [ContratoController::class, 'edit'])->name('contrato.edit');
Route::put('/contrato/{id}', [ContratoController::class, 'update'])->name('contrato.update');

Route::delete('/contrato/{id}', [ContratoController::class, 'destroy'])->name('contrato.destroy');

// ------------------------ POSTOS ------------------------
Route::get('/posto', [PostoController::class, 'index'])->name('posto.index');

Route::get('/posto/create', [PostoController::class, 'create'])->name('posto.create');
Route::post('/posto/create', [PostoController::class, 'store'])->name('posto.store');

Route::get('/posto/{id}', [PostoController::class, 'show'])->name('posto.show');

Route::get('/posto/{id}/edit', [PostoController::class, 'edit'])->name('posto.edit');
Route::put('/posto/{id}', [PostoController::class, 'update'])->name('posto.update');

Route::delete('/posto/{id}', [PostoController::class, 'destroy'])->name('posto.destroy');

// ------------------------ LEITURAS ------------------------
Route::get('/leitura', [LeituraController::class, 'index'])->name('leitura.index');

Route::get('/leitura/create', [LeituraController::class, 'create'])->name('leitura.create');
Route::post('/leitura/create', [LeituraController::class, 'store'])->name('leitura.store');

Route::get('/leitura/{id}', [LeituraController::class, 'show'])->name('leitura.show');

Route::get('/leitura/{id}/edit', [LeituraController::class, 'edit'])->name('leitura.edit');
Route::put('/leitura/{id}', [LeituraController::class, 'update'])->name('leitura.update');

Route::delete('/leitura/{id}', [LeituraController::class, 'destroy'])->name('leitura.destroy');

// ------------------------ BOMBAS ------------------------
Route::get('/bomba', [BombaController::class, 'index'])->name('bomba.index');

Route::get('/bomba/create', [BombaController::class, 'create'])->name('bomba.create');
Route::post('/bomba/create', [BombaController::class, 'store'])->name('bomba.store');

Route::get('/bomba/{id}', [BombaController::class, 'show'])->name('bomba.show');

Route::get('/bomba/{id}/edit', [BombaController::class, 'edit'])->name('bomba.edit');
Route::put('/bomba/{id}', [BombaController::class, 'update'])->name('bomba.update');

Route::delete('/bomba/{id}', [BombaController::class, 'destroy'])->name('bomba.destroy');


// ------------------------ BICOS ------------------------
Route::get('/bico', [BicoController::class, 'index'])->name('bico.index');

Route::get('/bico/create', [BicoController::class, 'create'])->name('bico.create');
Route::post('/bico/create', [BicoController::class, 'store'])->name('bico.store');

Route::get('/bico/{id}', [BicoController::class, 'show'])->name('bico.show');

Route::get('/bico/{id}/edit', [BicoController::class, 'edit'])->name('bico.edit');
Route::put('/bico/{id}', [BicoController::class, 'update'])->name('bico.update');

Route::delete('/bico/{id}', [BicoController::class, 'destroy'])->name('bico.destroy');


// ------------------------ TURNOS ------------------------
Route::get('/turno', [TurnoController::class, 'index'])->name('turno.index');

Route::get('/turno/create', [TurnoController::class, 'create'])->name('turno.create');
Route::post('/turno/create', [TurnoController::class, 'store'])->name('turno.store');

Route::get('/turno/{id}', [TurnoController::class, 'show'])->name('turno.show');

Route::get('/turno/{id}/edit', [TurnoController::class, 'edit'])->name('turno.edit');
Route::put('/turno/{id}', [TurnoController::class, 'update'])->name('turno.update');

Route::delete('/turno/{id}', [TurnoController::class, 'destroy'])->name('turno.destroy');
