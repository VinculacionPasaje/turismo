<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableComentariosAtractivosTuristicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios_atractivosTuristicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('email');
            $table->text('comentario');
                    $table->text('respuesta_comentario')->nullable();
            $table->date('fecha');
            $table->time('hora')->nullable();
            $table->char('estado',1)->default(1);
            $table->char('aprovado',1)->default(0);
            $table->integer('turistico_id')->unsigned();


            $table->foreign('turistico_id')->references('id')->on('turistico')
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
        Schema::dropIfExists('comentarios_atractivosTuristicos');
    }
}
