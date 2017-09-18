<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEventos extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',500);
            $table->string('path')->nullable();
            $table->text('contenido');
            $table->string('descripcion', 255);
            $table->string('direccion', 255);
            $table->text('script');
            $table->integer('contador_visitas')->default(0);
            $table->date('fecha_desde');
            $table->date('fecha_hasta');
            $table->time('hora_inicio')->nullable();
            $table->decimal('precio',6,2);
            $table->char('estado',1)->default(1);
            $table->integer('categoria_id')->unsigned();
            $table->integer('parroquias_id')->unsigned();

            $table->foreign('categoria_id')->references('id')->on('categorias_eventos')
                ->onDelete('cascade');
            $table->foreign('parroquias_id')->references('id')->on('parroquias')
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
        Schema::dropIfExists('eventos');
    }
}
