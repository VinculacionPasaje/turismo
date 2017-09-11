<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Traer;
use App\Material;
use App\Preguntas;
use App\Redes;
use App\Video;
use App\Footer;
use App\Mapas;
use App\Llegar;
use App\CategoriaActividades;
use App\Actividades;
use App\CategoriaTuristica;
use App\Turistico;
use App\Hospedaje;
use App\Diversion;
use App\Alimentacion;
use App\CategoriaHospedaje;
use App\CategoriaDiversion;
use App\CategoriaAlimentacion;
use App\CategoriasEventos;
use App\TurismoComunitario;
use App\Noticia;
use App\Eventos;
use App\ComentariosActividades;
use App\ComentariosAlimentacion;
use App\ComentariosAtractivosT;
use App\ComentariosDiversion;
use App\ComentariosHospedaje;
use App\ComentariosEventos;

class FrontController extends Controller
{

    public function __construct(){
        $this->middleware('auth',['only'=>'admin']);
    }


    public function index(){

        $categorias= Categoria::where('estado',1)->get();
        $redes= Redes::where('estado',1)->get();
        $videos= Video::where('id',1)->get();
        $footer= Footer::where('estado',1)->get();

        /* Para los menus del index */

        $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
        $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
        $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion
        $categoriasAct= CategoriaActividades::where('estado',1)->get();
        $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos

         /* Para el welcome */
        
        $actividades= Actividades::where('estado',1)->inRandomOrder()->take(2)->get(); // me retorna dos registros aleatorios
        $hospedaje= Hospedaje::where('estado',1)->inRandomOrder()->take(2)->get();
        $diversion= Diversion::where('estado',1)->inRandomOrder()->take(2)->get();
        $alimentacion= Alimentacion::where('estado',1)->inRandomOrder()->take(2)->get();
        $actividadesTu= Turistico::where('estado',1)->inRandomOrder()->take(2)->get(); //aqui encuentro a todas las actividades que pertenecen a esa categoria

        $noticias= Noticia::where('estado',1)->orderBy('fecha_post', 'DESC')->paginate(3); // me obtiene todas las noticias activas y ordenadas por la mas reciente
        $noticiasVistas= Noticia::where('estado',1)->orderBy('contador_visitas', 'DESC')->paginate(3); // me obtiene todas las noticias activas y ordenadas por la mas vistas

        
       


      
       
        return view('welcome', compact('noticiasVistas', 'noticias', 'alimentacion','diversion','hospedaje','actividadesTu', 'actividades','categorias','categoriasHospedaje', 'categoriasDiversion', 'categoriasAlimentacion', 'redes', 'videos', 'footer', 'categoriasAct', 'categoriasTu'));
    }


    public function turismo_comunitario(){
          $turismo= TurismoComunitario::where('id',1)->get();
          $redes= Redes::where('estado',1)->get();
          $footer= Footer::where('estado',1)->get();
          $categoriasAct= CategoriaActividades::where('estado',1)->get();
          $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
          $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
            $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
            $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion

          $variable=0;
       
         foreach($turismo as $item){

             $item->contador_visitas++;
             $variable= $item;
             $item->save();
         }
        

        
        return view('frontend/TurismoComunitario', compact('turismo', 'categoriasHospedaje', 'categoriasDiversion', 'categoriasAlimentacion', 'redes', 'footer', 'categoriasAct', 'categoriasTu'))->with('variable',$variable);
    }


    public function traer(){
          $traer= Traer::where('id',1)->get();
          $redes= Redes::where('estado',1)->get();
          $footer= Footer::where('estado',1)->get();
          $categoriasAct= CategoriaActividades::where('estado',1)->get();
          $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
            $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
        $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
        $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion
          $variable=0;
       
         foreach($traer as $item){

             $item->contador_visitas++;
             $variable= $item;
             $item->save();
         }
        

        
        return view('frontend/Traer', compact('categoriasHospedaje', 'categoriasDiversion', 'categoriasAlimentacion','traer', 'redes', 'footer', 'categoriasAct', 'categoriasTu'))->with('variable',$variable);
    }

