<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encontro extends Model
{
    
    protected $table = 'encontro';

    public $timestamps = false;

    protected $fillable = [
        'id', 'facilitador_id', 'participante_id', 'campanha_id', 'poder_id', 'data', 'missao_id', 'atingiuMissao', 'presente'
    ];
}
