<?php

namespace App\Http\Controllers\Comentarios;

use App\Http\Controllers\Controller;
use App\Models\Comentario;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ComentariosController extends Controller
{
    public function index(Request $request) {

        $comentarios = Comentario::get();

        return View::make('comentarios.index', compact('comentarios'));
    }
}
