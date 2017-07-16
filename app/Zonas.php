<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zonas extends Model
{
    protected $table ='zonas';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'zona',
        'descripcion',
        'estado'
    ];

    

    public function scopeName($query, $table_search){
       if(trim($table_search) != ""){
           $query->where('zona', "LIKE", "%$table_search%");

       }
        

    }
}
