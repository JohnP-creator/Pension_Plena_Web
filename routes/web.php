<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/privacidad', function () {
    return view('privacidad');
})->name('privacidad');

Route::post('/contacto', [ContactoController::class, 'enviar'])->name('contacto.enviar');
