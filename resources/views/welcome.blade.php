<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>GAD PASAJE | Bienvenido</title>
	<!-- core CSS -->
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.transitions.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/prettyPhoto.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap-submenu.css')}}">
  
    
    <link rel="shortcut icon" href="{{url('frontend/images/ico/ico.ico')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       

     <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
   
 
</head><!--/head-->

<body id="home" class="homepage"  style="background: rgb(255, 255, 255);">

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->


     
        




      <!-- 
         <div id="carousel">
            <div id="owl-demo" class="owl-carousel owl-theme"> 
               <div class="item">
                  <img src="{{url('frontend/images/slider/bg1.jpg')}}" alt="">
                  <div class="line"> 
                     <div class="text hide-s">
                        <div class="line"> 
                          <div class="prev-arrow">
                             <i class="fa fa-chevron-left"></i>
                          </div>
                          <div class="next-arrow">
                             <i class="fa fa-chevron-right"></i>
                          </div>
                        </div> 
                        <h2>PASAJE</h2>
                        <p>Pasaje es un cantón con impresionante potencial para desarrollar el turismo de naturaleza. Su gente, su cultura y su historia, hacen de este bello cantón, un lugar digno de admirar y visitar.

                        </p>
                        <a class="slider_btn" href="#">Leer Más</a>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <img src="{{url('frontend/images/slider/bg2.jpg')}}" alt="">
                  <div class="line">
                     <div class="text hide-s"> 
                        <div class="line"> 
                          <div class="prev-arrow ">
                             <i class="fa fa-chevron-left"></i>
                          </div>
                          <div class="next-arrow">
                            <i class="fa fa-chevron-right"></i>
                          </div>
                        </div> 
                       <h2>PASAJE</h2>
                        <p>Pasaje es un cantón con impresionante potencial para desarrollar el turismo de naturaleza. Su gente, su cultura y su historia, hacen de este bello cantón, un lugar digno de admirar y visitar.

                        </p>
                        <a class="slider_btn" href="#">Leer Más</a>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <img src="{{url('frontend/images/slider/bg1.jpg')}}" alt="">
                  <div class="line">
                     <div class="text hide-s">
                        <div class="line"> 
                          <div class="prev-arrow ">
                             <i class="fa fa-chevron-left"></i>
                          </div>
                          <div class="next-arrow ">
                             <i class="fa fa-chevron-right"></i>
                          </div>
                        </div> 
                        <h2>PASAJE</h2>
                        <p>Pasaje es un cantón con impresionante potencial para desarrollar el turismo de naturaleza. Su gente, su cultura y su historia, hacen de este bello cantón, un lugar digno de admirar y visitar.

                     </p>
                        <a class="slider_btn" href="#">Leer Más</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         CAROUSEL --> 


         <!--Video Section-->
            <section class="content-section video-section">
            
            
            <div class="pattern-overlay" style="background: url({{url('frontend/images/trama1.gif')}});">

                          
                            <!--
                        <div id="topbar">
                                    <div class="line ">

                                            <div  class="col-xs-4 col-md-4 fondo1">   </div>
                                            <div  class="col-xs-4 col-md-4 fondo2"></div>
                                            <div  class="col-xs-4 col-md-4 fondo3"></div>
                                                                                    
                                    </div>  
                            </div> 
                            -->

                         

                    <div class="espacio">

                            <div  class="col-xs-6 col-md-4" align="center">
                                    <img src="{{url('frontend/images/escudos.png')}}" alt="logo">                           
                                                                
                            </div>

                            <div  class="col-xs-6 col-md-4" align="center">
                                            <img src="{{url('frontend/images/header3.png')}}" alt="logo">                   
                                                                
                            </div>

                        <div class="redessocial" align="center" >
                                <ul class="social-network social-circle">

                                 @if(count($redes) >0)                           

                                        @foreach($redes as $red)

                                                @if($red->id==1)

                                                <li><a href="{{$red->url}}" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                @endif

                                                @if($red->id==2)

                                            <li><a href="{{$red->url}}" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                @endif


                                                @if($red->id==3)

                                                <li><a href="{{$red->url}}" class="icoRss" title="Instagram"><i class="fa fa-instagram"></i></a></li>

                                                @endif

                                                @if($red->id==4)
                                                    <li><a href="{{$red->url}}" class="icoGoogle" title="Google +"><i class="fa fa-youtube"></i></a></li>
                                                @endif

                                                 @if($red->id==5)
                                                    <li><a href="{{$red->url}}" class="icoPinterest" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                                                @endif

                                                

                                        @endforeach

                                @endif

                                    
                                            
                                            
                                        
                                            
                                        
                                </ul>				
                                                                                    
                            </div>
                     </div>
                     
                     <div class="cabecera">

                     <img class="orla" src="{{url('frontend/images/orla.png')}}" alt="logo">  
                     
                     </div>

          @if(count($videos) >0)  
            @foreach($videos as $video)
                <a id="bgndVideo" class="player" data-property="{videoURL:'{{$video->url}}',containment:'.video-section', quality:'large', autoPlay:true, mute:true, opacity:1}">bg</a>
                        <div class="container">

                        
                            
                            
                                <div class="col-lg-12">

                                <h1>{{$video->titulo}}</h1>
                                <h3 align="justify">
                                {{$video->descripcion}}
                                
                                </h3>

                               <div align="center">
                               
                               
                               

                                <a class="slider_btn" href="#turismo">Descubre los Atractivos Turísticos</a>

                                </div>

                                
                                </div>
                            
                        </div>
                @endforeach
            @endif
            
                </div>
            </div>
            </section>
