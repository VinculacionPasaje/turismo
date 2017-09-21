<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class GaleriaHospedajes extends Model
{
    protected $table ='galeria_hospedaje';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'titulo',
        'descripcion',
        'fecha_post',
        'path',
        'estado',
         'hospedajes_id',

    ];

     public function hospedajes(){
        return $this->belongsTo(Hospedaje::class,'hospedajes_id','id');
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