    public function todas_actividades(Request $request){

            $redes= Redes::where('estado',1)->get();
            $footer= Footer::where('estado',1)->get();
            $categoriasAct= CategoriaActividades::where('estado',1)->get();
            $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
            
            $actividades= Actividades::where('estado',1)->orderBy('id')->paginate(3);

            if ($request->ajax()) {
                $view = view('ajax-frontend/actividades',compact('actividades', 'categoriasAct'))->render();
                return response()->json(['html'=>$view]);
            }


            $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
            $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
            $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion

            $actividades_filtradas= Actividades::where('estado',1)->inRandomOrder()->take(5)->get(); // para el carrusel

        
            return view('frontend/todasActividades', compact('actividades_filtradas','categoriasHospedaje', 'categoriasDiversion', 'categoriasAlimentacion', 'redes', 'footer', 'categoriasAct', 'actividades', 'categoriasTu'));


    }


    public function todos_eventos(Request $request){

            $redes= Redes::where('estado',1)->get();
            $footer= Footer::where('estado',1)->get();
            $categoriasAct= CategoriaActividades::where('estado',1)->get();
            $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
             $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
            $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
            $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion

           $actividades_filtradas= Eventos::where('estado',1)->inRandomOrder()->take(5)->get(); // para el carrusel

            $categoriasEventos= CategoriasEventos::where('estado',1)->get(); //categorias para eventos

           
            
            $actividades= Eventos::where('estado',1)->orderBy('id')->paginate(6);

            if ($request->ajax()) {
                return view('ajax-frontend/eventos', compact('actividades', 'categoriasEventos'));
            }

            
/*
            if ($request->ajax()) {

                return view('ajax-frontend.eventos', compact('actividades', 'categoriasEventos'))->render();  
              
            }
*/
            


           

           

        
            return view('frontend/todosEventos', compact('categoriasEventos','actividades_filtradas','categoriasHospedaje', 'categoriasDiversion', 'categoriasAlimentacion', 'redes', 'footer', 'categoriasAct', 'actividades', 'categoriasTu'));


    }


     public function todas_noticias(Request $request){

            $redes= Redes::where('estado',1)->get();
            $footer= Footer::where('estado',1)->get();
            $categoriasAct= CategoriaActividades::where('estado',1)->get(); 
            $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
             $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
            $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
            $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion

           //$actividades_filtradas= Eventos::where('estado',1)->inRandomOrder()->take(5)->get(); // para el carrusel

            $categoriasNoticias= Categoria::where('estado',1)->get(); //categorias para las noticias

             $noticias= Noticia::where('estado',1)->orderBy('fecha_post', 'DESC')->paginate(3); // me obtiene todas las noticias activas y ordenadas por la mas reciente
            $categorias= Categoria::where('estado',1)->get();

           
            
            $actividades= Noticia::where('estado',1)->orderBy('id')->paginate(2);

            if ($request->ajax()) {
                return view('ajax-frontend/noticias', compact('actividades', 'categoriasNoticias'));
            }

            
/*
            if ($request->ajax()) {

                return view('ajax-frontend.eventos', compact('actividades', 'categoriasEventos'))->render();  
              
            }
*/
            


           

           

        
            return view('frontend/todosNoticias', compact('categorias','noticias','categoriasNoticias','categoriasHospedaje', 'categoriasDiversion', 'categoriasAlimentacion', 'redes', 'footer', 'categoriasAct', 'actividades', 'categoriasTu'));


    }

