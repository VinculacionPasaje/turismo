<?php

namespace App\Http\Controllers;

use App\Http\Requests\HospedajeRequest;
use App\Http\Requests\HospedajeEditRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Hospedaje;
use App\Parroquias;
use App\CategoriaHospedaje;

use App\ComentariosActividades;
use App\ComentariosAlimentacion;
use App\ComentariosAtractivosT;
use App\ComentariosDiversion;
use App\ComentariosHospedaje;
use App\ComentariosEventos;
use App\ComentariosNoticias;


class HospedajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $hospedaje = Hospedaje::where('estado',1)->orderBy('id')->paginate(6);
        $busqueda= Hospedaje::name($request->get('table_search'))->orderBy('id')->paginate(6);
         $comentariosAtractivosT = ComentariosAtractivosT::where('aprovado',0)->count();
        $comentariosHospedaje = ComentariosHospedaje::where('aprovado',0)->count();
        $comentariosDiversion = ComentariosDiversion::where('aprovado',0)->count();
        $comentariosEventos = ComentariosEventos::where('aprovado',0)->count();
        $comentariosAlimentacion = ComentariosAlimentacion::where('aprovado',0)->count();
        $comentariosActividades = ComentariosActividades::where('aprovado',0)->count();
         $comentariosNoticias = ComentariosNoticias::where('aprovado',0)->count();
        $total= $comentariosNoticias+$comentariosAtractivosT+$comentariosHospedaje+$comentariosDiversion+$comentariosEventos+ $comentariosAlimentacion+$comentariosActividades;


        return View('administracion.hospedaje.index',compact('comentariosNoticias','total','comentariosActividades','comentariosAlimentacion','comentariosAtractivosT', 'comentariosHospedaje', 'comentariosDiversion', 'comentariosEventos','hospedaje', 'busqueda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = CategoriaHospedaje::where('estado',1)->get();
        $parroquias = Parroquias::where('estado',1)->get();
         $comentariosAtractivosT = ComentariosAtractivosT::where('aprovado',0)->count();
        $comentariosHospedaje = ComentariosHospedaje::where('aprovado',0)->count();
        $comentariosDiversion = ComentariosDiversion::where('aprovado',0)->count();
        $comentariosEventos = ComentariosEventos::where('aprovado',0)->count();
        $comentariosAlimentacion = ComentariosAlimentacion::where('aprovado',0)->count();
        $comentariosActividades = ComentariosActividades::where('aprovado',0)->count();
        $comentariosNoticias = ComentariosNoticias::where('aprovado',0)->count();
        $total= $comentariosNoticias+$comentariosAtractivosT+$comentariosHospedaje+$comentariosDiversion+$comentariosEventos+ $comentariosAlimentacion+$comentariosActividades;

        
        return View('administracion.hospedaje.create',compact('comentariosNoticias','total','comentariosActividades','comentariosAlimentacion','comentariosAtractivosT', 'comentariosHospedaje', 'comentariosDiversion', 'comentariosEventos','categorias', 'parroquias'));
    }

    /**
     * Store a newly created resource in storage
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HospedajeRequest $request)
    {
         Hospedaje::create([
            'titulo' => $request['titulo'],
            'descripcion' => $request['descripcion'],
            'fecha_post' => $request['fecha_post'],
            'direccion' => $request['direccion'],
            'telefono' => $request['telefono'],
            'estrellas' => $request['estrellas'],
            'path'=> $request['path'],
            'contenido'=> $request['contenido'],
            'contador_visitas'=>0,
            'id_categorias'=> $request['id_categorias'],
            'id_parroquias'=> $request['id_parroquias'],
           
        ]);

      

        
        return Redirect::to('administracion/hospedaje/create')->with('mensaje-registro', 'Hospedaje Registrado Correctamente');


    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $hospedaje = Hospedaje::find($id);
        $categorias = CategoriaHospedaje::where('estado',1)->get();
         $parroquias = Parroquias::where('estado',1)->get();
          $comentariosAtractivosT = ComentariosAtractivosT::where('aprovado',0)->count();
        $comentariosHospedaje = ComentariosHospedaje::where('aprovado',0)->count();
        $comentariosDiversion = ComentariosDiversion::where('aprovado',0)->count();
        $comentariosEventos = ComentariosEventos::where('aprovado',0)->count();
        $comentariosAlimentacion = ComentariosAlimentacion::where('aprovado',0)->count();
        $comentariosActividades = ComentariosActividades::where('aprovado',0)->count();
         $comentariosNoticias = ComentariosNoticias::where('aprovado',0)->count();
        $total= $comentariosNoticias+$comentariosAtractivosT+$comentariosHospedaje+$comentariosDiversion+$comentariosEventos+ $comentariosAlimentacion+$comentariosActividades;

        return view('administracion.hospedaje.edit',compact('comentariosNoticias','total','comentariosActividades','comentariosAlimentacion','comentariosAtractivosT', 'comentariosHospedaje', 'comentariosDiversion', 'comentariosEventos','hospedaje','categorias', 'parroquias'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HospedajeEditRequest $request, $id)
    {
        $hospedaje = Hospedaje::find($id);
        $hospedaje->fill($request->all());
        


        if($hospedaje->save()){
            return Redirect::to('administracion/hospedaje')->with('mensaje-registro', 'Contenido Actualizado Correctamente');
        }



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        $hospedaje = Hospedaje::find($id);
        $hospedaje->estado = 0;
        $hospedaje->save();

        $message = "Eliminado Correctamente";
        if ($request->ajax()) {
            return response()->json([
                'id'      => $hospedaje->id,
                'message' => $message
            ]);
        }
    }
}
