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
class FrontController extends Controller
{

    public function __construct(){
        $this->middleware('auth',['only'=>'admin']);
    }


    public function index(){

        $categorias= Categoria::where('estado',1)->get();
        $categoriasAct= CategoriaActividades::where('estado',1)->get();
        $redes= Redes::where('estado',1)->get();
        $videos= Video::where('id',1)->get();
        $footer= Footer::where('estado',1)->get();
      
       
        return view('welcome', compact('categorias', 'redes', 'videos', 'footer', 'categoriasAct'));
    }

    public function traer(){
          $traer= Traer::where('id',1)->get();
          $redes= Redes::where('estado',1)->get();
          $footer= Footer::where('estado',1)->get();
          $categoriasAct= CategoriaActividades::where('estado',1)->get();

          $variable=0;
       
         foreach($traer as $item){

             $item->contador_visitas++;
             $variable= $item;
             $item->save();
         }
        

        
        return view('frontend/Traer', compact('traer', 'redes', 'footer', 'categoriasAct'))->with('variable',$variable);
    }

    public function todas_actividades(){

        $redes= Redes::where('estado',1)->get();
          $footer= Footer::where('estado',1)->get();
          $categoriasAct= CategoriaActividades::where('estado',1)->get();
           $actividades= Actividades::where('estado',1)->get();
            return view('frontend/todasActividades', compact('redes', 'footer', 'categoriasAct', 'actividades'));


    }


     public function actividades($id){
        
        $actividad = Actividades::find($id); //aqui encuentro la actividad selecciona
        $categoriasAct = CategoriaActividades::find($actividad->id_categorias); //aqui encuentro a cual categoria pertenece
        $actividades= Actividades::where('id_categorias',$categoriasAct->id)->get(); //aqui encuentro a todas las actividades que pertenecen a esa categoria
         $redes= Redes::where('estado',1)->get(); //para las redes sociales
         $footer= Footer::where('estado',1)->get(); //footer
        $categorias= CategoriaActividades::where('estado',1)->get(); //este es para el menu de actividades

         $variable=0;
         $actividad->contador_visitas++;
         $variable= $actividad;
         $actividad->save();
      
        
       
        return view('frontend/actividades',compact('actividad', 'categoriasAct', 'actividades', 'redes', 'footer', 'categorias'))->with('variable',$variable);
     
    }


    public function category($id){
        
       
        $categoriasAct = CategoriaActividades::find($id); //aqui encuentro a cual categoria pertenece
        $actividades= Actividades::where('id_categorias',$categoriasAct->id)->get(); //aqui encuentro a todas las actividades que pertenecen a esa categoria
         $redes= Redes::where('estado',1)->get(); //para las redes sociales
         $footer= Footer::where('estado',1)->get(); //footer
         $categorias= CategoriaActividades::where('estado',1)->get(); //este es para el menu de actividades

         $variable=0;
         $categoriasAct->contador_visitas++;
         $variable= $categoriasAct;
         $categoriasAct->save();
         
      
        
       
        return view('frontend/catActividades',compact('categoriasAct', 'actividades', 'redes', 'footer', 'categorias'))->with('variable',$variable);
     
    }


     

     public function material(){
        $material= Material::where('id',1)->get();
         $redes= Redes::where('estado',1)->get();
          $footer= Footer::where('estado',1)->get();
           $categoriasAct= CategoriaActividades::where('estado',1)->get();

           $variable=0;
       
         foreach($material as $item){

             $item->contador_visitas++;
             $variable= $item;
             $item->save();
         }
       
        return view('frontend/Material', compact('material', 'redes', 'footer', 'categoriasAct'))->with('variable',$variable);
    }

     public function pregunta(){
        $preguntas= Preguntas::where('estado',1)->get();
        $redes= Redes::where('estado',1)->get();
         $footer= Footer::where('estado',1)->get();
          $categoriasAct= CategoriaActividades::where('estado',1)->get();
        return view('frontend/Preguntas', compact('preguntas', 'redes', 'footer', 'categoriasAct'));
    }

    public function mapas(){
       $mapas= Mapas::where('estado',1)->get();
       $mapita= Mapas::where('id',5000)->get();
        $redes= Redes::where('estado',1)->get();
         $footer= Footer::where('estado',1)->get();
          $categoriasAct= CategoriaActividades::where('estado',1)->get();

         $variable=0;
       if($mapita->count())
       {
             foreach($mapita as $item){

             $item->contador_visitas++;
             $variable= $item;
             $item->save();
         }

       }
        
        return view('frontend/mapas', compact('mapas', 'redes', 'footer', 'categoriasAct'))->with('variable',$variable);
    }

    public function llegar(){
       $llegar= Llegar::where('estado',1)->get();
       $llegada= Llegar::where('id',5000)->get();
        $redes= Redes::where('estado',1)->get();
         $footer= Footer::where('estado',1)->get();
          $categoriasAct= CategoriaActividades::where('estado',1)->get();

         $variable=0;
       if($llegada->count())
       {
             foreach($llegada as $item){

             $item->contador_visitas++;
             $variable= $item;
             $item->save();
         }

       }
        
        return view('frontend/llegar', compact('llegar', 'redes', 'footer', 'categoriasAct'))->with('variable',$variable);
    }

     

    public function login(){
       
        return view('auth/login');
    }

    public function admin(){
       
        return view('administracion.index');
    }

}
