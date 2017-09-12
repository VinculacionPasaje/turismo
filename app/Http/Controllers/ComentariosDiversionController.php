<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diversion;
use App\ComentariosDiversion;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class ComentariosDiversionController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $comentarios = ComentariosDiversion::where('aprovado',1)->orderBy('id')->paginate(6);
      
        return View('administracion.ComentariosDiversion.index',compact('comentarios'));
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function noAprovados(Request $request)
    {
        $comentarios = ComentariosDiversion::where('aprovado',0)->orderBy('id')->paginate(10);
        return View('administracion.ComentariosDiversion.noAprovados',compact('comentarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        
        $date = Carbon::now();
        $date = $date->format('d-m-Y');
     
        $post = Diversion::find($id);

         
        
        $comment = new ComentariosDiversion();
        $comment->nombre = $request->nombre;
        $comment->email = $request->email;
        $comment->comentario = $request->comentario;
        $comment->fecha = $date;
        $comment->hora= Carbon::now()->toTimeString();
        $comment->diversion_id= $id;




         if($comment->save()){
            return Redirect::to('diversion/'.$id)->with('mensaje-registro', 'Comentario enviado, pasará por moderación antes de ser publicado en el sitio web');

         }
       

         
     
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
        $comentarios = ComentariosDiversion::find($id);
      
        return view('administracion.ComentariosDiversion.edit',compact('comentarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comentarios = ComentariosDiversion::find($id);
        $comentarios->fill($request->all());
        


        if($comentarios->save()){
            return Redirect::to('administracion/comentariosDiversion')->with('mensaje-registro', 'Contenido Actualizado Correctamente');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $comentario = ComentariosAlimentacion::find($id);
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