    public function todos_actractivos(Request $request){

        $redes= Redes::where('estado',1)->get();
        $footer= Footer::where('estado',1)->get();
        $categoriasAct= CategoriaActividades::where('estado',1)->get(); //categoria de actividades
        $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos

         $actividades= Turistico::where('estado',1)->orderBy('id')->paginate(3);

            if ($request->ajax()) {
                $view = view('ajax-frontend/turistico',compact('actividades', 'categoriasTu'))->render();
                return response()->json(['html'=>$view]);
            }


        $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
        $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
        $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion

        $actividades_filtradas= Turistico::where('estado',1)->inRandomOrder()->take(5)->get(); // para el carrusel
        
        return view('frontend/todosAtractivos', compact('actividades_filtradas','categoriasHospedaje', 'categoriasDiversion', 'categoriasAlimentacion', 'redes', 'footer', 'categoriasAct', 'actividades', 'categoriasTu'));


    }

     public function todos_hospedajes(Request $request){

        $redes= Redes::where('estado',1)->get();
        $footer= Footer::where('estado',1)->get();
        $categoriasAct= CategoriaActividades::where('estado',1)->get(); //categoria de actividades
        $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos

        

        $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
        $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
        $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion


         $actividades= Hospedaje::where('estado',1)->orderBy('id')->paginate(3);

            if ($request->ajax()) {
                $view = view('ajax-frontend/hospedaje',compact('actividades', 'categoriasHospedaje'))->render();
                return response()->json(['html'=>$view]);
            }


         $actividades_filtradas= Hospedaje::where('estado',1)->inRandomOrder()->take(5)->get(); // para el carrusel
        
        return view('frontend/todosHospedajes', compact('actividades_filtradas','redes','categoriasHospedaje', 'categoriasDiversion', 'categoriasAlimentacion', 'footer', 'categoriasAct', 'actividades', 'categoriasTu'));


    }

    public function todos_alimentacion(Request $request){

        $redes= Redes::where('estado',1)->get();
        $footer= Footer::where('estado',1)->get();
        $categoriasAct= CategoriaActividades::where('estado',1)->get(); //categoria de actividades
        $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
       

        $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
        $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
        $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion

          $actividades= Alimentacion::where('estado',1)->orderBy('id')->paginate(3);

            if ($request->ajax()) {
                $view = view('ajax-frontend/alimentacion',compact('actividades', 'categoriasAlimentacion'))->render();
                return response()->json(['html'=>$view]);
            }

         $actividades_filtradas= Alimentacion::where('estado',1)->inRandomOrder()->take(5)->get(); // para el carrusel
        
        return view('frontend/todosAlimentacion', compact('actividades_filtradas','redes','categoriasHospedaje', 'categoriasDiversion', 'categoriasAlimentacion', 'footer', 'categoriasAct', 'actividades', 'categoriasTu'));


    }

     public function todos_diversion(Request $request){

        $redes= Redes::where('estado',1)->get();
        $footer= Footer::where('estado',1)->get();
        $categoriasAct= CategoriaActividades::where('estado',1)->get(); //categoria de actividades
        $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos

        

        $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
        $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
        $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion

         $actividades= Diversion::where('estado',1)->orderBy('id')->paginate(3);

            if ($request->ajax()) {
                $view = view('ajax-frontend/diversion',compact('actividades', 'categoriasDiversion'))->render();
                return response()->json(['html'=>$view]);
            }

         $actividades_filtradas= Diversion::where('estado',1)->inRandomOrder()->take(5)->get(); // para el carrusel
        
        return view('frontend/todosDiversion', compact('actividades_filtradas','redes','categoriasHospedaje', 'categoriasDiversion', 'categoriasAlimentacion', 'footer', 'categoriasAct', 'actividades', 'categoriasTu'));


    }


