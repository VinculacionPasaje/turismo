<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class GuiaFotos extends Model
{
    protected $table ='guia_fotos';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'id',
        'orden',
        'path',
        'estado',
 
    ];


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
