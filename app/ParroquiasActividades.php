<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParroquiasActividades extends Model
{
    protected $table ='parroquias_actividades';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'parroquias_id',
        'actividades_id',

    ];

  
}
