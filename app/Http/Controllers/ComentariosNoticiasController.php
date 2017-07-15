<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComentarioNoticiaRequest;
use App\Http\Requests\ComentariosEditNoticiasRequest;
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
         $data = $request; //obtengo el request y lo almaceno en la variable data
      
        $search = $data['table_search']; //obtengo el dato del campo table_Search y lo almaceno en la variable search
        if($search!=""){ // si esta vacio que no me haga una busqueda de los usuarios
             $user= User::name($request->get('table_search'))->orderBy('id')->paginate(6); //busco al usuario
                if((count($user) >0)){ // pregunto si la busqueda obtuvo al menos 1 resultado
                    foreach($user as $usuario){ // recorro el arreglo para obtener los datos
                       
                        
                         $busqueda= ComentariosNoticias::name($usuario->id)->orderBy('id')->paginate(6); //busco el comentario segun el ID del usuario
                         

                    }
                   
                }else{ // caso contrario de que no halla ningun usuario que posteo algun comentario, lo que hago es retornar 6 comentarios con estado 1
                     
                     $busqueda= ComentariosNoticias::where('estado',1)->orderBy('id')->paginate(6);
                }

        }else{ //caso contrario que el usuario halla ingresado un valor vacio en la caja de texto, retorno 6 comentarios con estado 1
             $busqueda= ComentariosNoticias::name($request->get('table_search'))->orderBy('id')->paginate(6);
        }
       
        $comentarios = ComentariosNoticias::where('estado',1)->orderBy('id')->paginate(6); //busco 6 comentarios con estado 1
        
       

        
        return View('administracion.comentariosNoticias.index',compact('comentarios', 'busqueda')); // retorno los resultados en a vista Index de comentariosNoticias
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
        return view('administracion.comentariosNoticias.edit',compact('comentario'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComentariosEditNoticiasRequest $request, $id)
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
