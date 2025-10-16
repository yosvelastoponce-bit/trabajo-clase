<?php

namespace App\Http\Controllers\Estudiantes;

use App\Models\Estudiante;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\{Redirect,View};
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    public function index(Request $request) {

        $estudiantes = Estudiante::orderBy('id', 'DESC')->get();

        return view('estudiantes.index', compact('estudiantes'));
    }

    public function create() {

        return View::make('estudiantes.create');
    }

    public function store(Request $request) {

        $estudiante = Estudiante::create($request->all());

        return Redirect::to('/estudiantes/index');
    }

    public function edit($id) {

        $estudiante = Estudiante::find($id);

        return View::make('estudiantes.edit', compact('estudiante'));
    }

    public function update(Request $request) {

        return $request->all();
    }
}
