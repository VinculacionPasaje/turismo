<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Hospedaje extends Model
{
     protected $table ='hospedaje';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'titulo',
        'descripcion',
        'fecha_post',
         'direccion',
        'telefono',
        'estrellas',
        'path',
        'contenido',
        'contador_visitas',
        'estado',
        'id_categorias',
        'id_parroquias',
    ];

    public function categoria(){
        return $this->belongsTo(CategoriaHospedaje::class,'id_categorias','id');
    }

     public function galeria_hospedaje(){
        return $this->hasMany(GaleriaHospedajes::class);
    }

     public function parroquias(){
        return $this->belongsTo(Parroquias::class,'id_parroquias','id');
    }

      public function comentarios(){
        return $this->hasMany(ComentariosHospedaje::class);
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
