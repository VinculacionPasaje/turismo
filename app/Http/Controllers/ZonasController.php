<?php

namespace App\Http\Controllers;

use App\Http\Requests\ZonasRequest;
use Illuminate\Http\Request;
use App\Zonas;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

use App\ComentariosActividades;
use App\ComentariosAlimentacion;
use App\ComentariosAtractivosT;
use App\ComentariosDiversion;
use App\ComentariosHospedaje;
use App\ComentariosEventos;
use App\ComentariosNoticias;

class ZonasController extends Controller
{
    public function index(Request $request){
       

         $zonas = Zonas::where('estado',1)->orderBy('id')->paginate(6);
         $zona= Zonas::name($request->get('table_search'))->orderBy('id')->paginate(6);
          $comentariosAtractivosT = ComentariosAtractivosT::where('aprovado',0)->count();
        $comentariosHospedaje = ComentariosHospedaje::where('aprovado',0)->count();
        $comentariosDiversion = ComentariosDiversion::where('aprovado',0)->count();
        $comentariosEventos = ComentariosEventos::where('aprovado',0)->count();
        $comentariosAlimentacion = ComentariosAlimentacion::where('aprovado',0)->count();
        $comentariosActividades = ComentariosActividades::where('aprovado',0)->count();
        $comentariosNoticias = ComentariosNoticias::where('aprovado',0)->count();
        $total= $comentariosNoticias+$comentariosAtractivosT+$comentariosHospedaje+$comentariosDiversion+$comentariosEventos+ $comentariosAlimentacion+$comentariosActividades;


         
        
          return view('administracion.zonas.index',compact('comentariosNoticias','total','comentariosActividades','comentariosAlimentacion','comentariosAtractivosT', 'comentariosHospedaje', 'comentariosDiversion', 'comentariosEventos','zonas', 'zona'));

    }

    public function create(){
         $comentariosAtractivosT = ComentariosAtractivosT::where('aprovado',0)->count();
        $comentariosHospedaje = ComentariosHospedaje::where('aprovado',0)->count();
        $comentariosDiversion = ComentariosDiversion::where('aprovado',0)->count();
        $comentariosEventos = ComentariosEventos::where('aprovado',0)->count();
        $comentariosAlimentacion = ComentariosAlimentacion::where('aprovado',0)->count();
        $comentariosActividades = ComentariosActividades::where('aprovado',0)->count();
         $comentariosNoticias = ComentariosNoticias::where('aprovado',0)->count();
        $total= $comentariosNoticias+$comentariosAtractivosT+$comentariosHospedaje+$comentariosDiversion+$comentariosEventos+ $comentariosAlimentacion+$comentariosActividades;


        return view ('administracion.zonas.create', compact('comentariosNoticias','total','comentariosActividades','comentariosAlimentacion','comentariosAtractivosT', 'comentariosHospedaje', 'comentariosDiversion', 'comentariosEventos'));
    }

    public function store(ZonasRequest $request){
        $zon= new Zonas;
        $zon->zona=$request['zona'];
        $zon->descripcion=$request['descripcion'];
        $zon->estado ='1';
        $zon->save();
        if($zon->save()){
            return Redirect::to('administracion/zonas/create')->with('mensaje-registro', 'Zona Registrada Correctamente');
        }
    }

  

    public function edit($id){
        $zona = Zonas::find($id);
         $comentariosAtractivosT = ComentariosAtractivosT::where('aprovado',0)->count();
        $comentariosHospedaje = ComentariosHospedaje::where('aprovado',0)->count();
        $comentariosDiversion = ComentariosDiversion::where('aprovado',0)->count();
        $comentariosEventos = ComentariosEventos::where('aprovado',0)->count();
        $comentariosAlimentacion = ComentariosAlimentacion::where('aprovado',0)->count();
        $comentariosActividades = ComentariosActividades::where('aprovado',0)->count();
        $comentariosNoticias = ComentariosNoticias::where('aprovado',0)->count();
        $total= $comentariosNoticias+$comentariosAtractivosT+$comentariosHospedaje+$comentariosDiversion+$comentariosEventos+ $comentariosAlimentacion+$comentariosActividades;


        return view('administracion.zonas.edit',compact('comentariosNoticias','total','comentariosActividades','comentariosAlimentacion','comentariosAtractivosT', 'comentariosHospedaje', 'comentariosDiversion', 'comentariosEventos','zona'));


    }

    public function update(ZonasRequest $request, $id){
        $zona = Zonas::find($id);
        $zona->fill($request->all());

        if($zona->save()){
            return Redirect::to('administracion/zonas')->with('mensaje-registro', 'Zona Actualizada Correctamente');
        }



    }
    
    public function destroy($id, Request $request)
    {
        $zona = Zonas::find($id);
        $zona->estado = 0;
        $zona->save();

        $message = "Eliminado Correctamente";
        if ($request->ajax()) {
            return response()->json([
                'id'      => $zona->id,
                'message' => $message
            ]);
        }
    }
}
