<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Missoes extends Model
{

    protected $table = 'missoes';

    public $timestamps = false;
    
    protected $fillable = [
        'id', 'nome', 'descricao', 'poder_id',
    ];
}
