<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Eventos extends Model
{
    protected $table ='eventos';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'id',
        'titulo',
        'path',
        'contenido',
        'descripcion',
        'estado',
        'direccion',
        'script',
        'contador_visitas',
        'fecha_desde',
        'fecha_hasta',
        'hora_inicio',
        'precio',
        'categoria_id',
        'parroquias_id',
         'year',
          'mes',

    ];

    public function categoria_evento(){
        return $this->belongsTo(CategoriasEventos::class,'categoria_id','id');
    }
    public function parroquias(){
    return $this->belongsTo(Parroquias::class,'parroquias_id','id');
    }

    public function galeria_eventos(){
        return $this->hasMany(GaleriaEventos::class);
    }

      public function comentarios(){
        return $this->hasMany(ComentariosEventos::class);
    }

      public function scopeName($query, $table_search){
       if(trim($table_search) != ""){
           $query->where('titulo', "=", $table_search);

       }
    }

     public function setPathAttribute($path){

        if(!empty($path)){
            /* Para Actualizar Imagen */
            if(!empty($this->attributes['path'])){
                \Storage::delete($this->attributes['path']);
            }
            $this->attributes['path'] = Carbon::now()->second.$path->getClientOriginalName();
            $name = Carbon::now()->second.$path->getClientOriginalName();
            \Storage::disk('local')->put($name, \File::get($path));
        }
    }
}
