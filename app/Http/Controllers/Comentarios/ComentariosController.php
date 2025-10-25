<?php

namespace App\Http\Controllers\Comentarios;

use App\Http\Controllers\Controller;
use App\Models\Comentario;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class ComentariosController extends Controller
{
    public function index(Request $request) {

        $comentarios = Comentario::get();

        return View::make('comentarios.index', compact('comentarios'));
    }

    public function create() {
     
        $estudiantes = Estudiante::get();

        return View::make('comentarios.create', compact('estudiantes'));
    }

    public function store(Request $request) {

        $request->validate([
            'estudiante_id' => 'required',
            'descripcion'   => 'required'
        ]);

        $comentario = Comentario::create($request->all());

        return Redirect::to('/comentarios/index');
    }

    public function edit($id) {

        $estudiantes = Estudiante::get();

        $comentario = Comentario::with('estudiante')->find($id);

        return View::make('comentarios.edit', compact('comentario', 'estudiantes'));
    }

    public function update(Request $request, Comentario $comentario) {

        $comentario->update([
            'estudiante_id' => $request->estudiante_id,
            'descripcion'   => $request->descripcion,
            'curso'         => $request->curso
        ]);

        return Redirect::to('/comentarios/index');
    }
}
