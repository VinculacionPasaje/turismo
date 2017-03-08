<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Para las vistas principales
Route::get('/', 'FrontController@index');
Route::get('base', 'FrontController@base');
Route::get('login', 'FrontController@login');

Auth::routes();

Route::get('/home', 'HomeController@index');
