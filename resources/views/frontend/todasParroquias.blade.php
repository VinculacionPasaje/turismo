<!doctype html>
<html class="home no-js" lang="">

<head>
  <!-- meta -->
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   
  <!-- /meta -->

   <title>Parroquias</title>

   <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/prettyPhoto.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap-submenu.css')}}">
    <link rel="stylesheet" href="{{url('administration/dist/css/mensajes.css')}}">
    <link rel="stylesheet" href="{{url('administration/dist/css/sweetalert.css')}}">
    <link rel="stylesheet" href="{{url('administration/dist/css/alertify.css')}}">


    <link rel="stylesheet" href="{{url('frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.transitions.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.theme.css')}}">





    <link rel="shortcut icon" href="{{url('frontend/images/ico/ico.ico')}}">
  
  


  
</head>


<body id="home" class="homepage" style="background: rgb(255, 255, 255);">
  

   <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    
    <header id="header">
        
        <nav id="main-menu" class="navbar navbar-default menu" style="z-index: 100000;" role="banner">

            
            

            

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


    <div id="carousel">
            <div id="owl-demo" class="owl-carousel owl-theme"> 

                         @foreach($actividades_filtradas as $act) 

                                        <div class="item">
                                                <img src="{{url('fotos/'.$act->path)}}" alt="">
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
                                                        <h2>{{$act->parroquia}}</h2>
                                                        <p>{{$act->descripcion}}

                                                        </p>
                                                         {!!link_to('parroquias/'.$act->id.'', $title = 'Más Información', $attributes = ['class'=>'slider_btn_banner'], $secure = null)!!}
                                                        
                                                    </div>
                                                </div>
                                            </div>   


                             @endforeach


            

            

            </div>
    </div>





<div class="container" style="padding-bottom: 70px; padding-top: 25px;">



      <div class="row header">
            <div class="col-lg-12 col-md-12 col-sm-12">

                    <h1 class="column-title2"> Parroquias del Cantón Pasaje </h1>


                
            </div>
        </div>

         <div class= "col-xs-12 col-md-12">
            <p style="font-color='black';text-align: justify; font-size: 16px" > 

            La ciudad y el cantón Pasaje, al igual que las demás localidades ecuatorianas, se rige por una municipalidad según lo estipulado en la Constitución Política Nacional. La Municipalidad de Pasaje es una entidad de gobierno seccional que administra el cantón de forma autónoma al gobierno central. La municipalidad está organizada por la separación de poderes de carácter ejecutivo representado por el alcalde, y otro de carácter legislativo conformado por los miembros del concejo cantonal. El Alcalde es la máxima autoridad administrativa y política del Cantón Pasaje. Es la cabeza del cabildo y representante del Municipio.

         El cantón se divide en parroquias que pueden ser urbanas o rurales y son representadas por las Juntas Parroquiales ante el Municipio de Pasaje.

                 
             </p>

            
        </div>


    <div class="row header">
            <div class="col-lg-12 col-md-12 col-sm-12">

                    <h1 class="column-title2"> Parroquias Rurales </h1>


                
            </div>
        </div>
        



            
                <div class="col-lg-12 col-md-12 col-sm-12">

                      @foreach($rurales as $act)            
                                    

                                    <div class="col-lg-4 col-md-6 col-sm-6 padding-botton25px">

                                            <div class="news">
                                                        <div class="img-figure">
                                                               
                                                                    <div class="cat">{{$act->tipo_parroquia}}</div>
                                                                  
                                                           
                                                            <img src="{{url('fotos/'.$act->path)}}" class="img-responsive">
                                                        </div>	

                                                        <div class="title">
                                                            <a href="{{url ('parroquias/'.$act->id)}}"><h1>{{$act->parroquia}}</h1></a>
                                                        </div>
                                                        <p class="description">
                                                            {{$act->descripcion}}
                                                        </p>

                                                        <p class="more">
                                                            <a href="{{url ('parroquias/'.$act->id)}}">Leer Más</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                                                        </p>
                                                </div>


                                        
                                     </div>
              
                                      
                         @endforeach 

                        

                        
                </div>

        
        <div class="row header">
            <div class="col-lg-12 col-md-12 col-sm-12">

                    <h1 class="column-title2"> Parroquias Urbanas </h1>


                
            </div>
        </div>
        



            
                <div class="col-lg-12 col-md-12 col-sm-12">

                      @foreach($urbanas as $act)            
                                    

                                    <div class="col-lg-6 col-md-6 col-sm-6 padding-botton25px">

                                            <div class="news">
                                                        <div class="img-figure">
                                                               
                                                                    <div class="cat">{{$act->tipo_parroquia}}</div>
                                                                  
                                                           
                                                            <img src="{{url('fotos/'.$act->path)}}" class="img-responsive">
                                                        </div>	

                                                        <div class="title">
                                                            <a href="{{url ('parroquias/'.$act->id)}}"><h1>{{$act->parroquia}}</h1></a>
                                                        </div>
                                                        <p class="description">
                                                            {{$act->descripcion}}
                                                        </p>

                                                        <p class="more">
                                                            <a href="{{url ('parroquias/'.$act->id)}}">Leer Más</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                                                        </p>
                                                </div>


                                        
                                     </div>
              
                                      
                         @endforeach 

                        

                        
                </div>

                

        

    
</div> <!-- /container -->



       


        
                
 
                    
       

 

  
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