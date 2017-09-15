<?php

use Illuminate\Database\Seeder;
use App\Catastros;


class CatastrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Catastros::create([
            'id'=> 5000,
            'titulo'=>'este registro no debe ser borrado de la BD',
            'descripcion'=>'este registro no debe ser borrado de la BD',
            'pdf'=>'este registro no debe ser borrado de la BD',
            'fecha_post'=>'14/09/2017',
            'contador_visitas'=>0,
            'estado'=>0,

        ]);
    }
}
