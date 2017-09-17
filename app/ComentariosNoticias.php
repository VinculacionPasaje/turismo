<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComentariosNoticias extends Model
{
    protected $table ='comentarios_noticias';
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
        'noticias_id',
  

    ];


    public function noticias(){
    return $this->belongsTo(Noticia::class,'noticias_id','id');
    }

  

      public function scopeName($query, $table_search){
       if(trim($table_search) != ""){
           $query->where('usuario_id', "=", $table_search);

       }
    }

     
}
