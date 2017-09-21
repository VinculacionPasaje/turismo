<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Actividades extends Model
{
    protected $table ='actividades';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'titulo',
        'descripcion',
        'fecha_post',
        'path',
        'contenido',
        'contador_visitas',
        'estado',
        'id_categorias',
    ];

    public function categorias_actividades(){
        return $this->belongsTo(CategoriaActividades::class,'id_categorias','id');
    }

    public function parroquias(){
        return $this->belongsToMany(Parroquias::class, 'parroquias_actividades');

    }

    public function comentarios(){
        return $this->hasMany(ComentariosActividades::class);
    }

      public function galeria_actividades(){
        return $this->hasMany(GaleriaActividades::class);
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
           $query->where('titulo', "LIKE", "%$table_search%");

       }
    }
}
