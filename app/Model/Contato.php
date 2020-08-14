<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function index() {
        return (object)[
            'nome' => 'Leonardo Leles-',
            'tel' => '0000-0000'
        ];
    }
}
