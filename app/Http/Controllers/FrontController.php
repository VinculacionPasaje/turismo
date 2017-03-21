<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Traer;
use App\Material;

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

     public function material(){
        $material= Material::where('id',1)->get();
       
        return view('frontend/Material', compact('material'));
    }

    public function login(){
       
        return view('auth/login');
    }

    public function admin(){
       
        return view('administracion.index');
    }

}
