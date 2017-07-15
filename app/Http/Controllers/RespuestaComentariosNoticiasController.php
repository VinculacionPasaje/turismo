<?php

namespace App\Http\Controllers;

use App\Http\Requests\RespuestaComentarioNoticiaRequest;
use App\Http\Requests\RespuestaComentariosEditNoticiasRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\RespuestaComentariosNoticias;
use App\ComentariosNoticias;
use Carbon\Carbon;

class RespuestaComentariosNoticiasController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
       
        $respuestas = RespuestaComentariosNoticias::where('estado',1)->orderBy('id')->paginate(6); //busco 6 comentarios con estado 1
        
        
       

        
        return View('administracion.respuestaComentariosNoticias.index',compact('respuestas')); // retorno los resultados en a vista Index de comentariosNoticias
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $comentarios = ComentariosNoticias::where('estado',1)->get();
        
        return View('administracion.respuestaComentariosNoticias.create',compact('comentarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RespuestaComentarioNoticiaRequest $request)
    {

        $date = Carbon::now();
         $horita= $date->toTimeString();  //obtengo la hora actual
        $date = $date->format('d-m-Y'); //obtengo la fecha actual
       

 
        RespuestaComentariosNoticias::create([
            'comentario' => $request['comentario'],
            'hora' => $horita,
            'fecha' => $date,
            'comentario_id'=> $request['comentario_id'],
            
           
        ]);
                
         

        
        return Redirect::to('administracion/respuestaComentariosNoticias/create')->with('mensaje-registro', 'Comentario Registrado Correctamente');


    }

  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $respuesta = RespuestaComentariosNoticias::find($id);
        return view('administracion.respuestaComentariosNoticias.edit',compact('respuesta'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RespuestaComentariosEditNoticiasRequest $request, $id)
    {
        $respuesta = RespuestaComentariosNoticias::find($id);
        $respuesta->fill($request->all());

        if($respuesta->save()){
            return Redirect::to('administracion/respuestaComentariosNoticias')->with('mensaje-registro', 'Comentario Actualizado Correctamente');
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
        $respuesta = RespuestaComentariosNoticias::find($id);
        $respuesta->estado = 0;
        $respuesta->save();

        $message = "Eliminado Correctamente";
        if ($request->ajax()) {
            return response()->json([
                'id'      => $respuesta->id,
                'message' => $message
            ]);
        }
    }
}