<!--Video Section Ends Here-->


         


         <nav id="main-menu" class="navbar navbar-default menu " style="z-index: 100000;" role="banner">

            
            

            

            <div class="container">
                
                <div class="navbar-header">
                    

                    
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    

                    
                    <a class="navbar-brand" href="{{url ('/')}}"><img src="{{url('frontend/images/logo2.png')}}" alt="logo"></a>
                </div>

                


                
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="{{url ('/')}}">INICIO</a></li>
						
						
                        <li class="dropdown">
						
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">PASAJE<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{url ('llegar')}}">¿Cómo Llegar?</a></li>
                                <li><a href="{{url ('mapas')}}">Mapas</a></li>  
                                <li><a href="{{url ('preguntas')}}">Preguntas Frecuentes</a></li>   
                                <li><a href="{{url ('material')}}">Material Turístico</a></li>            
                            </ul>
                        </li> 

                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >OFERTA<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                 <li class="dropdown-submenu">
                                        <a href="{{url ('actividades')}}">Actividades</a>
                                        <ul class="dropdown-menu">

                                        @if($categoriasAct->count())
                                            @foreach($categoriasAct as $cat)

                                                <li><a href="{{url('categoria/'.$cat->id)}}">{{$cat->categoria}}</a></li>
                                               


                                            @endforeach
                                        @endif
                                        </ul>
                                 </li>
                                 <li class="dropdown-submenu">
                                        <a href="{{url ('atractivosTuristicos')}}">Atractivos Turísticos</a>
                                        <ul class="dropdown-menu">
                                                @if($categoriasTu->count())
                                                    @foreach($categoriasTu as $cat)

                                                        <li><a href="{{url('categoriaTuristico/'.$cat->id)}}">{{$cat->categoria}}</a></li>
                                                    


                                                    @endforeach
                                                @endif
                                        </ul>
                                 </li>   
                                  
                            </ul>
                        </li>    


                            
                          <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >SERVICIOS<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                 <li class="dropdown-submenu">
                                        <a href="{{url ('hospedaje')}}">Hospedaje</a>
                                        <ul class="dropdown-menu">
                                            @if($categoriasHospedaje->count())
                                                    @foreach($categoriasHospedaje as $cat)

                                                        <li><a href="{{url('categoriaHospedaje/'.$cat->id)}}">{{$cat->categoria}}</a></li>
                                                    


                                                    @endforeach
                                                @endif
                                                
                                        </ul>
                                 </li>
                                 <li class="dropdown-submenu">
                                        <a href="{{url ('alimentacion')}}">Alimentacion</a>
                                        <ul class="dropdown-menu">
                                            @if($categoriasAlimentacion->count())
                                                    @foreach($categoriasAlimentacion as $cat)

                                                        <li><a href="{{url('categoriaAlimentacion/'.$cat->id)}}">{{$cat->categoria}}</a></li>
                                                    


                                                    @endforeach
                                                @endif
                                                
                                        </ul>
                                 </li>

                                 <li class="dropdown-submenu">
                                        <a href="{{url ('diversion')}}">Diversion</a>
                                        <ul class="dropdown-menu">
                                            @if($categoriasDiversion->count())
                                                    @foreach($categoriasDiversion as $cat)

                                                        <li><a href="{{url('categoriaDiversion/'.$cat->id)}}">{{$cat->categoria}}</a></li>
                                                    


                                                    @endforeach
                                                @endif
                                                
                                        </ul>
                                 </li>
                                         
                            </ul>
                        </li>    
 

                           <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >GESTIÓN<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                 <li><a href="{{url ('guia')}}">Guía Turística</a></li>
                                <li><a href="#">Proceso de Licencia Turística LOAF</a></li>
                                <li><a href="{{url ('eventos')}}">Agenda de Eventos</a></li>
                                <li><a href="{{url ('proyectos')}}">Proyectos</a></li>  
                                <li><a href="{{url ('catastros')}}">Catastros Turísticos</a></li>               
                            </ul>
                        </li>  

                        

                       
                        
                        <li class="negrita"><a href="{{url ('contactos')}}">CONTACTOS</a></li>
                      

                     

                     
                      
                  
                                                       
                       
                </div>

                



            </div>
        </nav>

        

    

  


 <section id="blog">

 <div class="container">

   <div class="section-header">
                <h2 class="section-title2 text-center">Pasaje</h2>
                
            </div>



 </div>

 <div class="container2" >


    @foreach($guia as $guia_turistica)            


        <div class="col-lg-6 col-md-6 col-sm-6 " style="padding-right: 0px;padding-left: 0px;margin-right: auto;margin-left: auto;">

        @if($guia_turistica->path == "")

        <img src="{{url('frontend/images/guia.jpg')}}" alt="Guia de Pasaje" style="width: 100%; height: 500px;">


        @else

        <img src="{{url('fotos/'.$guia_turistica->path)}}" alt="Guia de Pasaje" style="width: 100%; height: 500px;">


        @endif

        

        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 " style=" background: #005ca3; height: 500px;">

                <div class="guiaContainer">

                <h1 class="guiaH1" >{{$guia_turistica->titulo}}</h1>
                </div>

                <div style="padding-bottom: 10px;">
                
                    <p style="text-align: justify;color: #dadada;font-size: 15px;">
                        {{$guia_turistica->descripcion}}
                    
                    </p>
                
                </div>

                    <div align="center" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 espaciado">
                                            <a class="slider_btn_guia" href="{{url ('guia')}} " target="_blank">Ver Guía Turística</a>
                                            <a class="slider_btn_guia" href="pdf/{{$guia_turistica->pdf}}" download="guia_pasaje">Descargar Guía Turística</a>
                                        
                    </div>

                

        </div>
    
    @endforeach




 </div>


     <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center"><a id="turismo">Atractivos Turísticos</a></h2>
                
            </div>

         

            <div class="col-lg-8 col-md-8 col-sm-12 ">



                            <div class="col-lg-12 col-md-12 col-sm-12">

                                                    <h2 class="column-title2"> Atractivos Turísticos </h2>
                
                                    </div>

                                @foreach($actividadesTu as $act)            
                                    

                                    <div class="col-lg-6 col-md-6 col-sm-12 padding-botton25px">

                                            <div class="news">
                                                        <div class="img-figure">
                                                               @foreach($categoriasTu as $cat)
                                                                    @if($cat->id == $act->id_categorias )

                                                                    <div class="cat">{{$cat->categoria}}</div>
                                                                    @endif

                                                               @endforeach
                                                           
                                                            <img src="{{url('fotos/'.$act->path)}}" class="img-responsive">
                                                        </div>	

                                                        <div class="title">
                                                            <a href="{{url ('atractivosTuristicos/'.$act->id)}}"><h1>{{$act->titulo}}</h1></a>
                                                        </div>
                                                        <p class="description">
                                                            {{$act->descripcion}}
                                                        </p>

                                                        <p class="more">
                                                            <a href="{{url ('atractivosTuristicos/'.$act->id)}}">Leer Más</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                                                        </p>
                                                </div>


                                        
                                     </div>
              
                                      
                                @endforeach 

                                <div align="center" class="col-lg-12 col-md-12 col-sm-12 espaciado">
                                    <a class="slider_btn4" href="{{url ('atractivosTuristicos')}}">Ver Más Atractivos Turísticos</a>
                                
                                </div>



                     <div class="col-lg-12 col-md-12 col-sm-12">
                                    <h2 class="column-title2"> Actividades </h2>
                     </div>

                                @foreach($actividades as $act)            
                                    

                                    <div class="col-lg-6 col-md-6 col-sm-12 padding-botton25px">

                                            <div class="news">
                                                        <div class="img-figure">
                                                               @foreach($categoriasAct as $cat)
                                                                    @if($cat->id == $act->id_categorias )

                                                                    <div class="cat">{{$cat->categoria}}</div>
                                                                    @endif

                                                               @endforeach
                                                           
                                                            <img src="{{url('fotos/'.$act->path)}}" class="img-responsive">
                                                        </div>	

                                                        <div class="title">
                                                           <a href="{{url ('actividades/'.$act->id)}}"> <h1>{{$act->titulo}}</h1> </a>
                                                        </div>
                                                        <p class="description">
                                                            {{$act->descripcion}}
                                                        </p>

                                                        <p class="more">
                                                            <a href="{{url ('actividades/'.$act->id)}}">Leer Más</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                                                        </p>
                                                </div>


                                        
                                     </div>
              
                                      
                                @endforeach 

                                <div align="center" class="col-lg-12 col-md-12 col-sm-12 espaciado">
                                        <a class="slider_btn4" href="{{url ('actividades')}}">Ver Más Actividades</a>
                                
                                 </div>




                 
       

                    


                    

                      <div class="col-lg-12 col-md-12 col-sm-12">

                                    <h2 class="column-title2"> Hospedajes </h2>
   
                    </div>

                                @foreach($hospedaje as $act)            
                                    

                                    <div class="col-lg-6 col-md-6 col-sm-12 padding-botton25px">

                                            <div class="news">
                                                        <div class="img-figure">
                                                               @foreach($categoriasHospedaje as $cat)
                                                                    @if($cat->id == $act->id_categorias )

                                                                    <div class="cat">{{$cat->categoria}}</div>
                                                                    @endif

                                                               @endforeach
                                                           
                                                            <img src="{{url('fotos/'.$act->path)}}" class="img-responsive">
                                                        </div>	

                                                        <div class="title">
                                                             <a href="{{url ('hospedaje/'.$act->id)}}"><h1>{{$act->titulo}}</h1></a>
                                                        </div>
                                                        <p class="description">
                                                            {{$act->descripcion}}
                                                        </p>

                                                        <p class="more">
                                                            <a href="{{url ('hospedaje/'.$act->id)}}">Leer Más</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                                                        </p>
                                                </div>


                                        
                                     </div>
              
                                      
                                @endforeach 

                                <div align="center" class="col-lg-12 col-md-12 col-sm-12 espaciado">
                                    <a class="slider_btn4" href="{{url ('hospedaje')}}">Ver Más Hospedajes</a>
                                
                                </div>

                    

                     <div class="col-lg-12 col-md-12 col-sm-12">

                                    <h2 class="column-title2"> Diversion </h2>
   
                    </div>

                                @foreach($diversion as $act)            
                                    

                                    <div class="col-lg-6 col-md-6 col-sm-12 padding-botton25px">

                                            <div class="news">
                                                        <div class="img-figure">
                                                               @foreach($categoriasDiversion as $cat)
                                                                    @if($cat->id == $act->id_categorias )

                                                                    <div class="cat">{{$cat->categoria}}</div>
                                                                    @endif

                                                               @endforeach
                                                           
                                                            <img src="{{url('fotos/'.$act->path)}}" class="img-responsive">
                                                        </div>	

                                                        <div class="title">
                                                           <a href="{{url ('diversion/'.$act->id)}}"> <h1>{{$act->nombre_lugar}}</h1></a>
                                                        </div>
                                                        <p class="description">
                                                            {{$act->descripcion}}
                                                        </p>

                                                        <p class="more">
                                                            <a href="{{url ('diversion/'.$act->id)}}">Leer Más</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                                                        </p>
                                                </div>


                                        
                                     </div>
              
                                      
                                @endforeach 

                                <div align="center" class="col-lg-12 col-md-12 col-sm-12 espaciado">
                                    <a class="slider_btn4" href="{{url ('diversion')}}">Ver Más Diversión</a>
                                
                                </div>

                




                     <div class="col-lg-12 col-md-12 col-sm-12">
                                    <h2 class="column-title2"> Alimentación </h2>
   
                    </div>

                                @foreach($alimentacion as $act)            
                                    

                                    <div class="col-lg-6 col-md-6 col-sm-12 padding-botton25px">

                                            <div class="news">
                                                        <div class="img-figure">
                                                               @foreach($categoriasAlimentacion as $cat)
                                                                    @if($cat->id == $act->id_categorias )

                                                                    <div class="cat">{{$cat->categoria}}</div>
                                                                    @endif

                                                               @endforeach
                                                           
                                                            <img src="{{url('fotos/'.$act->path)}}" class="img-responsive">
                                                        </div>	

                                                        <div class="title">
                                                            <a href="{{url ('alimentacion/'.$act->id)}}"><h1>{{$act->nombre_lugar}}</h1></a>
                                                        </div>
                                                        <p class="description">
                                                            {{$act->descripcion}}
                                                        </p>

                                                        <p class="more">
                                                            <a href="{{url ('alimentacion/'.$act->id)}}">Leer Más</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                                                        </p>
                                                </div>


                                        
                                     </div>
              
                                      
                                @endforeach 

                                <div align="center" class="col-lg-12 col-md-12 col-sm-12 espaciado">
                                    <a class="slider_btn4" href="{{url ('alimentacion')}}">Ver Más Alimentación</a>
                                
                                </div>
                           

                     
                   
                

        
                
                    
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6" >
                    
                    <h3 class="column-title" align="center">Últimos Eventos</h3>
                    <div class="panel panel-default" style="background: #f5f5f5;">
                    
                            <div class="panel-body" id="menu2">
                                    
                                    <ul class="demo1" style="overflow-y: hidden; margin-bottom: 0px;">
                                    
                                    
                                                    @foreach($eventos as $noticia)   
                                                        <li style="" class="news-item">
                                                        <table cellpadding="4">
                                                        <tbody><tr>
                                                        <tr><img src="{{url('fotos/'.$noticia->path)}}" style="width: 100%;height: 200px;"> </tr>
                                                        <td>
                                                            <h5 class="negro"><a class="negro" href="eventos/{{$noticia->id}}">{{$noticia->titulo}}</a></h5>
                                                            
                                                            <p class="negro2" > {{$noticia->descripcion}} </p>  
                                                            
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                        </li>


                                                    @endforeach


                                        
                                            
                                            
                                            
                                            
                                        </ul>
                            </div>

                                    <div class="panel-footer">
                                        
                                    
                                        <div class="clearfix">
                                            

                                        </div>
                                        <a class="btn_noticias" href="{{url ('eventos')}}">Ver Más Eventos</a>
                            
                                    </div>
                    </div>





                    <h3 class="column-title">Últimas Noticias</h3>
                    <div class="panel panel-default" style="background: #f5f5f5;">
                    
                            <div class="panel-body" id="menu2">
                                    
                                    <ul class="demo1" style="overflow-y: hidden; margin-bottom: 0px;">
                                    
                                    
                                                    @foreach($noticias as $noticia)   
                                                        <li style="" class="news-item">
                                                        <table cellpadding="4">
                                                        <tbody><tr>
                                                        <tr><img src="{{url('fotos/'.$noticia->path)}}" style="width: 100%;height: 200px;"> </tr>
                                                        <td>
                                                            <h5 class="negro"><a class="negro" href="noticias/{{$noticia->id}}">{{$noticia->titulo}}</a></h5>
                                                            
                                                            <p class="negro2" > {{$noticia->descripcion}} </p>  
                                                            
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                        </li>


                                                    @endforeach


                                        
                                            
                                            
                                            
                                            
                                        </ul>
                            </div>

                                    <div class="panel-footer">
                                        
                                    
                                        <div class="clearfix">
                                            

                                        </div>
                                        <a class="btn_noticias" href="{{url ('noticias')}}">Ver Más Noticias</a>
                            
                                    </div>
                    </div>





                    


                      <h3 class="column-title">Categorias Noticias</h3>

                              
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                @if($categorias->count())
                                @foreach($categorias as $categoria)
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a class= "alternativo" data-toggle="collapse" data-parent="#accordion" href="#{{$categoria->id}}" aria-expanded="false" aria-controls="collapseOne">
                                                        <b>{{$categoria->nombre}}</b>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="{{$categoria->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">

                                                @foreach($noticias as $noticia)            
                                                    @if($categoria->id == $noticia->id_categorias )
                                                     <b><a href="noticias/{{$noticia->id}}"> {{$noticia->titulo}} </a> </b>
                                                     <br>

                                                    @endif

                                                @endforeach
                                                   
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
						       </div>
                
            

       
	</div>
  </section>








    <!--home-content-top starts from here-->
