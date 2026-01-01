<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController;

Route::get('/', function () {
    return view('schneider');
});

Route::post('/enviar-reserva', [ReservaController::class, 'enviar'])->name('enviar.reserva');