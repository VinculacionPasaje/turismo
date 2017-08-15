<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventoRequest;
use App\Http\Requests\EventoEditRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Eventos;
use App\CategoriasEventos;
use App\Parroquias;

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
        return View('administracion.eventos.index',compact('eventos', 'busqueda'));
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
        
        return View('administracion.eventos.create',compact('categorias', 'parroquias'));
    }

    /**
     * Store a newly created resource in storage
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventoRequest $request)
    {
          Eventos::create($request->all());

      

        
        return Redirect::to('administracion/eventos/create')->with('mensaje-registro', 'Contenido Registrado Correctamente');


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
        return view('administracion.eventos.edit',compact('evento','categorias', 'parroquias'));

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
        $evento->fill($request->all());
        


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