<section class="home-content-top">
  <div class="container">
    
    <!--our-quality-shadow-->
    <div class="clearfix"></div>
    <h1 class="heading1">Noticias de Pasaje</h1>
    <div class="tabbable-panel margin-tops4 ">
      <div align="center" class="tabbable-line">
        <ul class="nav nav-tabs tabtop  tabsetting">
          <li  class="active" style="padding-bottom: 5px;"> <a href="#tab_default_1" data-toggle="tab" > <span class="glyphicon glyphicon-list-alt"></span>  Noticias </a> </li>
          <li style="padding-bottom: 5px;"> <a href="#tab_default_2" data-toggle="tab"> <span class="glyphicon glyphicon-eye-open"></span>  Interesantes</a> </li>
          <li style="padding-bottom: 5px;"> <a href="#tab_default_3" data-toggle="tab"> <span class="glyphicon glyphicon-check"></span> Destacado </a> </li>
          
          
        </ul>
        <div class="tab-content margin-tops">
          <div class="tab-pane active fade in" id="tab_default_1">
             @foreach($noticias as $noticia) 
               <div class="row" style="padding-bottom: 10px;">
                  
                        <div class="col-md-4">
                        <div class="row"> <img src="{{url('fotos/'.$noticia->path)}}" class="img-responsive2"> </div>
                        </div>

                           <div class="col-md-8">
                                <a href="#"><h4 class="heading4 negro">{{$noticia->titulo}}</h4> </a>
                                <p class="negro2" >{{$noticia->descripcion}} </p>
                                
                                <a class="btn_noticias" href="noticias/{{$noticia->id}}">Leer Más</a>
                            </div>
                        


               


                
             
                 </div>
              @endforeach

              

          </div>
          <div class="tab-pane fade" id="tab_default_2">
            

             @foreach($noticiasVistas as $noticia) 
               <div class="row" style="padding-bottom: 10px;">
                  
                        <div class="col-md-4">
                        <div class="row"> <img src="{{url('fotos/'.$noticia->path)}}" class="img-responsive2"> </div>
                        </div>

                           <div class="col-md-8">
                                <a href="#"><h4 class="heading4 negro">{{$noticia->titulo}}</h4> </a>
                                <p class="negro2" >{{$noticia->descripcion}} </p>
                                
                                <a class="btn_noticias" href="noticias/{{$noticia->id}}">Leer Más</a>
                            </div>
             
                 </div>
              @endforeach


          </div>
          <div class="tab-pane fade" id="tab_default_3">

           @foreach($noticias as $noticia) 
                @if($noticia->destacado==1)
                <div class="row" style="padding-bottom: 10px;">
                    
                            <div class="col-md-4">
                            <div class="row"> <img src="{{url('fotos/'.$noticia->path)}}" class="img-responsive2"> </div>
                            </div>

                            <div class="col-md-8">
                                    <a href="#"><h4 class="heading4 negro">{{$noticia->titulo}}</h4> </a>
                                    <p class="negro2" >{{$noticia->descripcion}} </p>
                                    
                                    <a class="btn_noticias" href="noticias/{{$noticia->id}}">Leer Más</a>
                                </div>
                
                    </div>
                @endif
              @endforeach
            
           


          </div>
          
      
        </div>
      </div>
    </div>
  </div>