     public function actividades(Request $request, $id){
        
        $actividad = Actividades::find($id); //aqui encuentro la actividad selecciona
        if($actividad==null){ // si no existe el contenido entonces mostrar página no encontrada
                
            return view('errors/404');
        }else{
        
        $categoriasAct = CategoriaActividades::find($actividad->id_categorias); //aqui encuentro a cual categoria pertenece
        $actividades= Actividades::where('id_categorias',$categoriasAct->id)->get(); //aqui encuentro a todas las actividades que pertenecen a esa categoria
         $redes= Redes::where('estado',1)->get(); //para las redes sociales
         $footer= Footer::where('estado',1)->get(); //footer
        $categorias= CategoriaActividades::where('estado',1)->get(); //este es para el menu de actividades
        $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
        $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
        $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
        $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion


          $comentarios= ComentariosActividades::where('actividades_id',$actividad->id)->where('aprovado', 1)->orderBy('fecha', 'DESC')->paginate(3);

            if ($request->ajax()) {
                $view = view('ajax-frontend/comentariosActividades',compact('comentarios'))->render();
                return response()->json(['html'=>$view]);
            }



         $variable=0;
         $actividad->contador_visitas++;
         $variable= $actividad;
         $actividad->save();
      
        
       
        return view('frontend/actividades',compact('categoriasHospedaje', 'comentarios','categoriasDiversion', 'categoriasAlimentacion', 'actividad', 'categoriasAct', 'actividades', 'redes', 'footer', 'categorias', 'categoriasTu'))->with('variable',$variable);

        }
        
      
     
    }

     public function eventos(Request $request, $id){
        
        $actividad = Eventos::find($id); //aqui encuentro la actividad selecciona
        if($actividad==null){ // si no existe el contenido entonces mostrar página no encontrada
                
            return view('errors/404');
        }else{

        
         $todosEventos= Eventos::where('estado',1)->inRandomOrder()->take(6)->get(); // obtengo 8 eventos aleatorios
        
        $categoriasAct = CategoriasEventos::find($actividad->categoria_id); //aqui encuentro a cual categoria pertenece
        $actividades= Eventos::where('categoria_id',$categoriasAct->id)->get(); //aqui encuentro a todas las actividades que pertenecen a esa categoria
        $redes= Redes::where('estado',1)->get(); //para las redes sociales
        $footer= Footer::where('estado',1)->get(); //footer
        $categorias= CategoriaActividades::where('estado',1)->get(); //este es para el menu de actividades
        $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
        $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
        $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
        $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion

        $comentarios= ComentariosEventos::where('eventos_id',$actividad->id)->where('aprovado', 1)->orderBy('fecha', 'DESC')->paginate(3);

            if ($request->ajax()) {
                $view = view('ajax-frontend/comentariosActividades',compact('comentarios'))->render();
                return response()->json(['html'=>$view]);
            }

         $variable=0;
         $actividad->contador_visitas++;
         $variable= $actividad;
         $actividad->save();
      
        
       
        return view('frontend/eventos',compact('comentarios','todosEventos','categoriasHospedaje', 'categoriasDiversion', 'categoriasAlimentacion', 'actividad', 'categoriasAct', 'actividades', 'redes', 'footer', 'categorias', 'categoriasTu'))->with('variable',$variable);

        }
        
      
     
    }


     public function noticias($id){
        
        $actividad = Noticia::find($id); //aqui encuentro la actividad selecciona
        if($actividad==null){ // si no existe el contenido entonces mostrar página no encontrada
                
            return view('errors/404');
        }else{

        
        $todosNoticias= Noticia::where('estado',1)->inRandomOrder()->take(6)->get(); // obtengo 6 noticias aleatorios
        
        $categoriasAct = Categoria::find($actividad->id_categorias); //aqui encuentro a cual categoria pertenece la noticia
        $actividades= Noticia::where('id_categorias',$categoriasAct->id)->get(); //aqui encuentro a todas las actividades que pertenecen a esa categoria
        $redes= Redes::where('estado',1)->get(); //para las redes sociales
        $footer= Footer::where('estado',1)->get(); //footer
        $categoriasActividades= CategoriaActividades::where('estado',1)->get(); //este es para el menu de actividades
        $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
        $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
        $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
        $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion


         $noticias= Noticia::where('estado',1)->orderBy('fecha_post', 'DESC')->paginate(3); // me obtiene todas las noticias activas y ordenadas por la mas reciente
            $categorias= Categoria::where('estado',1)->get();


         $variable=0;
         $actividad->contador_visitas++;
         $variable= $actividad;
         $actividad->save();
      
        
       
        return view('frontend/noticias',compact('categoriasActividades', 'categorias','noticias','todosNoticias','categoriasHospedaje', 'categoriasDiversion', 'categoriasAlimentacion', 'actividad', 'categoriasAct', 'actividades', 'redes', 'footer', 'categorias', 'categoriasTu'))->with('variable',$variable);

        }
        
      
     
    }


