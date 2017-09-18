<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loaf extends Model
{
    protected $table ='loaf';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'id',
        'titulo',
        'contenido',
        'pdf',
        'fecha_post',
        'contador_visitas',
        'estado',
 
    ];

 

  
}
