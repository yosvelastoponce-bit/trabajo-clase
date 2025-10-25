<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Models\{Comentario,Estudiante};

use App\Http\Controllers\Estudiantes\EstudiantesController;
use App\Http\Controllers\Comentarios\ComentariosController;


Route::get('/', function () {
    
    /*$estudiante = new Estudiante();
    $estudiante->nombres = 'Jose';
    $estudiante->pri_ape = 'Sanchez';
    $estudiante->seg_ape = 'Carrion';
    $estudiante->save();

    return $estudiante;*/

    /*$estudiante = Estudiante::create([
        'codigo' => '1002',
        'nombres' => 'Edickzon',
        'pri_ape' => 'Veramendi',
        'seg_ape' => 'Malpartida',
        'dni'   => '67484937',
    ]);

    $estudiante->comentarios()->create([
        'descripcion' => 'Ud. ha cumplido con su trabajo',
        'curso' => 'Ing. de Sofware con Met. Agiles'
    ]);

    return $estudiante;*/

    /*$estudiante = Estudiante::find(3);

    $estudiante->comentarios()->create([
        'descripcion' => 'Ud. tambien esta fino en Java.',
        'curso' => 'Java Developer'
    ]);

    return $estudiante;*/

    //$estudiante = Estudiante::get();
    //dd($estudiante);

    //$comentario = Comentario::where('estudiante_id', 3)->get();
    //return $comentario;

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


Route::get('/comentarios/index', [ComentariosController::class, 'index'])->name('comentarios.index');
Route::get('/comentarios/create', [ComentariosController::class, 'create'])->name('comentarios.create');
Route::post('/comentarios/store', [ComentariosController::class, 'store'])->name('comentarios.store');
Route::get('/comentarios/edit/{id}', [ComentariosController::class, 'edit'])->name('comentarios.edit');
Route::post('/comentarios/update/{comentario}', [ComentariosController::class, 'update'])->name('comentarios.update');