    public function atractivosTuristicos(Request $request, $id){
        
        $actividad = Turistico::find($id); //aqui encuentro la actividad selecciona

        if($actividad==null){ // si no existe el contenido entonces mostrar página no encontrada
                
            return view('errors/404');
        }else{
                $categoriasAct = CategoriaTuristica::find($actividad->id_categorias); //aqui encuentro a cual categoria pertenece
                $actividades= Turistico::where('id_categorias',$categoriasAct->id)->get(); //aqui encuentro a todas las actividades que pertenecen a esa categoria
                $redes= Redes::where('estado',1)->get(); //para las redes sociales
                $footer= Footer::where('estado',1)->get(); //footer
                $categorias= CategoriaActividades::where('estado',1)->get(); //este es para el menu de actividades
                $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
                $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
                $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
                $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion

                $comentarios= ComentariosAtractivosT::where('turistico_id',$actividad->id)->where('aprovado', 1)->orderBy('fecha', 'DESC')->paginate(3);

                if ($request->ajax()) {
                    $view = view('ajax-frontend/comentariosActividades',compact('comentarios'))->render();
                    return response()->json(['html'=>$view]);
                }

                $variable=0;
                $actividad->contador_visitas++;
                $variable= $actividad;
                $actividad->save();
            
                
            
                return view('frontend/atractivosTuristicos',compact('comentarios','categoriasHospedaje', 'categoriasDiversion', 'categoriasAlimentacion','actividad', 'categoriasAct', 'actividades', 'redes', 'footer', 'categorias', 'categoriasTu'))->with('variable',$variable);
        }
     
    }

    public function hospedaje(Request $request, $id){
        
        $actividad = Hospedaje::find($id); //aqui encuentro la actividad selecciona

        if($actividad==null){ // si no existe el contenido entonces mostrar página no encontrada
                
            return view('errors/404');
        }else{
                $categoriasAct = CategoriaHospedaje::find($actividad->id_categorias); //aqui encuentro a cual categoria pertenece
                $actividades= Hospedaje::where('id_categorias',$categoriasAct->id)->get(); //aqui encuentro a todas las actividades que pertenecen a esa categoria
                $redes= Redes::where('estado',1)->get(); //para las redes sociales
                $footer= Footer::where('estado',1)->get(); //footer
                $categorias= CategoriaActividades::where('estado',1)->get(); //este es para el menu de actividades
                $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
                $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
                $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
                $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion



                $comentarios= ComentariosHospedaje::where('hospedaje_id',$actividad->id)->where('aprovado', 1)->orderBy('fecha', 'DESC')->paginate(3);

                if ($request->ajax()) {
                    $view = view('ajax-frontend/comentariosActividades',compact('comentarios'))->render();
                    return response()->json(['html'=>$view]);
                }

                $variable=0;
                $actividad->contador_visitas++;
                $variable= $actividad;
                $actividad->save();
            
                
            
                return view('frontend/hospedaje',compact('comentarios','actividad', 'categoriasAct', 'actividades', 'redes', 'footer', 'categorias', 'categoriasTu', 'categoriasHospedaje', 'categoriasAlimentacion', 'categoriasDiversion'))->with('variable',$variable);
        }
     
    }

