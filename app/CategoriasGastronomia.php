<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriasGastronomia extends Model
{
    protected $table ='categorias_gastronomia';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'categoria',
        'descripcion',
        'estado'
    ];

 

    public function scopeName($query, $table_search){
       if(trim($table_search) != ""){
           $query->where('categoria', "LIKE", "%$table_search%");

       }
        

    }
}
