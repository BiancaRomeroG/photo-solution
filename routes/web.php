<?php

use App\Http\Controllers\EventoController;
use App\Http\Controllers\FotografoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\RegisterController;
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
    return view('welcome');
});

Route::get('/register-fotografo', [RegisterController::class, 'create'])->name('register-fotografo');
Route::post('/register-fotografo', [RegisterController::class, 'store'])->name('fotografo.store');
Route::get('/evento', [EventoController::class, 'index'])->name('evento.index');
Route::get('/eventocreate/{id}', [EventoController::class, 'create'])->name('evento.create');
Route::post('/eventostore/{id}', [EventoController::class, 'storeevento'])->name('evento.storeevento');

Route::get('/paquetes',[PaqueteController::class,'index'])->name('paquetes.index');
Route::get('/paquetescreate',[PaqueteController::class,'create'])->name('paquetes.create');

Route::middleware([
    'auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/pago-register', [PagoController::class, 'index'])->name('pago.index');
    Route::get('/card-fotografo', [FotografoController::class, 'index'])->name('fotografo.index');
});
