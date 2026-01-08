<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//   return view('template.html101');
// });

Route::get('/', [\App\Http\Controllers\MyController::class, 'html101']);
Route::post('/', [\App\Http\Controllers\MyController::class,'result']);

Route::get('/se', function () {
    return view('template.dafault');
});

Route::get('/mycontroller', [\App\Http\Controllers\MyController::class, 'index']);

Route::get('/calculate', [\App\Http\Controllers\MyController::class, 'info']);
Route::post('/calculate', [\App\Http\Controllers\MyController::class, 'calculate']);

Route::resource('/flights', \App\Http\Controllers\FlightController::class);

Route::resource('/pokedexs', \App\Http\Controllers\PokedexsController::class);