<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGuiaFotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guia_fotos', function (Blueprint $table) {
            $table->increments('id'); // te crea automaticamente la clave primaria
            $table->integer('orden');
            $table->string('path')->nullable();
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
        Schema::dropIfExists('guia_fotos');
    }
}
