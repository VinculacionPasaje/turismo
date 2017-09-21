<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class GaleriaEventos extends Model
{
    protected $table ='galeria_eventos';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'titulo',
        'descripcion',
        'fecha_post',
        'path',
        'estado',
         'eventos_id',

    ];

    public function eventos(){
        return $this->belongsTo(Eventos::class,'eventos_id','id');
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
