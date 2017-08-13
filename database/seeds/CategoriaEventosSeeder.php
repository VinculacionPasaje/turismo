<?php

use Illuminate\Database\Seeder;
use App\CategoriasEventos;

class CategoriaEventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoriasEventos::create([
            'categoria'=>'Danza',
            'descripcion'=>'Categoria para danza',
            'estado'=>'1',


        ]);

         CategoriasEventos::create([
            'categoria'=>'Teatro',
            'descripcion'=>'Categoria para teatro',
            'estado'=>'1',
         

        ]);

        CategoriasEventos::create([
            'categoria'=>'Conciertos',
            'descripcion'=>'Categoria para conciertos',
            'estado'=>'1',


        ]);
    }
}
