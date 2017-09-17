<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComentariosDiversion extends Model
{
    protected $table ='comentarios_diversion';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'id',
        'nombre',
        'email',
        'comentario',
             'respuesta_comentario',
        'fecha',
        'hora',
         'fecha_respuesta',
        'hora_respuesta',
        'estado',
        'aprovado',
        'diversion_id',
      

    ];



    public function alimentacion(){
    return $this->belongsTo(Alimentacion::class,'diversion_id','id');
    }
    public function scopeName($query, $table_search){
       if(trim($table_search) != ""){
           $query->where('nombre', "LIKE", "%$table_search%");

       }
    }
}
