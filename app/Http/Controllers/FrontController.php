<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class FrontController extends Controller
{

    public function __construct(){
        $this->middleware('auth',['only'=>'admin']);
    }


    public function index(){

        $categorias= Categoria::where('estado',1)->get();
      
       
        return view('welcome', compact('categorias'));
    }

    public function base(){
       
        return view('layouts/base');
    }

    public function login(){
       
        return view('auth/login');
    }

    public function admin(){
       
        return view('administracion.index');
    }

}
