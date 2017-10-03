<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventoRequest;
use App\Http\Requests\EventoEditRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Eventos;
use App\CategoriasEventos;
use App\Parroquias;

use App\ComentariosActividades;
use App\ComentariosAlimentacion;
use App\ComentariosAtractivosT;
use App\ComentariosDiversion;
use App\ComentariosHospedaje;
use App\ComentariosEventos;
use App\ComentariosNoticias;





class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $eventos = Eventos::where('estado',1)->orderBy('id')->paginate(6);
        $busqueda= Eventos::name($request->get('table_search'))->orderBy('id')->paginate(6);
         $comentariosAtractivosT = ComentariosAtractivosT::where('aprovado',0)->count();
        $comentariosHospedaje = ComentariosHospedaje::where('aprovado',0)->count();
        $comentariosDiversion = ComentariosDiversion::where('aprovado',0)->count();
        $comentariosEventos = ComentariosEventos::where('aprovado',0)->count();
        $comentariosAlimentacion = ComentariosAlimentacion::where('aprovado',0)->count();
        $comentariosActividades = ComentariosActividades::where('aprovado',0)->count();
         $comentariosNoticias = ComentariosNoticias::where('aprovado',0)->count();
        $total= $comentariosNoticias+$comentariosAtractivosT+$comentariosHospedaje+$comentariosDiversion+$comentariosEventos+ $comentariosAlimentacion+$comentariosActividades;


        return View('administracion.eventos.index',compact('comentariosNoticias','total','comentariosActividades','comentariosAlimentacion','comentariosAtractivosT', 'comentariosHospedaje', 'comentariosDiversion', 'comentariosEventos','eventos', 'busqueda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = CategoriasEventos::where('estado',1)->get();
        $parroquias = Parroquias::where('estado',1)->get();
         $comentariosAtractivosT = ComentariosAtractivosT::where('aprovado',0)->count();
        $comentariosHospedaje = ComentariosHospedaje::where('aprovado',0)->count();
        $comentariosDiversion = ComentariosDiversion::where('aprovado',0)->count();
        $comentariosEventos = ComentariosEventos::where('aprovado',0)->count();
        $comentariosAlimentacion = ComentariosAlimentacion::where('aprovado',0)->count();
        $comentariosActividades = ComentariosActividades::where('aprovado',0)->count();
         $comentariosNoticias = ComentariosNoticias::where('aprovado',0)->count();
        $total= $comentariosNoticias+$comentariosAtractivosT+$comentariosHospedaje+$comentariosDiversion+$comentariosEventos+ $comentariosAlimentacion+$comentariosActividades;


        
        return View('administracion.eventos.create',compact('comentariosNoticias','total','comentariosActividades','comentariosAlimentacion','comentariosAtractivosT', 'comentariosHospedaje', 'comentariosDiversion', 'comentariosEventos','categorias', 'parroquias'));
    }

    /**
     * Store a newly created resource in storage
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventoRequest $request)
    {
       
      

        $fecha = explode("/", $request->fecha_desde);
        $year= $fecha[0]; //obtengo el año
        $mes= $fecha[1];//obtengo el mes

       
        

         
        
        $evento = new Eventos();
        $evento->titulo = $request->titulo;
        $evento->script = $request->script;
        $evento->fecha_desde = $request->fecha_desde;
        $evento->fecha_hasta = $request->fecha_hasta;
        $evento->precio = $request->precio;
        $evento->path = $request->path;
         $evento->parroquias_id = $request->parroquias_id;
         $evento->categoria_id = $request->categoria_id;
         $evento->hora_inicio = $request->hora_inicio;
         $evento->direccion = $request->direccion;
        $evento->descripcion = $request->descripcion;
        $evento->contenido = $request->contenido;
        $evento->year = $year;
        $evento->mes = $mes;
         
        







         if($evento->save()){
            return Redirect::to('administracion/eventos/create')->with('mensaje-registro', 'Contenido Registrado Correctamente');

         }


      

        



    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $evento = Eventos::find($id);
        $categorias = CategoriasEventos::where('estado',1)->get();
          $parroquias = Parroquias::where('estado',1)->get();
           $comentariosAtractivosT = ComentariosAtractivosT::where('aprovado',0)->count();
        $comentariosHospedaje = ComentariosHospedaje::where('aprovado',0)->count();
        $comentariosDiversion = ComentariosDiversion::where('aprovado',0)->count();
        $comentariosEventos = ComentariosEventos::where('aprovado',0)->count();
        $comentariosAlimentacion = ComentariosAlimentacion::where('aprovado',0)->count();
        $comentariosActividades = ComentariosActividades::where('aprovado',0)->count();
        $comentariosNoticias = ComentariosNoticias::where('aprovado',0)->count();
        $total= $comentariosNoticias+$comentariosAtractivosT+$comentariosHospedaje+$comentariosDiversion+$comentariosEventos+ $comentariosAlimentacion+$comentariosActividades;


        return view('administracion.eventos.edit',compact('comentariosNoticias','total','comentariosActividades','comentariosAlimentacion','comentariosAtractivosT', 'comentariosHospedaje', 'comentariosDiversion', 'comentariosEventos','evento','categorias', 'parroquias'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventoEditRequest $request, $id)
    {
        $evento = Eventos::find($id);
      

        $fecha = explode("/", $request->fecha_desde);
        $year= $fecha[0]; //obtengo el año 
       
        $mes= $fecha[1];//obtengo el mes
        
        
      
       

        $evento->fill([
    

                    'titulo' => $request['titulo'],
                    'script' => $request['script'],
                    'fecha_desde' => $request['fecha_desde'],
                    'fecha_hasta' => $request['fecha_hasta'],
                     'precio' => $request['precio'],
                      'path' => $request['path'],
                       'parroquias_id' => $request['parroquias_id'],
                         'categoria_id' => $request['categoria_id'],
                           'hora_inicio' => $request['hora_inicio'],

                            'direccion' => $request['direccion'],
                      'descripcion' => $request['descripcion'],
                       'contenido' => $request['contenido'],
                         'year' => $year,
                           'mes' => $mes,
                    
                   
                ]);

        


        if($evento->save()){
            return Redirect::to('administracion/eventos')->with('mensaje-registro', 'Contenido Actualizado Correctamente');
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
        $evento = Eventos::find($id);
        $evento->estado = 0;
        $evento->save();

        $message = "Eliminado Correctamente";
        if ($request->ajax()) {
            return response()->json([
                'id'      => $evento->id,
                'message' => $message
            ]);
        }
    }


}
