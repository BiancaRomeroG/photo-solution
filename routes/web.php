<?php

use App\Http\Controllers\CatalogNotificationController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\FotografiaController;
use App\Http\Controllers\FotografoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\PaqueteShowController;
use App\Http\Controllers\QrController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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
Route::get('/pago-register', [PagoController::class, 'index'])->name('pago.index');


Route::group(['middleware'=> 'disable_back'],function(){
    Route::middleware([
        'auth:sanctum', config('jetstream.auth_session'), 'verified'
    ])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
       
        Route::get('/card-fotografo', [FotografoController::class, 'index'])->name('fotografo.index');

        Route::get('/evento', [EventoController::class, 'index'])->name('evento.index');
        Route::get('/eventocreate/{id}', [EventoController::class, 'create'])->name('evento.create');
        Route::post('/eventostore/{id}', [EventoController::class, 'storeevento'])->name('evento.storeevento');
        Route::get('/catalogo/{id}', [CatalogoController::class, 'show'])->name('catalogo.show');
        Route::resource('paquete', PaqueteController::class);
        Route::get('/paqueteshow', [PaqueteShowController::class, 'show'])->name('paqueteshow');
        Route::resource('fotografia', FotografiaController::class);
        Route::post('/profilephoto',[UserController::class,'update_photo'])->name('profile.update_photo');
        Route::get('/user.show/{id}',[UserController::class, 'show'])->name('user.show');
        Route::get('/userdestroy',[UserController::class, 'destroy'])->name('user.destroy');
    
        // Route::get('send-notification', [CatalogNotificationController::class, 'sendNotification'])->name('notification.send');
    });
});
