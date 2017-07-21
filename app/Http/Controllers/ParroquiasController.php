<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParroquiaRequest;
use App\Http\Requests\ParroquiaEditRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Parroquias;
use App\Zonas;

class ParroquiasController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $parroquias = Parroquias::where('estado',1)->orderBy('id')->paginate(6);
        $busqueda= Parroquias::name($request->get('table_search'))->orderBy('id')->paginate(6);
        return View('administracion.parroquias.index',compact('parroquias', 'busqueda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zonas = Zonas::where('estado',1)->get();
        
        return View('administracion.parroquias.create',compact('zonas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ParroquiaRequest $request)
    {

       Parroquias::create($request->all());

      

        
        return Redirect::to('administracion/parroquias/create')->with('mensaje-registro', 'Contenido Registrado Correctamente');



    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $parroquia = Parroquias::find($id);
        $zonas = Zonas::where('estado',1)->get();
        return view('administracion.parroquias.edit',compact('parroquia','zonas'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ParroquiaEditRequest $request, $id)
    {
        $parroquia = Parroquias::find($id);
        $parroquia->fill($request->all());
        


        if($parroquia->save()){
            return Redirect::to('administracion/parroquias')->with('mensaje-registro', 'Contenido Actualizado Correctamente');
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
        $parroquia = Parroquias::find($id);
        $parroquia->estado = 0;
        $parroquia->save();

        $message = "Eliminado Correctamente";
        if ($request->ajax()) {
            return response()->json([
                'id'      => $parroquia->id,
                'message' => $message
            ]);
        }
    }
}
