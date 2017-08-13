<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaEventosRequest;
use Illuminate\Http\Request;
use App\CategoriasEventos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CategoriaEventosController extends Controller
{
    public function index(Request $request){
       

         $categorias = CategoriasEventos::where('estado',1)->orderBy('id')->paginate(6);
         $cat= CategoriasEventos::name($request->get('table_search'))->orderBy('id')->paginate(6);
         
        
          return view('administracion.categoriasEventos.index',compact('categorias', 'cat'));

    }

    public function create(){

        return view ('administracion.categoriasEventos.create');
    }

    public function store(CategoriaEventosRequest $request){
        $categoria= new CategoriasEventos;
        $categoria->categoria=$request['categoria'];
        $categoria->descripcion=$request['descripcion'];
        $categoria->estado ='1';
        $categoria->save();
        if($categoria->save()){
            return Redirect::to('administracion/categoriasEventos/create')->with('mensaje-registro', 'Categoria Registrada Correctamente');
        }
    }

   

    public function edit($id){
        $categoria = CategoriasEventos::find($id);
        return view('administracion.categoriasEventos.edit',compact('categoria'));


    }

    public function update(CategoriaEventosRequest $request, $id){
        $categoria = CategoriasEventos::find($id);
        $categoria->fill($request->all());

        if($categoria->save()){
            return Redirect::to('administracion/categoriasEventos')->with('mensaje-registro', 'Categoria Actualizada Correctamente');
        }



    }
    
    public function destroy($id, Request $request)
    {
        $categoria = CategoriasEventos::find($id);
        $categoria->estado = 0;
        $categoria->save();

        $message = "Eliminado Correctamente";
        if ($request->ajax()) {
            return response()->json([
                'id'      => $categoria->id,
                'message' => $message
            ]);
        }
    }
}
