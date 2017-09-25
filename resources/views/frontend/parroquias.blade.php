
<!doctype html>
<html class="home no-js" lang="">

<head>
  <!-- meta -->
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   
  <!-- /meta -->

   <title> {{ $actividad->parroquia}}</title>

   <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.transitions.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/prettyPhoto.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap-submenu.css')}}">
    <link rel="stylesheet" href="{{url('administration/dist/css/mensajes.css')}}">
    <link rel="stylesheet" href="{{url('administration/dist/css/sweetalert.css')}}">
    <link rel="stylesheet" href="{{url('administration/dist/css/alertify.css')}}">
         <link rel="stylesheet" href="{{url('frontend/css/lightbox.min.css')}}">
    
    <link rel="shortcut icon" href="{{url('frontend/images/ico/ico.ico')}}">
  
  


  
</head>


<body id="home" class="homepage" style="background: rgb(255, 255, 255);">
  

   <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    
    <header id="header">
        
        <nav id="main-menu" class="navbar navbar-default menu" role="banner" style="z-index: 100000;">

            
          

            

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
                                <li><a href="{{url ('parroquias')}}">Parroquias</a></li>
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

                                        @if($categoriasActividades->count())
                                            @foreach($categoriasActividades as $cat)

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
                                <li><a href="{{url ('luaf')}}">Proceso de Licencia Turística LUAF</a></li>
                                <li><a href="{{url ('eventos')}}">Agenda de Eventos</a></li>
                                <li><a href="{{url ('proyectos')}}">Proyectos</a></li>  
                                <li><a href="{{url ('catastros')}}">Catastros Turísticos</a></li>                
                            </ul>
                        </li>  

                        

                       
                        
                        <li class="scroll"><a href="{{url ('contactos')}}">CONTACTOS</a></li>

                     
                      
                  
                                                       
                       
                </div>

                



            </div>
        </nav>
    </header>


<div class="container" style="padding-bottom:50px">

       
            <div class="col-lg-12 col-md-12 col-sm-12">

                   <h1 class="column-title3"> Parroquia   {{ $actividad->parroquia}}  </h1>


                
            </div>
   
  

        <div class=" col-md-8"   >

        

   
                <p style="font-color='black';"> <span class="fa fa-eye"></span> Visto: {{$variable->contador_visitas}} </p>

                Tipo de Parroquia:   {{ $actividad->tipo_parroquia}} 
                
                 {!! $actividad->contenido !!}


                 
       
                            
        </div>

        <div class="col-md-4">

         <h3 class="column-title">Otras Parroquias</h3>
                    <div class="panel panel-default" style="background: #f5f5f5;">
                    
                    <div class="panel-body" id="menu2">
                    
                    <ul class="demo1" style="overflow-y: hidden; margin-bottom: 0px;">
                      
                      
                        @foreach($parroquias as $noticia)   
                            <li style="" class="news-item">
                            <table cellpadding="4">
                            <tbody><tr>
                            <tr><img src="{{url('fotos/'.$noticia->path)}}" style="width: 100%;height: 200px;"> </tr>
                            <td>
                                 <h5 class="negro"><a class="negro" href="{{$noticia->id}}">{{$noticia->parroquia}}</a></h5>
                                 
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
                                <a class="btn_noticias" href="{{url ('parroquias')}}">Ver más Parroquias</a>
                      
                            </div>
                    </div>
  
        </div>


            @if(count($atractivos) >0)

                             <div class="col-lg-12 col-md-12 col-sm-12">

                                                    <h2 class="column-title2"> Atractivos Turísticos </h2>
                
                                    </div>

                                @foreach($atractivos as $act)            
                                    

                                    <div class="col-lg-4 col-md-4 col-sm-12 padding-botton25px">

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
                @endif


                 @if(count($seleccionadas) >0)

                             <div class="col-lg-12 col-md-12 col-sm-12">

                                                    <h2 class="column-title2">Actividades </h2>
                
                                    </div>

                                @foreach($todasActividades as $todas)            
                                    
                                    @foreach($seleccionadas as $seleccion)   

                                        @if($todas->id == $seleccion->actividades_id)

                                                            <div class="col-lg-4 col-md-4 col-sm-12 padding-botton25px">

                                                                <div class="news">
                                                                            <div class="img-figure">
                                                                                @foreach($categoriasActividades as $cat)
                                                                                        @if($cat->id == $todas->id_categorias )

                                                                                        <div class="cat">{{$cat->categoria}}</div>
                                                                                        @endif

                                                                                @endforeach
                                                                            
                                                                                <img src="{{url('fotos/'.$todas->path)}}" class="img-responsive">
                                                                            </div>	

                                                                            <div class="title">
                                                                                <a href="{{url ('atractivosTuristicos/'.$todas->id)}}"><h1>{{$todas->titulo}}</h1></a>
                                                                            </div>
                                                                            <p class="description">
                                                                                {{$todas->descripcion}}
                                                                            </p>

                                                                            <p class="more">
                                                                                <a href="{{url ('actividades/'.$todas->id)}}">Leer Más</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                                                                            </p>
                                                                    </div>


                                                            
                                                        </div>
                                
                                                        
                                                   

                                                    


                                        @endif

                                    
                                    @endforeach 


                            @endforeach

                                <div align="center" class="col-lg-12 col-md-12 col-sm-12 espaciado">
                                                        <a class="slider_btn4" href="{{url ('actividades')}}">Ver Más Actividades</a>
                                                    
                                                    </div>

                                    



                 @endif


                 @if(count($hospedajes) >0)



                 <div class="col-lg-12 col-md-12 col-sm-12">

                                    <h2 class="column-title2"> Hospedajes </h2>
   
                    </div>

                                @foreach($hospedajes as $act)            
                                    

                                    <div class="col-lg-4 col-md-4  col-sm-12 padding-botton25px">

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
                    @endif

                

                @if(count($diversion) >0)

                     <div class="col-lg-12 col-md-12 col-sm-12">

                                    <h2 class="column-title2"> Locales de Diversion </h2>
   
                    </div>

                                @foreach($diversion as $act)            
                                    

                                    <div class="col-lg-4 col-md-4  col-sm-12 padding-botton25px">

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
                    @endif

                

                @if(count($alimentacion) >0)


                     <div class="col-lg-12 col-md-12 col-sm-12">
                                    <h2 class="column-title2"> Locales de Alimentación </h2>
   
                    </div>

                                @foreach($alimentacion as $act)            
                                    

                                    <div class="col-lg-4 col-md-4 col-sm-12 padding-botton25px">

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
                    @endif
                           


     



       



        

        
                
 </div>
                    
       

 

  
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
    <script src="{{url('administration/dist/js/alertify.js')}}"></script>
     <script src="{{url('administration/dist/js/sweetalert.min.js')}}"></script>

 
    <script src="{{url('frontend/js/main.js')}}"></script>
    <script src="{{url('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('frontend/js/jquery.bootstrap.newsbox.min.js')}}"></script>


    <script type="text/javascript">

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
      

    </script>







       
  



   


</body>

</html>