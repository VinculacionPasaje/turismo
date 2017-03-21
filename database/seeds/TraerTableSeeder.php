<?php

use Illuminate\Database\Seeder;
use App\Traer;

class TraerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Traer::create([
            'contenido'=>'<p> Contenido de prueba </p>',
            'fecha'=>'2017-03-17',
            'contador_visitas'=> 1,

        ]);

       
    }
}
