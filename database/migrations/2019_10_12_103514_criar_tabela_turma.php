<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaTurma extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('turmas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('codigo');
            $table->unsignedInteger('intituicao_id');
            $table->unsignedInteger('facilitador_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turmas');
        
    }
}
