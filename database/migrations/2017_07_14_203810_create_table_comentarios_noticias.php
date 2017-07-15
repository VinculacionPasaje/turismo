<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableComentariosNoticias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios_noticias', function (Blueprint $table) {
            $table->increments('id');
            $table->text('comentario');
            $table->integer('contador_like')->default(0);
            $table->date('fecha');
            $table->time('hora')->nullable();
            $table->char('estado',1)->default(1);
            $table->integer('noticias_id')->unsigned();
            $table->integer('usuario_id')->unsigned();

            $table->foreign('noticias_id')->references('id')->on('noticias')
                ->onDelete('cascade');
            $table->foreign('usuario_id')->references('id')->on('users')
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
        Schema::dropIfExists('comentarios_noticias');
    }
}
