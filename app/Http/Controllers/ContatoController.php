<?php

namespace App\Http\Controllers;

use App\Model\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller {
    public function index(Request $request) {
        $contatos = [
            (object)['nome' => "Maria", 'telefone' => '0000-0000'],
            (object)['nome' => "João", 'telefone' => '1111-1111'],
            (object)['nome' => "Joana", 'telefone' => '2222-2222'],
        ];

        $contato = new Contato();
        $con = $contato->index();
        dd($con->nome);

        return view('contato.index', compact('contatos'));
    }

    public function create() {
        return 'Index contato';
    }

    public function edit() {
        return 'Index contato';
    }
}
