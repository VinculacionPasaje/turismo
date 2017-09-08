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
    public function index()
    {
        //
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
        $this->validate($request, array(
            'nombre'      =>  'required|max:255',
            'email'     =>  'required|email|max:255',
            'comentario'   =>  'required|min:5|max:2000'
            ));
        $post = Actividades::find($id);
        
        $comment = new ComentariosActividades();
        $comment->nombre = $request->nombre;
        $comment->email = $request->email;
        $comment->comentario = $request->comentario;
        $comment->fecha = $date;
        $comment->hora= Carbon::now()->toTimeString();
        $comment->actividades_id= $id;
        $comment->save();
       

         
     
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
        //
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
        //
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
