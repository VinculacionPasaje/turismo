<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actividades;
use App\ComentariosActividades;
use Illuminate\Support\Facades\Redirect;
use Session;
use Carbon\Carbon;

class ComentariosActividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $comentarios = ComentariosActividades::where('estado',1)->orderBy('id')->paginate(6);
        $busqueda= ComentariosActividades::name($request->get('table_search'))->orderBy('id')->paginate(6);
        return View('administracion.comentariosActividades.index',compact('comentarios', 'busqueda'));
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
     
        $post = Actividades::find($id);

         
        
        $comment = new ComentariosActividades();
        $comment->nombre = $request->nombre;
        $comment->email = $request->email;
        $comment->comentario = $request->comentario;
        $comment->fecha = $date;
        $comment->hora= Carbon::now()->toTimeString();
        $comment->actividades_id= $id;




         if($comment->save()){
            return Redirect::to('actividades/'.$id)->with('mensaje-registro', 'Comentario enviado, pasará por moderación antes de ser publicado en el sitio web');

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
        $comentarios = ComentariosActividades::find($id);
      
        return view('administracion.comentariosActividades.edit',compact('comentarios'));
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
        $comentarios = ComentariosActividades::find($id);
        $comentarios->fill($request->all());
        


        if($comentarios->save()){
            return Redirect::to('administracion/comentariosActividades')->with('mensaje-registro', 'Contenido Actualizado Correctamente');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
