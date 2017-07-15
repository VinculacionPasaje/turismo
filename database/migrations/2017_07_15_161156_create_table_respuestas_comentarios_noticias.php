<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRespuestasComentariosNoticias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas_comentarios_noticias', function (Blueprint $table) {
            $table->increments('id');
            $table->text('comentario');
            $table->integer('contador_like')->default(0);
            $table->date('fecha');
            $table->time('hora')->nullable();
            $table->char('estado',1)->default(1);
            $table->integer('comentario_id')->unsigned();
            
            $table->foreign('comentario_id')->references('id')->on('comentarios_noticias')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuestas_comentarios_noticias');
    }
}
