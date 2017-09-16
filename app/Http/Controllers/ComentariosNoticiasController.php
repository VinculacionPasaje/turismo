<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use App\ComentariosActividades;
use App\ComentariosAlimentacion;
use App\ComentariosAtractivosT;
use App\ComentariosDiversion;
use App\ComentariosHospedaje;
use App\ComentariosEventos;
use App\ComentariosNoticias;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use App\Http\Requests\ComentarioNoticiaRequest;


// we will use Mail namespace
use Mail;

class ComentariosNoticiasController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $comentarios = ComentariosNoticias::where('aprovado',1)->orderBy('id')->paginate(6);

         $comentariosAtractivosT = ComentariosAtractivosT::where('aprovado',0)->count();
        $comentariosHospedaje = ComentariosHospedaje::where('aprovado',0)->count();
        $comentariosDiversion = ComentariosDiversion::where('aprovado',0)->count();
        $comentariosEventos = ComentariosEventos::where('aprovado',0)->count();
        $comentariosAlimentacion = ComentariosAlimentacion::where('aprovado',0)->count();
        $comentariosActividades = ComentariosActividades::where('aprovado',0)->count();

        $comentariosNoticias = ComentariosNoticias::where('aprovado',0)->count();
        $total= $comentariosNoticias+$comentariosAtractivosT+$comentariosHospedaje+$comentariosDiversion+$comentariosEventos+ $comentariosAlimentacion+$comentariosActividades;

      
        return View('administracion.comentariosNoticias.index',compact('comentariosNoticias', 'total','comentariosActividades','comentariosAlimentacion','comentariosAtractivosT', 'comentariosHospedaje', 'comentariosDiversion', 'comentariosEventos','comentarios'));
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function noAprovados(Request $request)
    {
        $comentarios = ComentariosNoticias::where('aprovado',0)->orderBy('id')->paginate(10);

         $comentariosAtractivosT = ComentariosAtractivosT::where('aprovado',0)->count();
        $comentariosHospedaje = ComentariosHospedaje::where('aprovado',0)->count();
        $comentariosDiversion = ComentariosDiversion::where('aprovado',0)->count();
        $comentariosEventos = ComentariosEventos::where('aprovado',0)->count();
        $comentariosAlimentacion = ComentariosAlimentacion::where('aprovado',0)->count();
        $comentariosActividades = ComentariosActividades::where('aprovado',0)->count();
        $comentariosNoticias = ComentariosNoticias::where('aprovado',0)->count();
        $total= $comentariosNoticias+$comentariosAtractivosT+$comentariosHospedaje+$comentariosDiversion+$comentariosEventos+ $comentariosAlimentacion+$comentariosActividades;



        return View('administracion.comentariosNoticias.noAprovados',compact('comentariosNoticias','total','comentariosActividades','comentariosAlimentacion','comentariosAtractivosT', 'comentariosHospedaje', 'comentariosDiversion', 'comentariosEventos','comentarios'));
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
     
        $post = Noticia::find($id);

         
        
        $comment = new ComentariosNoticias();
        $comment->nombre = $request->nombre;
        $comment->email = $request->email;
        $comment->comentario = $request->comentario;
        $comment->fecha = $date;
        $comment->hora= Carbon::now()->toTimeString();
        $comment->noticias_id= $id;




         if($comment->save()){
            return Redirect::to('noticias/'.$id)->with('mensaje-registro', 'Comentario enviado, pasará por moderación antes de ser publicado en el sitio web');

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
        $comentarios = ComentariosNoticias::find($id);
         $comentariosAtractivosT = ComentariosAtractivosT::where('aprovado',0)->count();
        $comentariosHospedaje = ComentariosHospedaje::where('aprovado',0)->count();
        $comentariosDiversion = ComentariosDiversion::where('aprovado',0)->count();
        $comentariosEventos = ComentariosEventos::where('aprovado',0)->count();
        $comentariosAlimentacion = ComentariosAlimentacion::where('aprovado',0)->count();
        $comentariosActividades = ComentariosActividades::where('aprovado',0)->count();
         $comentariosNoticias = ComentariosNoticias::where('aprovado',0)->count();
        $total= $comentariosNoticias+$comentariosAtractivosT+$comentariosHospedaje+$comentariosDiversion+$comentariosEventos+ $comentariosAlimentacion+$comentariosActividades;

      
        return view('administracion.comentariosNoticias.edit',compact('comentariosNoticias','total','comentariosActividades','comentariosAlimentacion','comentariosAtractivosT', 'comentariosHospedaje', 'comentariosDiversion', 'comentariosEventos','comentarios'));
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
        $comentarios = ComentariosNoticias::find($id);
        $comentarios->fill($request->all());

            $data = $request; 

           
        


        if($comentarios->save()){


             $enviarEmail = $data['enviar'];
     
        
            if($enviarEmail==1){ // si el administrador activo para enviar la respuesta por email

                $data = $request->all();
            
            
                //se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $subject }}...
                Mail::send('frontend/body_comentarios', $data, function($message) use ($request)
                {
                    //la persona que envia
                    $message->from('grupoturismopasaje@gmail.com', 'Administrador');
            
                    //asunto
                    $message->subject('Respuesta al comentario realizado en el sitio web turístico de Pasaje');
            
                    //la persona que recibe el mensaje
                    $message->to($request->email, $request->nombre);
            
                });

                return Redirect::to('administracion/comentariosNoticias')->with('mensaje-registro', 'Email enviado Correctamente');



            }else{

                return Redirect::to('administracion/comentariosNoticias')->with('mensaje-registro', 'Contenido Actualizado Correctamente');

            }




            
            
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
