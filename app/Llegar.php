<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Llegar extends Model
{
    protected $table ='llegar';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'titulo',
        'script',
        'contenido',
        'contador_visitas',
        'estado',
       
    ];
}
