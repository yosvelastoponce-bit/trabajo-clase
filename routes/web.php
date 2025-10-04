<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Models\Estudiante;

Route::get('/', function () {
    
    $estudiante = new Estudiante();
    $estudiante->nombres = 'Jose';
    $estudiante->pri_ape = 'Sanchez';
    $estudiante->seg_ape = 'Carrion';
    $estudiante->save();

    return $estudiante;
    
    //return view('welcome');
});

Route::get('/saludos', function() {
    return 'Hola amiguitos!';
})->name('saluditos');

Route::get('/bienvenidos', function() {
    return view('bienvenidos');
})->name('bienvenidos');

Route::get('/estudiantes', function() {
    return View::make('estudiantes');
})->name('estudiantes');