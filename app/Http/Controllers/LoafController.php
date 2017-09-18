<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loaf;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\LoafRequest;
use Illuminate\Support\Facades\Input;

use App\ComentariosActividades;
use App\ComentariosAlimentacion;
use App\ComentariosAtractivosT;
use App\ComentariosDiversion;
use App\ComentariosHospedaje;
use App\ComentariosEventos;
use App\ComentariosNoticias;

class LoafController extends Controller
{
      public function edit($id){
        $loaf = Loaf::find($id);
         $comentariosAtractivosT = ComentariosAtractivosT::where('aprovado',0)->count();
        $comentariosHospedaje = ComentariosHospedaje::where('aprovado',0)->count();
        $comentariosDiversion = ComentariosDiversion::where('aprovado',0)->count();
        $comentariosEventos = ComentariosEventos::where('aprovado',0)->count();
        $comentariosAlimentacion = ComentariosAlimentacion::where('aprovado',0)->count();
        $comentariosActividades = ComentariosActividades::where('aprovado',0)->count();
         $comentariosNoticias = ComentariosNoticias::where('aprovado',0)->count();
        $total= $comentariosNoticias+$comentariosAtractivosT+$comentariosHospedaje+$comentariosDiversion+$comentariosEventos+ $comentariosAlimentacion+$comentariosActividades;


        return view('administracion.loaf.edit',compact('comentariosNoticias','total','comentariosActividades','comentariosAlimentacion','comentariosAtractivosT', 'comentariosHospedaje', 'comentariosDiversion', 'comentariosEventos','loaf'));


    }

    public function index(Request $request){
        $loaf= Loaf::where('id',1)->paginate(1);
         $comentariosAtractivosT = ComentariosAtractivosT::where('aprovado',0)->count();
        $comentariosHospedaje = ComentariosHospedaje::where('aprovado',0)->count();
        $comentariosDiversion = ComentariosDiversion::where('aprovado',0)->count();
        $comentariosEventos = ComentariosEventos::where('aprovado',0)->count();
        $comentariosAlimentacion = ComentariosAlimentacion::where('aprovado',0)->count();
        $comentariosActividades = ComentariosActividades::where('aprovado',0)->count();
        $comentariosNoticias = ComentariosNoticias::where('aprovado',0)->count();
        $total= $comentariosNoticias+$comentariosAtractivosT+$comentariosHospedaje+$comentariosDiversion+$comentariosEventos+ $comentariosAlimentacion+$comentariosActividades;

        
        return view('administracion.loaf.index',compact('comentariosNoticias','total','comentariosActividades','comentariosAlimentacion','comentariosAtractivosT', 'comentariosHospedaje', 'comentariosDiversion', 'comentariosEventos','loaf'));

    }

     public function update(LoafRequest $request, $id){
       $loaf = Loaf::find($id);
        $valorPDF= $request['pdf'];
 
        
           if($valorPDF==null){
               $loaf->fill([

                   

                    'titulo' => $request['titulo'],
                    'contenido' => $request['contenido'],
                    'pdf'=> $loaf->pdf,
                    'fecha_post' => $request['fecha_post'],
                   
                   
                ]);

           }else{

               $file= Input::file('pdf');
                $aleatorio= str_random(6);
                $nombre= $aleatorio.'-'.$file->getClientOriginalName();
                  $loaf->fill([

                  

                    'titulo' => $request['titulo'],
                    'contenido' => $request['contenido'],
                    'pdf'=> $nombre,
                    'fecha_post' => $request['fecha_post'],
                   
                   
                ]);

                $file->move('pdf', $nombre);
           }

                 

     
        


        if($loaf->save()){
             
            return Redirect::to('administracion/loaf')->with('mensaje-registro', 'Contenido Actualizado Correctamente');
        }




    }
}
