<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCatastros extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catastros', function (Blueprint $table) {
            $table->increments('id'); // te crea automaticamente la clave primaria
            $table->string('titulo',1000);
            $table->string('descripcion', 500);
            $table->string('pdf',500);
            $table->date('fecha_post');
            $table->string('path')->nullable();
            $table->integer('contador_visitas')->nullable(); // el contador de visitas permitira valores nulos por ahora
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
        Schema::dropIfExists('catastros');
    }
}
