<?php

use Illuminate\Database\Seeder;

use App\Footer;

class FooterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Footer::create([
            'id'=>1,
            'telefono'=>'593 (7) 291-5234',
            'fax'=>'FALTA FAX',
            'direccion'=> 'Av. Bolívar entre Municipalidad y Juan Montalvo',
            'web'=> 'www.municipiodepasaje.gob.ec',
            'anio'=> '2017',
            'email'=> 'grupoturismopasaje@gmail.com',
            'estado'=> 1,

        ]);
    }
}
