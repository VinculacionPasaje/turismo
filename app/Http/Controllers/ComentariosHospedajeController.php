<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Hospedaje;
use App\ComentariosHospedaje;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class ComentariosHospedajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $comentarios = ComentariosHospedaje::where('aprovado',1)->orderBy('id')->paginate(6);
      
        return View('administracion.ComentariosHospedaje.index',compact('comentarios'));
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function noAprovados(Request $request)
    {
        $comentarios = ComentariosHospedaje::where('aprovado',0)->orderBy('id')->paginate(10);
        return View('administracion.ComentariosHospedaje.noAprovados',compact('comentarios'));
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
     
        $post = Hospedaje::find($id);

         
        
        $comment = new ComentariosHospedaje();
        $comment->nombre = $request->nombre;
        $comment->email = $request->email;
        $comment->comentario = $request->comentario;
        $comment->fecha = $date;
        $comment->hora= Carbon::now()->toTimeString();
        $comment->hospedaje_id= $id;




         if($comment->save()){
            return Redirect::to('hospedaje/'.$id)->with('mensaje-registro', 'Comentario enviado, pasará por moderación antes de ser publicado en el sitio web');

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
        $comentarios = ComentariosHospedaje::find($id);
      
        return view('administracion.ComentariosHospedaje.edit',compact('comentarios'));
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
        $comentarios = ComentariosHospedaje::find($id);
        $comentarios->fill($request->all());
        


        if($comentarios->save()){
            return Redirect::to('administracion/comentariosHospedaje')->with('mensaje-registro', 'Contenido Actualizado Correctamente');
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
        $comentario = ComentariosHospedaje::find($id);
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