     public function alimentacion(Request $request, $id){
        
        $actividad = Alimentacion::find($id); //aqui encuentro la actividad selecciona

        if($actividad==null){ // si no existe el contenido entonces mostrar página no encontrada
                
            return view('errors/404');
        }else{
                $categoriasAct = CategoriaAlimentacion::find($actividad->id_categorias); //aqui encuentro a cual categoria pertenece
                $actividades= Alimentacion::where('id_categorias',$categoriasAct->id)->get(); //aqui encuentro a todas las actividades que pertenecen a esa categoria
                $redes= Redes::where('estado',1)->get(); //para las redes sociales
                $footer= Footer::where('estado',1)->get(); //footer
                $categorias= CategoriaActividades::where('estado',1)->get(); //este es para el menu de actividades
                $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
                $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
                $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
                $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion


                $comentarios= ComentariosAlimentacion::where('alimentacion_id',$actividad->id)->where('aprovado', 1)->orderBy('fecha', 'DESC')->paginate(3);

                if ($request->ajax()) {
                    $view = view('ajax-frontend/comentariosActividades',compact('comentarios'))->render();
                    return response()->json(['html'=>$view]);
                }

                $variable=0;
                $actividad->contador_visitas++;
                $variable= $actividad;
                $actividad->save();
            
                
            
                return view('frontend/alimentacion',compact('comentarios','actividad', 'categoriasAct', 'actividades', 'redes', 'footer', 'categorias', 'categoriasTu', 'categoriasHospedaje', 'categoriasAlimentacion', 'categoriasDiversion'))->with('variable',$variable);
        }
     
    }

    public function diversion(Request $request, $id){
        
        $actividad = Diversion::find($id); //aqui encuentro la actividad selecciona

        if($actividad==null){ // si no existe el contenido entonces mostrar página no encontrada
                
            return view('errors/404');
        }else{
                $categoriasAct = CategoriaDiversion::find($actividad->id_categorias); //aqui encuentro a cual categoria pertenece
                $actividades= Diversion::where('id_categorias',$categoriasAct->id)->get(); //aqui encuentro a todas las actividades que pertenecen a esa categoria
                $redes= Redes::where('estado',1)->get(); //para las redes sociales
                $footer= Footer::where('estado',1)->get(); //footer
                $categorias= CategoriaActividades::where('estado',1)->get(); //este es para el menu de actividades
                $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
                $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
                $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
                $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion


                $comentarios= ComentariosDiversion::where('diversion_id',$actividad->id)->where('aprovado', 1)->orderBy('fecha', 'DESC')->paginate(3);

                if ($request->ajax()) {
                    $view = view('ajax-frontend/comentariosActividades',compact('comentarios'))->render();
                    return response()->json(['html'=>$view]);
                }

                $variable=0;
                $actividad->contador_visitas++;
                $variable= $actividad;
                $actividad->save();
            
                
            
                return view('frontend/diversion',compact('comentarios','actividad', 'categoriasAct', 'actividades', 'redes', 'footer', 'categorias', 'categoriasTu', 'categoriasHospedaje', 'categoriasAlimentacion', 'categoriasDiversion'))->with('variable',$variable);
        }
     
    }


    public function category($id){
        
       
        $categoriasAct = CategoriaActividades::find($id); //aqui encuentro a cual categoria pertenece
        if($categoriasAct==null){ // si no existe el contenido entonces mostrar página no encontrada
                
            return view('errors/404');
        }else{

        $actividades= Actividades::where('id_categorias',$categoriasAct->id)->get(); //aqui encuentro a todas las actividades que pertenecen a esa categoria
         $redes= Redes::where('estado',1)->get(); //para las redes sociales
         $footer= Footer::where('estado',1)->get(); //footer
         $categorias= CategoriaActividades::where('estado',1)->get(); //este es para el menu de actividades
         $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
         $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
        $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
        $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion

         $variable=0;
         $categoriasAct->contador_visitas++;
         $variable= $categoriasAct;
         $categoriasAct->save();
         
      
        
       
        return view('frontend/catActividades',compact('categoriasHospedaje', 'categoriasDiversion', 'categoriasAlimentacion', 'categoriasAct', 'actividades', 'redes', 'footer', 'categorias', 'categoriasTu'))->with('variable',$variable);
        }
     
    }


