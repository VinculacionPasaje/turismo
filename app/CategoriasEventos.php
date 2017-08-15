<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriasEventos extends Model
{
    protected $table ='categorias_eventos';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'categoria',
        'descripcion',
        'estado',
    ];

    public function eventos(){
        return $this->hasMany(Eventos::class);

    }

   
  
     
    public function scopeName($query, $table_search){
       if(trim($table_search) != ""){
           $query->where('categoria', "LIKE", "%$table_search%");

       }
        

    }
}
