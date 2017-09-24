<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodasActividades extends Model
{
    protected $table ='todos_descripcion';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[

      
        'id',
        'titulo_atractivos',
        'contenido_atractivos',
          'titulo_hospedajes',
        'contenido_hospedajes',
          'titulo_alimentacion',
        'contenido_alimentacion',
          'titulo_diversion',
        'contenido_diversion',
          'titulo_actividades',
        'contenido_actividades',
          'titulo_gastronomia',
        'contenido_gastronomia',
        'estado',
 
    ];
}
