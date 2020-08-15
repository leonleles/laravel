<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'titulo', 'descricao', 'valor', 'publicado', 'imagem'
    ];
}
