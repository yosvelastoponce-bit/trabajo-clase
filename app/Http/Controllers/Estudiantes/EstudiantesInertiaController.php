<?php

namespace App\Http\Controllers\Estudiantes;

use App\Models\Estudiante;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
class EstudiantesInertiaController extends Controller
{
    //
    public function index(Request $request){

        $estudiantes = Estudiante::orderby('id', 'DESC')->get();

        return Inertia::render('Estudiante/Index', [
            'estudiantes'=> $estudiantes
        ]);
    }

    public function create(Request $request){
        return Inertia::render('Estudiante/Create');
    }

    public function store(Request $request){
        $estudiantes= Estudiante::create($request->all());

        return Redirect::route('estudiantes.index');
    }

    public function edit(Estudiante $estudiante){

        return Inertia::render('Estudiante/Edit',[
            'estudiante'=>$estudiante
        ]);
    }

    public function update(Request $request, Estudiante $estudiante){

        $estudiante->update($request->all());
        return Redirect::route('estudiantes.index');
    }
}
