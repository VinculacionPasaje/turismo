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
        Route::get('administracion','FrontController@admin');
        Route::get('traer', 'FrontController@traer');
        Route::get('material', 'FrontController@material');
        Route::get('preguntas', 'FrontController@pregunta');
        Route::get('contactos', 'MailController@index');
        Route::post('send', ['as' => 'send', 'uses' => 'MailController@send'] );


        // Authentication Routes...
        Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
        Route::post('login', 'Auth\LoginController@login');
        Route::post('logout', 'Auth\LoginController@logout')->name('logout');

      
        // Password Reset Routes...
        Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('password/reset', 'Auth\ResetPasswordController@reset');

        //vistas de administracion
        Route::resource('administracion/usuarios','UsuarioController');
        Route::resource('administracion/traer','TraerController');
        Route::resource('administracion/material','MaterialController');
        Route::resource('administracion/categorias','CategoriaController');
        Route::resource('administracion/preguntas','PreguntasController');
        Route::resource('administracion/redes','RedesController');
        Route::resource('administracion/videos','VideoController');
        Route::resource('administracion/noticias','NoticiaController');


        Route::get('/error',function(){
                abort(404);
                });
