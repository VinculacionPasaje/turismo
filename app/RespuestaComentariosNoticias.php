<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RespuestaComentariosNoticias extends Model
{
      protected $table ='respuestas_comentarios_noticias';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'id',
        'comentario',
        'contador_like',
        'fecha',
        'hora',
        'estado',
        'comentario_id',
       

    ];

    public function comentarios(){
        return $this->belongsTo(ComentariosNoticias::class,'comentario_id','id');
    }

      public function scopeName($query, $table_search){
       if(trim($table_search) != ""){
           $query->where('usuario_id', "=", $table_search);

       }
    }
}
