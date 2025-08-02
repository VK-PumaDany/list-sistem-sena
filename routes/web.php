<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hola', function () {
//     $nombre = "aaa";
//     return "hola numero 1 {$nombre}" ;
// });

Route::get('/hola/{nombre?}', function ($nombre = "default") {
    return "hola numero 1 {$nombre}";
});

Route::get('/perfil', function () {
    return "<h1>noo</h1>";
})->name('perfil');

Route::redirect('/ruta-anterior', '/ruta-nueva');

Route::get('/ruta-nueva', function () {
    return "<h1>Ruta Nueva</h1>";
});

Route::get('/db', function () {
    return env('DB_DATABASE');
});

Route::get('/dd', function () {
    return dd("como asi");
});

Route::get('/producto', function () {
    return view('almacen.producto', ['nombre' => 'wao']);
});