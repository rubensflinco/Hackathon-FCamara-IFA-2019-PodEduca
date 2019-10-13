<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campanha extends Model
{
    protected $table = 'campanha';

    public $timestamps = false;

    protected $fillable = [
        'id', 'nome', 'participante_id', 'facilitador_id'
    ];
}
