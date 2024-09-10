<?php

use App\Http\Controllers\VeiculosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/veiculos', [VeiculosController::class, 'index']);