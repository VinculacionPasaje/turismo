<?php

use Illuminate\Database\Seeder;
use App\Guia;


class GuiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Guia::create([
            'id'=> 1,
            'titulo'=>'Guía Turística del Cantón Pasaje',
            'descripcion'=>'Bienvenido al sitio oficial de turismo de Pasaje, aqui te ofrecemos la guía oficial de la ciudad de Pasaje. Visita los atractivos turísticos que ofrece el cantón Pasaje, sus hospedajes, restaurantes y disfruta de los  más emocionantes eventos y festividades como teatro,   conciertos, exposiciones de arte y mucho más. Descubre lo mejor de Pasaje y sus alrededores.',
            'estado'=>1,

        ]);
    }
}
