<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Traer;

class FrontController extends Controller
{

    public function __construct(){
        $this->middleware('auth',['only'=>'admin']);
    }


    public function index(){

        $categorias= Categoria::where('estado',1)->get();
      
       
        return view('welcome', compact('categorias'));
    }

    public function traer(){
        $traer= Traer::where('id',1)->get();
       
        return view('frontend/Traer', compact('traer'));
    }

    public function login(){
       
        return view('auth/login');
    }

    public function admin(){
       
        return view('administracion.index');
    }

}
