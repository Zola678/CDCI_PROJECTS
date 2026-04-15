<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\RequestServiceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| LANDING PAGE
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');


/*
|--------------------------------------------------------------------------
| CADASTRO PERSONALIZADO (CLIENTE)
|--------------------------------------------------------------------------
*/
Route::get('/register-client', [ClientController::class, 'create'])
    ->name('client.create');

Route::post('/register-client', [ClientController::class, 'store'])
    ->name('client.store');


/*
|--------------------------------------------------------------------------
| AUTHENTICATED AREA (CLIENTE)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD CLIENTE
    |--------------------------------------------------------------------------
    */
    Route::get('/dashboard', [ServiceController::class, 'index'])
        ->name('dashboard');

    /*
    |--------------------------------------------------------------------------
    | PEDIDOS DE SERVIÇO
    |--------------------------------------------------------------------------
    */
    Route::post('/request-service/{id}', [RequestServiceController::class, 'store'])
        ->name('request.service');

    Route::get('/my-requests', [RequestServiceController::class, 'index'])
        ->name('requests.index');

    /*
    |--------------------------------------------------------------------------
    | PROFILE (BREEZE)
    |--------------------------------------------------------------------------
    */
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


/*
|--------------------------------------------------------------------------
| ADMIN AREA (PROTEGIDA)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin', [AdminController::class, 'index'])
        ->name('admin');

});


/*
|--------------------------------------------------------------------------
| AUTH (BREEZE)
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';