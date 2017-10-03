<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guia;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\GuiaRequest;
use Illuminate\Support\Facades\Input;

use App\ComentariosActividades;
use App\ComentariosAlimentacion;
use App\ComentariosAtractivosT;
use App\ComentariosDiversion;
use App\ComentariosHospedaje;
use App\ComentariosEventos;
use App\ComentariosNoticias;

class GuiaController extends Controller
{
    public function edit($id){
        $guia = Guia::find($id);
         $comentariosAtractivosT = ComentariosAtractivosT::where('aprovado',0)->count();
        $comentariosHospedaje = ComentariosHospedaje::where('aprovado',0)->count();
        $comentariosDiversion = ComentariosDiversion::where('aprovado',0)->count();
        $comentariosEventos = ComentariosEventos::where('aprovado',0)->count();
        $comentariosAlimentacion = ComentariosAlimentacion::where('aprovado',0)->count();
        $comentariosActividades = ComentariosActividades::where('aprovado',0)->count();
         $comentariosNoticias = ComentariosNoticias::where('aprovado',0)->count();
        $total= $comentariosNoticias+$comentariosAtractivosT+$comentariosHospedaje+$comentariosDiversion+$comentariosEventos+ $comentariosAlimentacion+$comentariosActividades;


        return view('administracion.guia.edit',compact('comentariosNoticias','total','comentariosActividades','comentariosAlimentacion','comentariosAtractivosT', 'comentariosHospedaje', 'comentariosDiversion', 'comentariosEventos','guia'));


    }

    

    public function index(Request $request){
        $guia= Guia::where('id',1)->paginate(1);
         $comentariosAtractivosT = ComentariosAtractivosT::where('aprovado',0)->count();
        $comentariosHospedaje = ComentariosHospedaje::where('aprovado',0)->count();
        $comentariosDiversion = ComentariosDiversion::where('aprovado',0)->count();
        $comentariosEventos = ComentariosEventos::where('aprovado',0)->count();
        $comentariosAlimentacion = ComentariosAlimentacion::where('aprovado',0)->count();
        $comentariosActividades = ComentariosActividades::where('aprovado',0)->count();
        $comentariosNoticias = ComentariosNoticias::where('aprovado',0)->count();
        $total= $comentariosNoticias+$comentariosAtractivosT+$comentariosHospedaje+$comentariosDiversion+$comentariosEventos+ $comentariosAlimentacion+$comentariosActividades;

        
        return view('administracion.guia.index',compact('comentariosNoticias','total','comentariosActividades','comentariosAlimentacion','comentariosAtractivosT', 'comentariosHospedaje', 'comentariosDiversion', 'comentariosEventos','guia'));

    }

     public function update(GuiaRequest $request, $id){
       $guia = Guia::find($id);
        $valorPDF= $request['pdf'];
 
        
           if($valorPDF==null){
               $guia->fill([

                   

                    'titulo' => $request['titulo'],
                    'descripcion' => $request['descripcion'],
                    'pdf'=> $guia->pdf,
                    'path' => $request['path'],
                   
                   
                ]);

           }else{

               $file= Input::file('pdf');
                $aleatorio= str_random(6);
                $nombre= $aleatorio.'-'.$file->getClientOriginalName();
                  $guia->fill([

                  

                    'titulo' => $request['titulo'],
                    'descripcion' => $request['descripcion'],
                    'pdf'=> $nombre,
                      'path' => $request['path'],
                   
                   
                ]);

                $file->move('pdf', $nombre);
           }

                 

     
        


        if($guia->save()){
             
            return Redirect::to('administracion/guia')->with('mensaje-registro', 'Contenido Actualizado Correctamente');
        }




    }
}
