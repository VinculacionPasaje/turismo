<?php

use Illuminate\Database\Seeder;
use App\Loaf;

class LoafTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Loaf::create([
            'id'=> 1,
            'titulo'=>'Proceso de Licencia Turística LOAF',
            'contenido'=>'Descripción de Ejemplo',
            'fecha_post'=>'2017-05-15',
            'contador_visitas'=>0,
            'estado'=>1,

        ]);
    }
}
