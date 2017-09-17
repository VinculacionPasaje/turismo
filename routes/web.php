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
        
        // para los menus de actividades
         Route::get('actividades', 'FrontController@todas_actividades');
         Route::get('actividades/{id}', 'FrontController@actividades');
         Route::get('categoria/{id}', 'FrontController@category');

           // para los menus de atractivos turisticos
         Route::get('atractivosTuristicos', 'FrontController@todos_actractivos');
         Route::get('categoriaTuristico/{id}', 'FrontController@category_turistico');
         Route::get('atractivosTuristicos/{id}', 'FrontController@atractivosTuristicos');

         // para los menus de Hospedaje
         Route::get('hospedaje', 'FrontController@todos_hospedajes');
         Route::get('categoriaHospedaje/{id}', 'FrontController@category_hospedaje');
         Route::get('hospedaje/{id}', 'FrontController@hospedaje');

          // para los menus de Alimentacion
         Route::get('alimentacion', 'FrontController@todos_alimentacion');
         Route::get('categoriaAlimentacion/{id}', 'FrontController@category_alimentacion');
         Route::get('alimentacion/{id}', 'FrontController@alimentacion');

         // para los menus de Diversion
         Route::get('diversion', 'FrontController@todos_diversion');
         Route::get('categoriaDiversion/{id}', 'FrontController@category_diversion');
         Route::get('diversion/{id}', 'FrontController@diversion');

          // para el menu de agenda de eventos
         Route::get('eventos', 'FrontController@todos_eventos');
         Route::get('eventos/{id}', 'FrontController@eventos');


          // para las noticias
         Route::get('noticias', 'FrontController@todas_noticias');
         Route::get('noticias/{id}', 'FrontController@noticias');


         //comentarios Actividades
         Route::post('comentariosActividades/{actividades_id}', ['uses' => 'ComentariosActividadesController@store', 'as'=> 'comentariosActividades2.store']);

         //comentarios Turistico
         Route::post('comentariosTuristico/{turistico_id}', ['uses' => 'ComentariosTuristicosController@store', 'as'=> 'comentariosTuristicos2.store']);

         //comentarios Alimentacion
         Route::post('comentariosAlimentacion/{alimentacion_id}', ['uses' => 'ComentariosAlimentacionController@store', 'as'=> 'comentariosAlimentacion2.store']);

         //comentarios DIversion
         Route::post('comentariosDiversion/{diversion_id}', ['uses' => 'ComentariosDiversionController@store', 'as'=> 'comentariosDiversion2.store']);

         //comentarios Hospedaje
         Route::post('comentariosHospedaje/{hospedaje_id}', ['uses' => 'ComentariosHospedajeController@store', 'as'=> 'comentariosHospedaje2.store']);

          //comentarios eventos
         Route::post('comentariosEventos/{eventos_id}', ['uses' => 'ComentariosEventosController@store', 'as'=> 'comentariosEventos2.store']);

          //comentarios noticias
         Route::post('comentariosNoticias/{noticias_id}', ['uses' => 'ComentariosNoticiasController@store', 'as'=> 'comentariosNoticias2.store']);



        Route::get('traer', 'FrontController@traer');
        Route::get('material', 'FrontController@material');
        Route::get('preguntas', 'FrontController@pregunta');
        Route::get('mapas', 'FrontController@mapas');
        Route::get('llegar', 'FrontController@llegar');
        Route::get('catastros', 'FrontController@catastros');
        Route::get('turismoComunitario', 'FrontController@turismo_comunitario');
        
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
        Route::resource('administracion/turismo','TurismoController');
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
        Route::resource('administracion/hospedaje','HospedajeController');
         Route::resource('administracion/turistico','TuristicoController');
          Route::resource('administracion/alimentacion','AlimentacionController');
          Route::resource('administracion/diversion','DiversionController');
        Route::resource('administracion/categoriasActividades','CatActividadesController');
        Route::resource('administracion/categoriasGastronomia','CategoriasGastronomiaController');
        Route::resource('administracion/categoriasTuristicas','CategoriaTuristicaController');
         Route::resource('administracion/categoriasHospedaje','CategoriaHospedajeController');
           Route::resource('administracion/categoriasAlimentacion','CategoriaAlimentacionController');
            Route::resource('administracion/categoriasDiversion','CategoriaDiversionController');
            Route::resource('administracion/categoriasEventos','CategoriaEventosController');
            Route::resource('administracion/zonas','ZonasController');
            Route::resource('administracion/parroquias','ParroquiasController');
             Route::resource('administracion/eventos','EventosController');
              Route::resource('administracion/catastros','CatastrosController');

               Route::resource('administracion/comentariosActividades','ComentariosActividadesController');
               Route::get('administracion/comentariosActividadesNoAprobados', ['uses' => 'ComentariosActividadesController@noAprovados', 'as'=> 'comentariosActividades.noAprovados']);

                Route::resource('administracion/comentariosTuristicos','ComentariosTuristicosController');
                 Route::get('administracion/comentariosTuristicosNoAprobados', ['uses' => 'ComentariosTuristicosController@noAprovados', 'as'=> 'comentariosTuristicos.noAprovados']);

                 Route::resource('administracion/comentariosAlimentacion','ComentariosAlimentacionController');
                  Route::get('administracion/comentariosAlimentacionNoAprobados', ['uses' => 'ComentariosAlimentacionController@noAprovados', 'as'=> 'comentariosAlimentacion.noAprovados']);

                  Route::resource('administracion/comentariosHospedaje','ComentariosHospedajeController');
                   Route::get('administracion/comentariosHospedajeNoAprobados', ['uses' => 'ComentariosHospedajeController@noAprovados', 'as'=> 'comentariosHospedaje.noAprovados']);

                   Route::resource('administracion/comentariosDiversion','ComentariosDiversionController');
                    Route::get('administracion/comentariosDiversionNoAprobados', ['uses' => 'ComentariosDiversionController@noAprovados', 'as'=> 'comentariosDiversion.noAprovados']);

                   Route::resource('administracion/comentariosEventos','ComentariosEventosController');
                    Route::get('administracion/comentariosEventosNoAprobados', ['uses' => 'ComentariosEventosController@noAprovados', 'as'=> 'comentariosEventos.noAprovados']);

              Route::resource('administracion/comentariosNoticias','ComentariosNoticiasController');
               Route::get('administracion/comentariosNoticiasNoAprobados', ['uses' => 'ComentariosNoticiasController@noAprovados', 'as'=> 'comentariosNoticias.noAprovados']);

                   




        Route::get('/error',function(){
                abort(404);
                });
