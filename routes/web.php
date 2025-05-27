<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImcController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\Autentication;

Route::get('/', [HomeController::class, 'index']);

Route::middleware(Autentication::class)->group(function () {
    Route::get('/imc', [ImcController::class, 'index'])->name('imc.index');

    Route::post('/imcCalcular', [ImcController::class, 'calcularImc'])->name('imc.calcular');

    Route::post('/imc', [ImcController::class, 'store'])->name('imc.store');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dash.index');
    Route::delete('/dashboard/delete/{id}', [DashboardController::class, 'destroy'])->name('dash.delete');
    Route::put('/dashboard/update/{id}', [DashboardController::class, 'update'])->name('dash.update');

});



Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'logar'])->name('logar');
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');