<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Models\Estudiante;

use App\Http\Controllers\Estudiantes\EstudiantesController;

Route::get('/', function () {
    
    /*$estudiante = new Estudiante();
    $estudiante->nombres = 'Jose';
    $estudiante->pri_ape = 'Sanchez';
    $estudiante->seg_ape = 'Carrion';
    $estudiante->save();

    return $estudiante;*/
    
    return view('welcome');
});

Route::get('/saludos', function() {
    return 'Hola amiguitos!';
})->name('saluditos');

Route::get('/bienvenidos', function() {
    return view('bienvenidos');
})->name('bienvenidos');

/*Route::get('/estudiantes', function() {
    return View::make('estudiantes');
})->name('estudiantes');*/

Route::get('/estudiantes/index', [EstudiantesController::class, 'index'])->name('estudiantes.index');
Route::get('/estudiantes/create', [EstudiantesController::class, 'create'])->name('estudiantes.create');
Route::post('/estudiantes/store', [EstudiantesController::class, 'store'])->name('estudiantes.store');
Route::get('/estudiantes/edit/{id}', [EstudiantesController::class, 'edit'])->name('estudiantes.edit');
Route::post('/estudiantes/update/{estudiante}', [EstudiantesController::class, 'update'])->name('estudiantes.update');
Route::get('/estudiantes/delete/{id}', [EstudiantesController::class, 'delete'])->name('estudiantes.delete');
Route::post('/estudiantes/destroy/{estudiante}', [EstudiantesController::class, 'destroy'])->name('estudiantes.destroy');
