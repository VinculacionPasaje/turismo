<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function __construct(){
        $this->middleware('auth',['only'=>'admin']);
    }


    public function index(){
       
        return view('welcome');
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
