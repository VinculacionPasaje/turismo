<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComentarioNoticiaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Noticia;
use App\User;
use App\ComentariosNoticias;
use Carbon\Carbon;

class ComentariosNoticiasController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $comentarios = ComentariosNoticias::where('estado',1)->orderBy('id')->paginate(6);
        $busqueda= ComentariosNoticias::name($request->get('table_search'))->orderBy('id')->paginate(6);
        return View('administracion.comentariosNoticias.index',compact('comentarios', 'busqueda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = User::where('estado',1)->get();
        $noticias = Noticia::where('estado',1)->get();
        
        return View('administracion.comentariosNoticias.create',compact('usuarios', 'noticias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComentarioNoticiaRequest $request)
    {

        $date = Carbon::now();
         $horita= $date->toTimeString();  //obtengo la hora actual
        $date = $date->format('d-m-Y'); //obtengo la fecha actual
       

 
        ComentariosNoticias::create([
            'comentario' => $request['comentario'],
            'hora' => $horita,
            'fecha' => $date,
            'noticias_id'=> $request['noticias_id'],
            'usuario_id'=> $request['usuario_id'],
           
        ]);
                
         

        
        return Redirect::to('administracion/comentariosNoticias/create')->with('mensaje-registro', 'Comentario Registrado Correctamente');


    }

  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $comentario = ComentariosNoticias::find($id);
        $usuarios = User::where('estado',1)->get();
         $noticias = Noticia::where('estado',1)->get();
        return view('administracion.comentariosNoticias.edit',compact('noticias','comentario', 'usuarios'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComentarioNoticiaRequest $request, $id)
    {
        $comentario = ComentariosNoticias::find($id);
        $comentario->fill($request->all());

        if($comentario->save()){
            return Redirect::to('administracion/comentariosNoticias')->with('mensaje-registro', 'Comentario Actualizado Correctamente');
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
        $comentario = ComentariosNoticias::find($id);
        $comentario->estado = 0;
        $comentario->save();

        $message = "Eliminado Correctamente";
        if ($request->ajax()) {
            return response()->json([
                'id'      => $comentario->id,
                'message' => $message
            ]);
        }
    }
}
