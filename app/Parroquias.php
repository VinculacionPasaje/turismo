<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Parroquias extends Model
{
    protected $table ='parroquias';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'parroquia',
        'fecha_post',
        'path',
        'contenido',
        'contador_visitas',
        'estado',
        'id_zonas',
    ];

    public function zona(){
        return $this->belongsTo(Zonas::class,'id_zonas','id');
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
           $query->where('parroquia', "LIKE", "%$table_search%");

       }
    }
}
