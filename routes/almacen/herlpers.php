<?php
use Illuminate\Support\Facades\Route;

Route::get('/producto/{id}', function () {
    return view('almacen.producto.detail');
});

Route::get('/producto', function () {
    return view('almacen.producto', ['nombre' => 'Computador']);
});