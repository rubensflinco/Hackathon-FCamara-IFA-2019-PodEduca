<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    //
    protected $table = 'participantes';

    public $timestamps = false;

    protected $fillable = [
        'id', 'nome', 'nick', 'senha','data_nascimento', 'genero', 'grupo', 'facilitador_id'
    ];

}
