<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableParroquiasActividades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parroquias_actividades', function (Blueprint $table) {
            $table->increments('id'); // te crea automaticamente la clave primaria
            $table->integer('parroquias_id')->unsigned();
            $table->integer('actividades_id')->unsigned();
            $table->foreign('parroquias_id')->references('id')->on('parroquias')
                    ->onDelete('cascade');
            $table->foreign('actividades_id')->references('id')->on('actividades')
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
        Schema::dropIfExists('parroquias_actividades');
    }
}
