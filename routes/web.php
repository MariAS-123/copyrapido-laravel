<?php

use App\Http\Controllers\TrabajoEspecialController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('trabajos.index');
});

Route::resource('trabajos',TrabajoEspecialController::class, );
