<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('html101');
});

Route::get('/ice', function () {
    return view('template.dafault');
});