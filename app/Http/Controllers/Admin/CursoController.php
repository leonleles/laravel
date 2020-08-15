<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index() {
        $registros = Curso::all();
        return view('admin.cursos.index', compact('registros'));
    }

    public function create () {
        return view('admin.cursos.adicionar');
    }
}