     public function category_turistico($id){
        
       
        $categoriasAct = CategoriaTuristica::find($id); //aqui encuentro a cual categoria pertenece
        if($categoriasAct==null){ // si no existe el contenido entonces mostrar página no encontrada
                
            return view('errors/404');
        }else{

        $actividades= Turistico::where('id_categorias',$categoriasAct->id)->get(); //aqui encuentro a todas las actividades que pertenecen a esa categoria
         $redes= Redes::where('estado',1)->get(); //para las redes sociales
         $footer= Footer::where('estado',1)->get(); //footer
         $categorias= CategoriaActividades::where('estado',1)->get(); //este es para el menu de actividades
         $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
         $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
        $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
        $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion

         $variable=0;
         $categoriasAct->contador_visitas++;
         $variable= $categoriasAct;
         $categoriasAct->save();
         
      
        
       
        return view('frontend/catTuristico',compact('categoriasHospedaje', 'categoriasDiversion', 'categoriasAlimentacion', 'categoriasAct', 'actividades', 'redes', 'footer', 'categorias', 'categoriasTu'))->with('variable',$variable);
        }
     
    }


     public function category_hospedaje($id){
        
       
        $categoriasAct = CategoriaHospedaje::find($id); //aqui encuentro a cual categoria pertenece
        if($categoriasAct==null){ // si no existe el contenido entonces mostrar página no encontrada
                
            return view('errors/404');
        }else{

        $actividades= Hospedaje::where('id_categorias',$categoriasAct->id)->get(); //aqui encuentro a todas las actividades que pertenecen a esa categoria
         $redes= Redes::where('estado',1)->get(); //para las redes sociales
         $footer= Footer::where('estado',1)->get(); //footer
         $categorias= CategoriaActividades::where('estado',1)->get(); //este es para el menu de actividades
         $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
         $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
        $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
        $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion


         $variable=0;
         $categoriasAct->contador_visitas++;
         $variable= $categoriasAct;
         $categoriasAct->save();
         
      
        
       
        return view('frontend/catHospedaje',compact('categoriasAct', 'categoriasHospedaje', 'categoriasDiversion', 'categoriasAlimentacion', 'actividades', 'redes', 'footer', 'categorias', 'categoriasTu'))->with('variable',$variable);
        }
     
    }

     public function category_alimentacion($id){
        
       
        $categoriasAct = CategoriaAlimentacion::find($id); //aqui encuentro a cual categoria pertenece
        if($categoriasAct==null){ // si no existe el contenido entonces mostrar página no encontrada
                
            return view('errors/404');
        }else{

        $actividades= Alimentacion::where('id_categorias',$categoriasAct->id)->get(); //aqui encuentro a todas las actividades que pertenecen a esa categoria
         $redes= Redes::where('estado',1)->get(); //para las redes sociales
         $footer= Footer::where('estado',1)->get(); //footer
         $categorias= CategoriaActividades::where('estado',1)->get(); //este es para el menu de actividades
         $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
         $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
        $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
        $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion


         $variable=0;
         $categoriasAct->contador_visitas++;
         $variable= $categoriasAct;
         $categoriasAct->save();
         
      
        
       
        return view('frontend/catAlimentacion',compact('categoriasAct', 'categoriasHospedaje', 'categoriasDiversion', 'categoriasAlimentacion', 'actividades', 'redes', 'footer', 'categorias', 'categoriasTu'))->with('variable',$variable);
        }
     
    }


