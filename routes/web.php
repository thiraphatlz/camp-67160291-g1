<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('template.html101');
});

Route::get('/ice', function () {
    return view('template.dafault');
});

Route::get('/mycontroller', [\App\Http\Controllers\MyController::class, 'index']);
Route::get('/calculate', [\App\Http\Controllers\MyController::class, 'info']);
Route::post('/calculate', [\App\Http\Controllers\MyController::class, 'calculate']);