<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Alimentacion extends Model
{
    protected $table ='alimentacion';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'nombre_lugar',
        'descripcion',
        'fecha_post',
        'direccion',
        'telefono',
        'path',
        'contenido',
        'contador_visitas',
        'estado',
        'id_categorias',
        'id_parroquias',
    ];

    public function categoria(){
        return $this->belongsTo(CategoriaAlimentacion::class,'id_categorias','id');
    }
    public function parroquias(){
        return $this->belongsTo(Parroquias::class,'id_parroquias','id');
    }

       public function comentarios(){
        return $this->hasMany(ComentariosAlimentacion::class);
    }

       public function galeria_alimentacion(){
        return $this->hasMany(GaleriaAlimentacion::class);
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

    public function scopeName($query, $table_search){
       if(trim($table_search) != ""){
           $query->where('nombre_lugar', "LIKE", "%$table_search%");

       }
    }
}