 public function category_diversion($id){
        
       
        $categoriasAct = CategoriaDiversion::find($id); //aqui encuentro a cual categoria pertenece
        if($categoriasAct==null){ // si no existe el contenido entonces mostrar página no encontrada
                
            return view('errors/404');
        }else{

        $actividades= Diversion::where('id_categorias',$categoriasAct->id)->get(); //aqui encuentro a todas las actividades que pertenecen a esa categoria
         $redes= Redes::where('estado',1)->get(); //para las redes sociales
         $footer= Footer::where('estado',1)->get(); //footer
         $categorias= CategoriaActividades::where('estado',1)->get(); //este es para el menu de actividades
         $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
         $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
        $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
        $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion


         $variable=0;
         $categoriasAct->contador_visitas++;
         $variable= $categoriasAct;
         $categoriasAct->save();
         
      
        
       
        return view('frontend/catDiversion',compact('categoriasAct', 'categoriasHospedaje', 'categoriasDiversion', 'categoriasAlimentacion', 'actividades', 'redes', 'footer', 'categorias', 'categoriasTu'))->with('variable',$variable);
        }
     
    }


     

     public function material(){
        $material= Material::where('id',1)->get();
         $redes= Redes::where('estado',1)->get();
          $footer= Footer::where('estado',1)->get();
           $categoriasAct= CategoriaActividades::where('estado',1)->get();
           $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
           $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
        $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
        $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion

           $variable=0;
       
         foreach($material as $item){

             $item->contador_visitas++;
             $variable= $item;
             $item->save();
         }
       
        return view('frontend/Material', compact('categoriasHospedaje', 'categoriasDiversion', 'categoriasAlimentacion', 'material', 'redes', 'footer', 'categoriasAct', 'categoriasTu'))->with('variable',$variable);
    }

     public function pregunta(){
        $preguntas= Preguntas::where('estado',1)->get();
        $redes= Redes::where('estado',1)->get();
         $footer= Footer::where('estado',1)->get();
          $categoriasAct= CategoriaActividades::where('estado',1)->get();
          $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
          $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
        $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
        $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion
        return view('frontend/Preguntas', compact('categoriasHospedaje', 'categoriasDiversion', 'categoriasAlimentacion', 'preguntas', 'redes', 'footer', 'categoriasAct', 'categoriasTu'));
    }

    public function mapas(){
       $mapas= Mapas::where('estado',1)->get();
       $mapita= Mapas::where('id',5000)->get();
        $redes= Redes::where('estado',1)->get();
         $footer= Footer::where('estado',1)->get();
          $categoriasAct= CategoriaActividades::where('estado',1)->get();
          $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
          $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
        $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
        $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion

         $variable=0;
       if($mapita->count())
       {
             foreach($mapita as $item){

             $item->contador_visitas++;
             $variable= $item;
             $item->save();
         }

       }
        
        return view('frontend/mapas', compact('categoriasHospedaje', 'categoriasDiversion', 'categoriasAlimentacion', 'mapas', 'redes', 'footer', 'categoriasAct', 'categoriasTu'))->with('variable',$variable);
    }

    public function llegar(){
       $llegar= Llegar::where('estado',1)->get();
       $llegada= Llegar::where('id',5000)->get();
        $redes= Redes::where('estado',1)->get();
         $footer= Footer::where('estado',1)->get();
          $categoriasAct= CategoriaActividades::where('estado',1)->get();
          $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
          $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
        $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
        $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion

         $variable=0;
       if($llegada->count())
       {
             foreach($llegada as $item){

             $item->contador_visitas++;
             $variable= $item;
             $item->save();
         }

       }
        
        return view('frontend/llegar', compact('categoriasHospedaje', 'categoriasDiversion', 'categoriasAlimentacion', 'llegar', 'redes', 'footer', 'categoriasAct', 'categoriasTu'))->with('variable',$variable);
    }

     

    public function login(){
       
        return view('auth/login');
    }

    public function admin(){
       
        return view('administracion.index');
    }

}
