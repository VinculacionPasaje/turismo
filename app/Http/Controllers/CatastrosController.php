<?php

namespace App\Http\Controllers;

use App\Http\Requests\CatastrosRequest;
use App\Http\Requests\CatastrosEditRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Catastros;
use Illuminate\Support\Facades\Input;

class CatastrosController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $catastros = Catastros::where('estado',1)->orderBy('id')->paginate(6);
        $busqueda= Catastros::name($request->get('table_search'))->orderBy('id')->paginate(6);
        return View('administracion.catastros.index',compact('catastros', 'busqueda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        
        return View('administracion.catastros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CatastrosRequest $request)
    {

        $file= Input::file('pdf');
        $aleatorio= str_random(6);
        $nombre= $aleatorio.'-'.$file->getClientOriginalName();
 
       
        


            Catastros::create([
            'titulo' => $request['titulo'],
            'descripcion' => $request['descripcion'],
            'pdf'=> $nombre,
            'fecha_post' => $request['fecha_post'],
            'path'=> $request['path'],
            'contador_visitas'=>0,
           
           
        ]);

         $file->move('pdf', $nombre);

            
       

        
        return Redirect::to('administracion/catastros/create')->with('mensaje-registro', 'Catastro Registrado Correctamente');


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

        $catastro = Catastros::find($id);
        return view('administracion.catastros.edit',compact('catastro'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CatastrosEditRequest $request, $id)
    {
       
        $catastro = Catastros::find($id);
        $valorPDF= $request['pdf'];
 
        
           if($valorPDF==null){
               $catastro->fill([

                   

                    'titulo' => $request['titulo'],
                    'descripcion' => $request['descripcion'],
                    'pdf'=> $catastro->pdf,
                    'fecha_post' => $request['fecha_post'],
                    'path'=> $request['path'],
                   
                ]);

           }else{

               $file= Input::file('pdf');
                $aleatorio= str_random(6);
                $nombre= $aleatorio.'-'.$file->getClientOriginalName();
                  $catastro->fill([

                  

                    'titulo' => $request['titulo'],
                    'descripcion' => $request['descripcion'],
                    'pdf'=> $nombre,
                    'fecha_post' => $request['fecha_post'],
                    'path'=> $request['path'],
                   
                ]);

                $file->move('pdf', $nombre);
           }

                 

     
        


        if($catastro->save()){
             
            return Redirect::to('administracion/catastros')->with('mensaje-registro', 'Catastro Actualizado Correctamente');
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
        $noticia = Catastros::find($id);
        $noticia->estado = 0;
        $noticia->save();

        $message = "Eliminado Correctamente";
        if ($request->ajax()) {
            return response()->json([
                'id'      => $noticia->id,
                'message' => $message
            ]);
        }
    }
}
