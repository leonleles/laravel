<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller {
    public function index(Request $request) {
        dd($request);
        return 'Index contato';
    }

    public function create() {
        return 'Index contato';
    }

    public function edit() {
        return 'Index contato';
    }
}
