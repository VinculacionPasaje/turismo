<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGaleriaNoticias extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeria_noticias', function (Blueprint $table) {
            $table->increments('id'); // te crea automaticamente la clave primaria
            $table->string('titulo',500);
            $table->string('descripcion', 255);
            $table->date('fecha_post');
            $table->string('path')->nullable();
             $table->char('estado',1)->default(1);
             $table->integer('noticias_id')->unsigned();


            $table->foreign('noticias_id')->references('id')->on('noticias')->onDelete('cascade');
          
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galeria_noticias');
    }
}
