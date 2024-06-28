<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\imcController;
use App\Http\Controllers\NotaController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [imcController::class,'index']);

Route::get('/imc/calcularImc', [imcController::class,'calcularImc'])->name("imc.calcular");

Route::post('/imc/store', [ImcController::class,'store'])->name('imc.store');

Route::get('/imc/show', [ImcController::class,'show']);

Route::delete('/imc/delete/{id}', [ImcController::class,'destroy'])->name('imc.delete');

Route::put('/imc/update/{id}', [ImcController::class,'update'])->name('imc.update');