<?php

use Illuminate\Database\Seeder;
use App\Material;

class MaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Material::create([
            'contenido'=>'<p> Contenido de prueba </p>',
            'fecha'=>'2017-03-17',
            'contador_visitas'=> 1,

        ]);
    }
}
