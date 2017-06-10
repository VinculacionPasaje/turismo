<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
// we will use Mail namespace
use Mail;
use App\Redes;
use App\Footer;
use App\CategoriaTuristica;
use App\CategoriaActividades;
use Illuminate\Support\Facades\Redirect;
use App\CategoriaHospedaje;
use App\CategoriaDiversion;
use App\CategoriaAlimentacion;

class MailController extends Controller
{
    
    public function index(){
        
        $redes= Redes::where('estado',1)->get();
         $footer= Footer::where('estado',1)->get();
           $categoriasAct= CategoriaActividades::where('estado',1)->get();
           $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
            $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
        $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
        $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion

        return view('frontend/contacto', compact('categoriasHospedaje', 'categoriasDiversion', 'categoriasAlimentacion','redes', 'footer', 'categoriasAct', 'categoriasTu'));
    }


    public function send(ContactRequest $request)
    {
        //guarda el valor de los campos enviados desde el form en un array
       $data = $request->all();
 
       //se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $subject }}...
       Mail::send('frontend/body', $data, function($message) use ($request)
       {
           //la persona que envia
           $message->from($request->email, $request->nombre);
 
           //asunto
           $message->subject($request->subject);
 
           //la persona que recibe el mensaje
           $message->to('grupoturismopasaje@gmail.com', 'Administrador');
 
       });
       
       return Redirect::to('contactos')->with('mensaje-registro', 'Email enviado correctamente');
    }
}
