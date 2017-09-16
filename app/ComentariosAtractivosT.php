<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComentariosAtractivosT extends Model
{
    protected $table ='comentarios_atractivosTuristicos';
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
        'turistico_id',
      

    ];



    public function alimentacion(){
    return $this->belongsTo(Alimentacion::class,'turistico_id','id');
    }
    public function scopeName($query, $table_search){
       if(trim($table_search) != ""){
           $query->where('nombre', "LIKE", "%$table_search%");

       }
    }
}
