<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableParroquias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parroquias', function (Blueprint $table) {
            $table->increments('id'); // te crea automaticamente la clave primaria
            $table->string('parroquia',500);
            $table->date('fecha_post');
            $table->string('path')->nullable();
            $table->text('contenido');
            $table->text('traer');
            $table->integer('contador_visitas')->default(0);
            $table->char('estado',1)->default(1);
            $table->integer('id_zonas')->unsigned()->nullable();
            $table->foreign('id_zonas')
                ->references('id')->on('zonas');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parroquias');
    }
}
