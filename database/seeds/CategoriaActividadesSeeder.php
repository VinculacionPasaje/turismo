<?php

use Illuminate\Database\Seeder;
use App\CategoriaActividades;

class CategoriaActividadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoriaActividades::create([
            'categoria'=>'Deportes de Aventura',
            'descripcion'=>'<p>Categoria para deportes de aventura en Pasaje</p>',
            'estado'=>'1',
            'contador_visitas'=>'0',

        ]);
    }
}
