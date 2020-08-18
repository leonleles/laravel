<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Model\Curso;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index() {
        $cursos = Curso::all();
        return view('home', compact('cursos'));
   }
}
