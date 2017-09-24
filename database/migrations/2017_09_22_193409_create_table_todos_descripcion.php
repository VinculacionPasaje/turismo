<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTodosDescripcion extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos_descripcion', function (Blueprint $table) {
            $table->increments('id'); // te crea automaticamente la clave primaria
            $table->string('titulo_atractivos',500);
            $table->text('contenido_atractivos');

            $table->string('titulo_hospedajes',500);
            $table->text('contenido_hospedajes');

            $table->string('titulo_alimentacion',500);
            $table->text('contenido_alimentacion');

             $table->string('titulo_diversion',500);
            $table->text('contenido_diversion');

            $table->string('titulo_actividades',500);
            $table->text('contenido_actividades');

            $table->string('titulo_gastronomia',500);
            $table->text('contenido_gastronomia');


            $table->char('estado',1)->default(1);
          
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todos_descripcion');
    }
}
