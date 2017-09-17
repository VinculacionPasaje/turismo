<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableComentariosDiversion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios_diversion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('email');
            $table->text('comentario');
                    $table->text('respuesta_comentario')->nullable();
            $table->date('fecha');
            $table->time('hora')->nullable();
             $table->date('fecha_respuesta')->nullable();
            $table->time('hora_respuesta')->nullable();
            $table->char('estado',1)->default(1);
            $table->char('aprovado',1)->default(0);
            $table->integer('diversion_id')->unsigned();


            $table->foreign('diversion_id')->references('id')->on('diversion')
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
        Schema::dropIfExists('comentarios_diversion');
    }
}
