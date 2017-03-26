<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Traer;
use App\Material;
use App\Preguntas;
use App\Redes;
use App\Video;

class FrontController extends Controller
{

    public function __construct(){
        $this->middleware('auth',['only'=>'admin']);
    }


    public function index(){

        $categorias= Categoria::where('estado',1)->get();
        $redes= Redes::where('estado',1)->get();
        $videos= Video::where('id',1)->get();
      
       
        return view('welcome', compact('categorias', 'redes', 'videos'));
    }

    public function traer(){
        $traer= Traer::where('id',1)->get();
       
        return view('frontend/Traer', compact('traer'));
    }

     public function material(){
        $material= Material::where('id',1)->get();
       
        return view('frontend/Material', compact('material'));
    }

     public function pregunta(){
        $preguntas= Preguntas::where('estado',1)->get();
       
        return view('frontend/Preguntas', compact('preguntas'));
    }

    public function login(){
       
        return view('auth/login');
    }

    public function admin(){
       
        return view('administracion.index');
    }

}
