<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComentariosEventos extends Model
{
    protected $table ='comentarios_eventos';
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
        'estado',
        'aprovado',
        'eventos_id',
      

    ];



    public function eventos(){
    return $this->belongsTo(Eventos::class,'eventos_id','id');
    }
    public function scopeName($query, $table_search){
       if(trim($table_search) != ""){
           $query->where('titulo', "LIKE", "%$table_search%");

       }
    }
}
