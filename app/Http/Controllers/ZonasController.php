<?php

namespace App\Http\Controllers;

use App\Http\Requests\ZonasRequest;
use Illuminate\Http\Request;
use App\Zonas;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ZonasController extends Controller
{
    public function index(Request $request){
       

         $zonas = Zonas::where('estado',1)->orderBy('id')->paginate(6);
         $zona= Zonas::name($request->get('table_search'))->orderBy('id')->paginate(6);
         
        
          return view('administracion.zonas.index',compact('zonas', 'zona'));

    }

    public function create(){
        return view ('administracion.zonas.create');
    }

    public function store(ZonasRequest $request){
        $zon= new Zonas;
        $zon->zona=$request['zona'];
        $zon->descripcion=$request['descripcion'];
        $zon->estado ='1';
        $zon->save();
        if($zon->save()){
            return Redirect::to('administracion/zonas/create')->with('mensaje-registro', 'Zona Registrada Correctamente');
        }
    }

  

    public function edit($id){
        $zona = Zonas::find($id);
        return view('administracion.zonas.edit',compact('zona'));


    }

    public function update(ZonasRequest $request, $id){
        $zona = Zonas::find($id);
        $zona->fill($request->all());

        if($zona->save()){
            return Redirect::to('administracion/zonas')->with('mensaje-registro', 'Zona Actualizada Correctamente');
        }



    }
    
    public function destroy($id, Request $request)
    {
        $zona = Zonas::find($id);
        $zona->estado = 0;
        $zona->save();

        $message = "Eliminado Correctamente";
        if ($request->ajax()) {
            return response()->json([
                'id'      => $zona->id,
                'message' => $message
            ]);
        }
    }
}
