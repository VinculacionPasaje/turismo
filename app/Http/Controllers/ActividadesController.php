<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActividadesRequest;
use App\Http\Requests\ActividadesEditRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Actividades;
use App\CategoriaActividades;
use App\Parroquias;
use App\ParroquiasActividades;

use App\ComentariosActividades;
use App\ComentariosAlimentacion;
use App\ComentariosAtractivosT;
use App\ComentariosDiversion;
use App\ComentariosHospedaje;
use App\ComentariosEventos;
use App\ComentariosNoticias;


class ActividadesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $actividades = Actividades::where('estado',1)->orderBy('id')->paginate(6);
        $busqueda= Actividades::name($request->get('table_search'))->orderBy('id')->paginate(6);

        $comentariosAtractivosT = ComentariosAtractivosT::where('aprovado',0)->count();
        $comentariosHospedaje = ComentariosHospedaje::where('aprovado',0)->count();
        $comentariosDiversion = ComentariosDiversion::where('aprovado',0)->count();
        $comentariosEventos = ComentariosEventos::where('aprovado',0)->count();
        $comentariosAlimentacion = ComentariosAlimentacion::where('aprovado',0)->count();
        $comentariosActividades = ComentariosActividades::where('aprovado',0)->count();
        $comentariosNoticias = ComentariosNoticias::where('aprovado',0)->count();
        $total= $comentariosNoticias+$comentariosAtractivosT+$comentariosHospedaje+$comentariosDiversion+$comentariosEventos+ $comentariosAlimentacion+$comentariosActividades;


        return View('administracion.actividades.index',compact('comentariosNoticias','total','comentariosActividades','comentariosAlimentacion','comentariosAtractivosT', 'comentariosHospedaje', 'comentariosDiversion', 'comentariosEventos','actividades', 'busqueda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = CategoriaActividades::where('estado',1)->get();
        $parroquias = Parroquias::where('estado',1)->get();

        $comentariosAtractivosT = ComentariosAtractivosT::where('aprovado',0)->count();
        $comentariosHospedaje = ComentariosHospedaje::where('aprovado',0)->count();
        $comentariosDiversion = ComentariosDiversion::where('aprovado',0)->count();
        $comentariosEventos = ComentariosEventos::where('aprovado',0)->count();
        $comentariosAlimentacion = ComentariosAlimentacion::where('aprovado',0)->count();
        $comentariosActividades = ComentariosActividades::where('aprovado',0)->count();
        $comentariosNoticias = ComentariosNoticias::where('aprovado',0)->count();
        $total= $comentariosNoticias+$comentariosAtractivosT+$comentariosHospedaje+$comentariosDiversion+$comentariosEventos+ $comentariosAlimentacion+$comentariosActividades;


        
        return View('administracion.actividades.create',compact('comentariosNoticias','total','comentariosActividades','comentariosAlimentacion','comentariosAtractivosT', 'comentariosHospedaje', 'comentariosDiversion', 'comentariosEventos','categorias', 'parroquias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActividadesRequest $request)
    {

        

            $actividades = Actividades::create([
            'titulo' => $request['titulo'],
            'descripcion' => $request['descripcion'],
            'fecha_post' => $request['fecha_post'],
            'path'=> $request['path'],
            'contenido'=> $request['contenido'],
            'contador_visitas'=>0,
            'id_categorias'=> $request['id_categorias'],
           
        ]);

        $total_parroquias = $request->parroquias;
        foreach($total_parroquias as $parroquias){
            ParroquiasActividades::create([
                'actividades_id'=>$actividades->id,
                'parroquias_id'=>$parroquias,
            ]);
        }

        
            
               
        return Redirect::to('administracion/actividades/create')->with('mensaje-registro', 'Actividad Registrada Correctamente');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $actividad = Actividades::find($id);                           
        $categorias = CategoriaActividades::where('estado',1)->get();
        $parroquias = Parroquias::where('estado',1)->get();
        $parroquias_actividades = ParroquiasActividades::all();

        $comentariosAtractivosT = ComentariosAtractivosT::where('aprovado',0)->count();
        $comentariosHospedaje = ComentariosHospedaje::where('aprovado',0)->count();
        $comentariosDiversion = ComentariosDiversion::where('aprovado',0)->count();
        $comentariosEventos = ComentariosEventos::where('aprovado',0)->count();
        $comentariosAlimentacion = ComentariosAlimentacion::where('aprovado',0)->count();
        $comentariosActividades = ComentariosActividades::where('aprovado',0)->count();
        $comentariosNoticias = ComentariosNoticias::where('aprovado',0)->count();
        $total= $comentariosNoticias+$comentariosAtractivosT+$comentariosHospedaje+$comentariosDiversion+$comentariosEventos+ $comentariosAlimentacion+$comentariosActividades;

        return view('administracion.actividades.edit',compact('comentariosNoticias','total','comentariosActividades','comentariosAlimentacion','comentariosAtractivosT', 'comentariosHospedaje', 'comentariosDiversion', 'comentariosEventos','actividad','categorias', 'parroquias', 'parroquias_actividades'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActividadesEditRequest $request, $id)
    {
       
        $actividades = Actividades::find($id);
        
          

                 $actividades->fill([

                    'titulo' => $request['titulo'],
                    'descripcion' => $request['descripcion'],
                    'fecha_post' => $request['fecha_post'],
                    'path'=> $request['path'],
                    'contenido'=> $request['contenido'],
                    'id_categorias'=> $request['id_categorias'],
                   
                ]);

                $actividades->parroquias()->sync($request->get('parroquias'));

                
        
                  


        if($actividades->save()){
            return Redirect::to('administracion/actividades')->with('mensaje-registro', 'Actividad Actualizada Correctamente');
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
        $actividad = Actividades::find($id);
        $actividad->estado = 0;
        $actividad->save();

        $message = "Eliminado Correctamente";
        if ($request->ajax()) {
            return response()->json([
                'id'      => $actividad->id,
                'message' => $message
            ]);
        }
    }
}
