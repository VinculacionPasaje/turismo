<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComentariosAlimentacion extends Model
{
    protected $table ='comentarios_alimentacion';
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
        'alimentacion_id',
      

    ];



    public function alimentacion(){
    return $this->belongsTo(Alimentacion::class,'alimentacion_id','id');
    }
    public function scopeName($query, $table_search){
       if(trim($table_search) != ""){
           $query->where('nombre', "LIKE", "%$table_search%");

       }
    }
}
