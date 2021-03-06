<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Noticia extends Model
{
    protected $table ='noticias';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'titulo',
        'descripcion',
        'fecha_post',
        'destacado',
        'path',
        'contenido',
        'contador_visitas',
        'estado',
        'id_categorias',
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class,'id_categorias','id');
    }

    public function comentarios(){
        return $this->hasMany(ComentariosNoticias::class);
    }

    public function galeria_noticias(){
        return $this->hasMany(GaleriaNoticias::class);
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
