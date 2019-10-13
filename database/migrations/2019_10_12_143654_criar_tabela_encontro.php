<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaEncontro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encontro', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('facilitador_id');
            $table->string('participante_id');
            $table->unsignedInteger('campanha_id');
            $table->unsignedInteger('poder_id');
            $table->date('data');
            $table->unsignedInteger('missao_id');
            $table->boolean('atingiuMissao');
            $table->boolean('presente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encontro');
    }
}
