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
use App\TurismoComunitario;

class FrontController extends Controller
{

    public function __construct(){
        $this->middleware('auth',['only'=>'admin']);
    }


    public function index(){

        $categorias= Categoria::where('estado',1)->get();
        $categoriasAct= CategoriaActividades::where('estado',1)->get();
        $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
        $redes= Redes::where('estado',1)->get();
        $videos= Video::where('id',1)->get();
        $footer= Footer::where('estado',1)->get();
        $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
        $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
        $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion

      
       
        return view('welcome', compact('categorias','categoriasHospedaje', 'categoriasDiversion', 'categoriasAlimentacion', 'redes', 'videos', 'footer', 'categoriasAct', 'categoriasTu'));
    }


    public function turismo_comunitario(){
          $turismo= TurismoComunitario::where('id',1)->get();
          $redes= Redes::where('estado',1)->get();
          $footer= Footer::where('estado',1)->get();
          $categoriasAct= CategoriaActividades::where('estado',1)->get();
          $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos

          $variable=0;
       
         foreach($turismo as $item){

             $item->contador_visitas++;
             $variable= $item;
             $item->save();
         }
        

        
        return view('frontend/TurismoComunitario', compact('turismo', 'redes', 'footer', 'categoriasAct', 'categoriasTu'))->with('variable',$variable);
    }


    public function traer(){
          $traer= Traer::where('id',1)->get();
          $redes= Redes::where('estado',1)->get();
          $footer= Footer::where('estado',1)->get();
          $categoriasAct= CategoriaActividades::where('estado',1)->get();
          $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos

          $variable=0;
       
         foreach($traer as $item){

             $item->contador_visitas++;
             $variable= $item;
             $item->save();
         }
        

        
        return view('frontend/Traer', compact('traer', 'redes', 'footer', 'categoriasAct', 'categoriasTu'))->with('variable',$variable);
    }

    public function todas_actividades(){

         $redes= Redes::where('estado',1)->get();
          $footer= Footer::where('estado',1)->get();
          $categoriasAct= CategoriaActividades::where('estado',1)->get();
          $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
           $actividades= Actividades::where('estado',1)->get();
            return view('frontend/todasActividades', compact('redes', 'footer', 'categoriasAct', 'actividades', 'categoriasTu'));


    }

    public function todos_actractivos(){

        $redes= Redes::where('estado',1)->get();
        $footer= Footer::where('estado',1)->get();
        $categoriasAct= CategoriaActividades::where('estado',1)->get(); //categoria de actividades
        $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
        $actividades= Turistico::where('estado',1)->get();
        
        return view('frontend/todosAtractivos', compact('redes', 'footer', 'categoriasAct', 'actividades', 'categoriasTu'));


    }

     public function todos_hospedajes(){

        $redes= Redes::where('estado',1)->get();
        $footer= Footer::where('estado',1)->get();
        $categoriasAct= CategoriaActividades::where('estado',1)->get(); //categoria de actividades
        $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
        $actividades= Hospedaje::where('estado',1)->get();
        $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
        $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
        $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion
        
        return view('frontend/todosHospedajes', compact('redes','categoriasHospedaje', 'categoriasDiversion', 'categoriasAlimentacion', 'footer', 'categoriasAct', 'actividades', 'categoriasTu'));


    }

    public function todos_alimentacion(){

        $redes= Redes::where('estado',1)->get();
        $footer= Footer::where('estado',1)->get();
        $categoriasAct= CategoriaActividades::where('estado',1)->get(); //categoria de actividades
        $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
        $actividades= Alimentacion::where('estado',1)->get();
        $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
        $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
        $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion
        
        return view('frontend/todosAlimentacion', compact('redes','categoriasHospedaje', 'categoriasDiversion', 'categoriasAlimentacion', 'footer', 'categoriasAct', 'actividades', 'categoriasTu'));


    }

     public function todos_diversion(){

        $redes= Redes::where('estado',1)->get();
        $footer= Footer::where('estado',1)->get();
        $categoriasAct= CategoriaActividades::where('estado',1)->get(); //categoria de actividades
        $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
        $actividades= Diversion::where('estado',1)->get();
        $categoriasHospedaje= CategoriaHospedaje::where('estado',1)->get(); //este es para el menu de hospedaje
        $categoriasDiversion= CategoriaDiversion::where('estado',1)->get(); //para el menu de diversion
        $categoriasAlimentacion= CategoriaAlimentacion::where('estado',1)->get(); //para el menu de Alimentacion
        
        return view('frontend/todosDiversion', compact('redes','categoriasHospedaje', 'categoriasDiversion', 'categoriasAlimentacion', 'footer', 'categoriasAct', 'actividades', 'categoriasTu'));


    }


