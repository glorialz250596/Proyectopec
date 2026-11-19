<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/acerca-de', function () {
    return view('acerca_de');
});

// Las demás rutas te llevarán a inicio temporalmente hasta que crees sus vistas
Route::get('/introduccion', function () {
    return view('inicio');
});

Route::get('/beneficios', function () {
    return view('inicio');
});

Route::get('/especies', function () {
    return view('inicio');
});

Route::get('/plantar', function () {
    return view('inicio');
});