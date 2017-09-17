<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComentariosHospedaje extends Model
{
    protected $table ='comentarios_hospedaje';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'id',
        'nombre',
        'email',
        'comentario',
             'respuesta_comentario',
              'fecha_respuesta',
        'hora_respuesta',
        'fecha',
        'hora',
        'estado',
        'aprovado',
        'hospedaje_id',
      

    ];



    public function alimentacion(){
    return $this->belongsTo(Alimentacion::class,'hospedaje_id','id');
    }
    public function scopeName($query, $table_search){
       if(trim($table_search) != ""){
           $query->where('nombre', "LIKE", "%$table_search%");

       }
    }
}
