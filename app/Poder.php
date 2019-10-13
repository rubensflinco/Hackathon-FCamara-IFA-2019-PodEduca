<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poder extends Model
{

    protected $table = 'poderes';

    public $timestamps = false;
    
    protected $fillable = [
        'id', 'nome', 'descricao', 'icone_url'
    ];
}
