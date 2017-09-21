<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGaleriaAtractivos extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeria_atractivos', function (Blueprint $table) {
            $table->increments('id'); // te crea automaticamente la clave primaria
            $table->string('titulo',500);
            $table->string('descripcion', 255);
            $table->date('fecha_post');
            $table->string('path')->nullable();
             $table->char('estado',1)->default(1);
          

             $table->integer('atractivos_id')->unsigned();


            $table->foreign('atractivos_id')->references('id')->on('turistico')->onDelete('cascade');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galeria_atractivos');
    }
}
