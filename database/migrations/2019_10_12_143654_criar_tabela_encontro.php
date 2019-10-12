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
            $table->unsignedInteger('participante_id');
            $table->unsignedInteger('poder_id');
            $table->string('data');
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