     public function actividades($id){
        
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

         $variable=0;
         $actividad->contador_visitas++;
         $variable= $actividad;
         $actividad->save();
      
        
       
        return view('frontend/actividades',compact('actividad', 'categoriasAct', 'actividades', 'redes', 'footer', 'categorias', 'categoriasTu'))->with('variable',$variable);

        }
        
      
     
    }

    public function atractivosTuristicos($id){
        
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
                

                $variable=0;
                $actividad->contador_visitas++;
                $variable= $actividad;
                $actividad->save();
            
                
            
                return view('frontend/atractivosTuristicos',compact('actividad', 'categoriasAct', 'actividades', 'redes', 'footer', 'categorias', 'categoriasTu'))->with('variable',$variable);
        }
     
    }

    public function hospedaje($id){
        
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


                $variable=0;
                $actividad->contador_visitas++;
                $variable= $actividad;
                $actividad->save();
            
                
            
                return view('frontend/hospedaje',compact('actividad', 'categoriasAct', 'actividades', 'redes', 'footer', 'categorias', 'categoriasTu', 'categoriasHospedaje', 'categoriasAlimentacion', 'categoriasDiversion'))->with('variable',$variable);
        }
     
    }

     public function alimentacion($id){
        
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


                $variable=0;
                $actividad->contador_visitas++;
                $variable= $actividad;
                $actividad->save();
            
                
            
                return view('frontend/alimentacion',compact('actividad', 'categoriasAct', 'actividades', 'redes', 'footer', 'categorias', 'categoriasTu', 'categoriasHospedaje', 'categoriasAlimentacion', 'categoriasDiversion'))->with('variable',$variable);
        }
     
    }

    public function diversion($id){
        
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


                $variable=0;
                $actividad->contador_visitas++;
                $variable= $actividad;
                $actividad->save();
            
                
            
                return view('frontend/diversion',compact('actividad', 'categoriasAct', 'actividades', 'redes', 'footer', 'categorias', 'categoriasTu', 'categoriasHospedaje', 'categoriasAlimentacion', 'categoriasDiversion'))->with('variable',$variable);
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

         $variable=0;
         $categoriasAct->contador_visitas++;
         $variable= $categoriasAct;
         $categoriasAct->save();
         
      
        
       
        return view('frontend/catActividades',compact('categoriasAct', 'actividades', 'redes', 'footer', 'categorias', 'categoriasTu'))->with('variable',$variable);
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

         $variable=0;
         $categoriasAct->contador_visitas++;
         $variable= $categoriasAct;
         $categoriasAct->save();
         
      
        
       
        return view('frontend/catTuristico',compact('categoriasAct', 'actividades', 'redes', 'footer', 'categorias', 'categoriasTu'))->with('variable',$variable);
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

           $variable=0;
       
         foreach($material as $item){

             $item->contador_visitas++;
             $variable= $item;
             $item->save();
         }
       
        return view('frontend/Material', compact('material', 'redes', 'footer', 'categoriasAct', 'categoriasTu'))->with('variable',$variable);
    }

     public function pregunta(){
        $preguntas= Preguntas::where('estado',1)->get();
        $redes= Redes::where('estado',1)->get();
         $footer= Footer::where('estado',1)->get();
          $categoriasAct= CategoriaActividades::where('estado',1)->get();
          $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos
        return view('frontend/Preguntas', compact('preguntas', 'redes', 'footer', 'categoriasAct', 'categoriasTu'));
    }

    public function mapas(){
       $mapas= Mapas::where('estado',1)->get();
       $mapita= Mapas::where('id',5000)->get();
        $redes= Redes::where('estado',1)->get();
         $footer= Footer::where('estado',1)->get();
          $categoriasAct= CategoriaActividades::where('estado',1)->get();
          $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos

         $variable=0;
       if($mapita->count())
       {
             foreach($mapita as $item){

             $item->contador_visitas++;
             $variable= $item;
             $item->save();
         }

       }
        
        return view('frontend/mapas', compact('mapas', 'redes', 'footer', 'categoriasAct', 'categoriasTu'))->with('variable',$variable);
    }

    public function llegar(){
       $llegar= Llegar::where('estado',1)->get();
       $llegada= Llegar::where('id',5000)->get();
        $redes= Redes::where('estado',1)->get();
         $footer= Footer::where('estado',1)->get();
          $categoriasAct= CategoriaActividades::where('estado',1)->get();
          $categoriasTu= CategoriaTuristica::where('estado',1)->get(); //categorias de atractivos turisticos

         $variable=0;
       if($llegada->count())
       {
             foreach($llegada as $item){

             $item->contador_visitas++;
             $variable= $item;
             $item->save();
         }

       }
        
        return view('frontend/llegar', compact('llegar', 'redes', 'footer', 'categoriasAct', 'categoriasTu'))->with('variable',$variable);
    }

     

    public function login(){
       
        return view('auth/login');
    }

    public function admin(){
       
        return view('administracion.index');
    }

}
