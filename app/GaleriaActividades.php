<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class GaleriaActividades extends Model
{
    protected $table ='galeria_actividades';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'titulo',
        'descripcion',
        'fecha_post',
        'path',
        'estado',
        'actividades_id',

    ];

     public function actividades(){
        return $this->belongsTo(Actividades::class,'actividades_id','id');
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
