<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{

    protected $table = 'instituicoes';

    public $timestamps = false;
    
    protected $fillable = [
        'id', 'nome', 'cep', 'logradouro','numero', 'complemento', 'bairro', 'localidade', 'uf'
    ];
}
