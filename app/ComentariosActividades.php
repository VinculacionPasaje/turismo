<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComentariosActividades extends Model
{
    protected $table ='comentarios_atractivosT';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'id',
        'nombre',
        'email',
        'comentario',
        'fecha',
        'hora',
        'estado',
        'aprovado',
        'actividades_id',
      

    ];



    public function actividades(){
    return $this->belongsTo(Actividades::class,'actividades_id','id');
    }
}
