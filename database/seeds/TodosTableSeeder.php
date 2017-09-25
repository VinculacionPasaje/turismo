<?php

use Illuminate\Database\Seeder;
use App\TodasActividades;

class TodosTableSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
        TodasActividades::create([
            'id'=> 1,
            'titulo_atractivos'=>'Todas los Atractivos Turísticos',
            'contenido_atractivos'=>'Hay una ciudad por descubrir, una sociedad por investigar, una gente por amar y un tiempo por recordar. A través de éstos espacios pretendemos perpetuar la conciencia colectiva con imágenes, documentos, vídeos que sin duda tendrán un valor positivo para el conocimiento de nuestra identidad como asentamiento urbano y para el reconocimiento de nuestros espacios que son paraíso en la tierra.',

             'titulo_hospedajes'=>'Todos los Hospedajes',
            'contenido_hospedajes'=>'La ciudad de Pasaje cuenta con distintos locales de hospedajes tales como hoteles, hostales y hosterias, las mismas que se muestran a continuación:',

             'titulo_alimentacion'=>'Sitios de Alimentación',
            'contenido_alimentacion'=>'La ciudad de Pasaje cuenta con distintos locales de alimentación como restaurantes, fuentes de sodas y cafeterías, las mismas que se muestran a continuación:',

             'titulo_diversion'=>'Sitios de Diversión',
            'contenido_diversion'=>'La ciudad de Pasaje cuenta con distintos locales de diversión como bares, discotecas, centro de eventos y karaokes, las mismas que se muestran a continuación:',

             'titulo_actividades'=>'Todas las actividades',
            'contenido_actividades'=>'En las áreas naturales del Cantón Pasaje se encuentran zonas adecuadas para la práctica de actividades como: kayak, ciclismo, entre otros. El clima ideal del cantón Pasaje y sus múltiples espacios nos invitan a adentrarnos en experiencias maravillosas tanto de deportes extremos como a ser parte de las diferentes actividades que pueden realizarse en este lugar.',

             'titulo_gastronomia'=>'Gastronomía',
            'contenido_gastronomia'=>'Descripción de Ejemplo',
            'estado'=>1,

        ]);
    }
}
