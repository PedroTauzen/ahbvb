<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SecaoTeste extends Model
{
    protected $fillable = [
        'titulo',
        'descricao',
        'imagem',
    ];
}
