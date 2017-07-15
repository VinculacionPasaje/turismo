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
        'comentario',
        'contador_like',
        'fecha',
        'hora',
        'estado',
        'noticias_id',
        'usuario_id',

    ];

    public function usuario(){
        return $this->belongsTo(User::class,'usuario_id','id');
    }
    public function noticias(){
    return $this->belongsTo(Noticia::class,'noticias_id','id');
    }

      public function scopeName($query, $table_search){
       if(trim($table_search) != ""){
           $query->where('fecha', "LIKE", "%$table_search%");

       }
    }
}
