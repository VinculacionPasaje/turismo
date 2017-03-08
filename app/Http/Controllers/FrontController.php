<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
       
        return view('welcome');
    }

    public function base(){
       
        return view('layouts/base');
    }

    public function login(){
       
        return view('auth/login');
    }

}
