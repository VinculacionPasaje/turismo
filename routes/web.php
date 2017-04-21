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
         Route::get('actividades', 'FrontController@todas_actividades');
         Route::get('actividades/{id}', 'FrontController@actividades');
         Route::get('categoria/{id}', 'FrontController@category');
        Route::get('material', 'FrontController@material');
        Route::get('preguntas', 'FrontController@pregunta');
        Route::get('mapas', 'FrontController@mapas');
        Route::get('llegar', 'FrontController@llegar');
        
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
        Route::resource('administracion/footer','FooterController');
        Route::resource('administracion/noticias','NoticiaController');
        Route::resource('administracion/mapas','MapasController');
        Route::resource('administracion/llegar','LlegarController');
        Route::resource('administracion/actividades','ActividadesController');
         Route::resource('administracion/turistico','TuristicoController');
        Route::resource('administracion/categoriasActividades','CatActividadesController');
        Route::resource('administracion/categoriasTuristicas','CategoriaTuristicaController');


        Route::get('/error',function(){
                abort(404);
                });
