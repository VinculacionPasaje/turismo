<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableComentariosHospedaje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios_hospedaje', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('email');
            $table->text('comentario');
                    $table->text('respuesta_comentario')->nullable();
            $table->date('fecha');
            $table->time('hora')->nullable();
            $table->char('estado',1)->default(1);
            $table->char('aprovado',1)->default(0);
            $table->integer('hospedaje_id')->unsigned();


            $table->foreign('hospedaje_id')->references('id')->on('hospedaje')
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
        Schema::dropIfExists('comentarios_hospedaje');
    }
}
