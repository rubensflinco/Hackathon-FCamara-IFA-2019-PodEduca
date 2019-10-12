<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $table = 'turmas';

    public $timestamps = false;

    protected $fillable = [
        'id', 'nome', 'codigo', 'intituicao_id', 'facilitador_id'
    ];

    public function instituicao() {
        return $this->belongsTo(Instituicao::class);
    }
}