</section>
<!--home-content-top ends here--> 


    

    

    






  


<div  class="col-xs-12 col-md-12 fondo1">   </div>
    <footer id="footer">
    
        <div class="container">

               <div class="col-xs-12 col-md-12 col-sm-12" style="padding-bottom: 10px; padding-top:15px;" align="center">
                   <img src="{{url('frontend/images/logo3.png')}}" alt="logo">
                

                   
                </div>

            
            
                <div class="col-xs-12 col-md-12 col-sm-12">

                    @if(count($footer) >0)
                        @foreach($footer as $item)
                            <p class="blanco" >Gobierno Autónomo Descentralizado Municipal del Cantón Pasaje <br>
                                {{$item->direccion}} | Telf. {{$item->telefono}} | Fax. {{$item->fax}} | Web: {{$item->web}} | Email: {{$item->email}}
                                <br>® Todos los Derechos Reservados | Pasaje, El Oro, Ecuador {{$item->anio}}
                                
                                </p> 
                        @endforeach
                    @endif

                        <div class="redessocial2" align="center" >
                                <ul class="social-network social-circle">

                                @if(count($redes) >0)


                                 @foreach($redes as $red)

                                                @if($red->id==1)

                                                <li><a href="{{$red->url}}" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                @endif

                                                @if($red->id==2)

                                            <li><a href="{{$red->url}}" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                @endif


                                                @if($red->id==3)

                                                <li><a href="{{$red->url}}" class="icoRss" title="Instagram"><i class="fa fa-instagram"></i></a></li>

                                                @endif

                                                @if($red->id==4)
                                                    <li><a href="{{$red->url}}" class="icoGoogle" title="Google +"><i class="fa fa-youtube"></i></a></li>
                                                @endif

                                                 @if($red->id==5)
                                                    <li><a href="{{$red->url}}" class="icoPinterest" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                                                @endif

                                                

                                        @endforeach



                                @endif
                                   
                                        
                                </ul>				
                                                                                    
                            </div>
                

                   
                </div>

                
           
        </div>
    </footer><!--/#footer-->

    <script src="{{url('frontend/js/jquery.js')}}"></script>
    <script src="{{url('frontend/js/bootstrap.min.js')}}"></script>
    
    <script src="{{url('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{url('frontend/js/jquery.isotope.min.js')}}"></script>

 
    <script src="{{url('frontend/js/main.js')}}"></script>
    
    <script src="{{url('frontend/js/owl.carousel.min.js')}}"></script>

    

    


    <script type="text/javascript">
         jQuery(document).ready(function($) {
            var theme_slider = $("#owl-demo");
            $("#owl-demo").owlCarousel({
                navigation: false,
                slideSpeed: 300,
                paginationSpeed: 400,
                autoPlay: 6000,
                addClassActive: true,
             // transitionStyle: "fade",
                singleItem: true
            });
            $("#owl-demo2").owlCarousel({
                slideSpeed: 300,
                autoPlay: true,
                navigation: true,
                navigationText: ["&#xf007","&#xf006"],
                pagination: false,
                singleItem: true
            });

            
        
            // Custom Navigation Events
            $(".next-arrow").click(function() {
                theme_slider.trigger('owl.next');
            })
            $(".prev-arrow").click(function() {
                theme_slider.trigger('owl.prev');
            })     
        }); 

        $(document).ready(function () {

            $(".player").mb_YTPlayer();

        });

     


        $(document).ready(function(){
            var altura = $('.menu').offset().top;
            
            $(window).on('scroll', function(){
                if ( $(window).scrollTop() > altura ){
                    $('.menu').addClass('menu-fixed');
                } else {
                    $('.menu').removeClass('menu-fixed');
                }
            });
        
        });

         $(function () {
                $(".demo1").bootstrapNews({
                    newsPerPage: 1,
                    autoplay: true,
                    pauseOnHover:true,
                    direction: 'up',
                    newsTickerInterval: 4000,
                    onToDo: function () {
                        //console.log(this);
                    }
                });
		
		
        });


        //<!--    portfolio  JS  =================    -->
       
        $(function() {
                var selectedClass = "";
                $(".fil-cat").click(function(){ 
                selectedClass = $(this).attr("data-rel"); 
            $("#portfolio").fadeTo(100, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut().removeClass('scale-anm');
            setTimeout(function() {
            $("."+selectedClass).fadeIn().addClass('scale-anm');
            $("#portfolio").fadeTo(300, 1);
            }, 300); 
                
            });
        });


        


        (function () {
    var previousScroll = 0;

    $(window).scroll(function(){
       var currentScroll = $(this).scrollTop();
       if (currentScroll > previousScroll){

            //$('.menu').hide('slow');

           $('.menu').addClass('desaparece');
           $('.menu').removeClass('aparece');

           //para abajo
          
       } else {

           //$('.menu').show('slow');
          
            

           $('.menu').addClass('aparece');
           $('.menu').removeClass('desaparece');
           
          

         //para arriba
       }
       previousScroll = currentScroll;
    });
}()); //run this anonymous function immediately


        $(function(){

            $('a[href*=#turismo]').click(function() {

            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
                && location.hostname == this.hostname) {

                    var $target = $(this.hash);

                    $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

                    if ($target.length) {

                        var targetOffset = $target.offset().top;

                        $('html,body').animate({scrollTop: targetOffset}, 1000);

                        return false;

                    }

            }

        });

        });

       

      </script>

         
     <script src="{{url('frontend/js/jquery.bootstrap.newsbox.min.js')}}"></script>
     <script src="{{url('frontend/js/jquery.mb.YTPlayer.js')}}"></script>
  
     

     
    


      
</body>
</html>
