<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCategoriasGastronomia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias_gastronomia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('categoria');
            $table->string('descripcion');
            $table->string('estado',1)->default(1);;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias_gastronomia');
    }
}
