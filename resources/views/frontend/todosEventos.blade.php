<!doctype html>
<html class="home no-js" lang="">

<head>
  <!-- meta -->
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   
  <!-- /meta -->

   <title>Eventos</title>

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

    <style type="text/css">
  		.ajax-load{
  			
		    padding: 10px 0px;
		    width: 100%;
  		}
  	</style>
  
  


  
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
                                                        <h2>{{$act->titulo}}</h2>
                                                        <p>{{$act->descripcion}}

                                                        </p>
                                                         {!!link_to('eventos/'.$act->id.'', $title = 'Más Información', $attributes = ['class'=>'slider_btn_banner'], $secure = null)!!}
                                                        
                                                    </div>
                                                </div>
                                            </div>   


                             @endforeach


            

            

            </div>
    </div>


<div class="container" style="padding-bottom: 70px; padding-top: 25px;">



       <div class="row header">
            <div class="col-lg-12 col-md-12 col-sm-12">

                   <h1 class="column-title2">  <a id="turismo"> Todos los eventos </a> </h1>


                
            </div>
        </div>

         <div class= "col-xs-12 col-md-12">
            <p style="font-color='black';text-align: justify; font-size: 14px; padding-bottom: 25px;" > 
           El cantón Pasaje te ofrece a lo largo del año una variada lista de eventos culturales de talla internacional que no te puedes perder.
             </p>

            
        </div>



         <div class="row">
                    <div  class="col-xs-12 col-md-12" style="margin-top: 20px;">
                        {{ Form::open(['route' => ['eventos.todos_eventos'], 'method' => 'GET']) }}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

                         <input type="hidden" name="activo" value="activo" id="activo">
                            
                                    
                            <div class="row">
                                       <div class="col-md-3 col-xs-3">
                                            <div class="form-group">
                                                <label>Seleccione la Parroquia</label>
                                                <select class="form-control select2" name="parroquias_id" id="parroquias_id" style="width: 100%;" >

                                                  <?php $contador=1 ?>
                                                   
                                                    @foreach($parroquias as $parroquia)

                                                       @if (old('parroquias_id') == $parroquia->id)
                                                            <option value="{{$parroquia->id}}" selected> {{ $parroquia->parroquia }}</option>
                                                        @else
                                                            @if($contador==1)

                                                             <option value="{{$parroquia->id}}" selected> {{ $parroquia->parroquia }}</option>

                                                             @else

                                                              <option value="{{$parroquia->id}}"> {{ $parroquia->parroquia }}</option>


                                                            @endif
                                                           
                                                        @endif  

                                                         <?php $contador++ ?>     
                                                        
                                                    @endforeach
                                                </select>
                                            </div>
                                    </div>

                                    <div class="col-md-3 col-xs-3">
                                            <div class="form-group">

                                                 <?php
                                             
                                                        // a partir de PHP 5.4
                                                        $meses = [
                                                            "1" => "Enero",
                                                            "2" => "Febrero",
                                                            "3" => "Marzo",
                                                            "4" => "Abril",
                                                            "5" => "Mayo",
                                                            "6" => "Junio",
                                                            "7" => "Julio",
                                                            "8" => "Agosto",
                                                            "9" => "Septiembre",
                                                            "10" => "Octubre",
                                                            "11" => "Noviembre",
                                                            "12" => "Diciembre",
                                                        ];
                                                ?>
                                                <label>Seleccione el mes</label>
                                                <select class="form-control select2" name="mes" id="mes" style="width: 100%;" >
                                                      <?php $contador=1 ?>

                                                    @foreach($meses as $mes)

                                                    @if (old('mes') == $mes)
                                                            <option value="<?php echo key($meses);?>" selected> {{ $mes }}</option>
                                                        @else

                                                            @if($contador==1)


                                                            <option value="<?php echo key($meses);?>" selected> {{ $mes }}</option>

                                                            @else

                                                               <option value="<?php echo key($meses);?>"> {{ $mes }}</option>


                                                            @endif
                                                        @endif    

                                                       
                                                         <?php next($meses); ?>



                                                         <?php $contador++ ?>     
                                                        
                                                    @endforeach
                                                </select>
                                            </div>
                                    </div>

                                    <div class="col-md-3 col-xs-3">
                                            <div class="form-group">
                                                <label>Seleccione el año</label>
                                                <select class="form-control select2" name="year" id="year" style="width: 100%;" >
                                                   
                                                    
                                                    <option value="2016"> 2016</option>
                                                    <option value="2017" selected> 2017</option>
                                                    <option value="2018"> 2018</option>
                                                       
                                                </select>
                                            </div>
                                    </div>


                                    <div align="center" class="col-lg-3 col-md-3 col-sm-3">

                                          {{ Form::submit('Buscar', ['class' => ' slider_btn4', 'style' => 'margin-top:15px;']) }}

                                           <a class="slider_btn4" href="{{url ('eventos')}}">Ver Todos Eventos</a>


                                    </div>
                            </div>

                        {{ Form::close() }}
                    </div>
            </div>


           
        



     

              
                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-top: 50px;">

                                        

                        <div id="item-lists">

                            @if (count($actividades) > 0)

                                      
                            

                                @include('ajax-frontend/eventos')

                            @else

                             <div class="col-lg-12 col-md-12 col-sm-12" align="center">

                             <img src="{{url('frontend/images/sad.png')}}">

                                    <p> No se encontraron resultados </p>

                             </div>

                           

                            @endif


                        </div>
                           


                           

                            
                        </div>
        

    




        

                    
              

               

              

                
                

                              
                                        



        

    
</div> <!-- /container -->


<div class="container2" style="padding-bottom: 50px;">


    @foreach($guia as $guia_turistica)            


        <div class="col-lg-6 col-md-6 col-sm-6 " style="padding-right: 0px;padding-left: 0px;margin-right: auto;margin-left: auto;">

        @if($guia_turistica->path == "")

        <img src="{{url('frontend/images/guia.jpg')}}" alt="Guia de Pasaje" style="width: 100%; height: 500px;">


        @else

        <img src="{{url('fotos/'.$guia_turistica->path)}}" alt="Guia de Pasaje" style="width: 100%; height: 500px;">


        @endif

        

        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 " style=" background: #005ca3; height: 500px; ">

                <div class="guiaContainer">

                <h1 class="guiaH1" >{{$guia_turistica->titulo}}</h1>
                </div>

                <div style="padding-bottom: 10px;">
                
                    <p style="text-align: justify;color: #dadada;font-size: 15px;">
                        {{$guia_turistica->descripcion}}
                    
                    </p>
                
                </div>

                    <div align="center" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 espaciado">
                                            <a class="slider_btn_guia" href="#" onclick="window.open('pdf/{{$guia_turistica->pdf}}')" target="_blank" >Ver Todos Eventos</a>
                                            <a class="slider_btn_guia" href="pdf/{{$guia_turistica->pdf}}" download="eventos">Descargar Folleto Eventos</a>
                                        
                    </div>

                

        </div>
    
    @endforeach




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


   

    <script type="text/javascript">

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


    $(window).on('hashchange', function() {
            if (window.location.hash) {
                var page = window.location.hash.replace('#', '');
                if (page == Number.NaN || page <= 0) {
                    return false;
                }else{
                    getData(page);
                }
            }
        });

    $(document).ready(function()
    {
            $(document).on('click', '.pagination a',function(event)
            {
                 location.href = "#turismo";
                $('li').removeClass('active');
                $(this).parent('li').addClass('active');
                event.preventDefault();

                var myurl = $(this).attr('href');
                var page=$(this).attr('href').split('page=')[1];

                getData(page);

                
            });
        });

        function getData(page){
                $.ajax(
                {
                    url: '?page=' + page,
                    type: "get",
                    datatype: "html",
                })
                .done(function(data)
                {
                    $("#item-lists").empty().html(data);
                    location.hash = page;
                    
                })
                .fail(function(jqXHR, ajaxOptions, thrownError)
                {
                    alert('No response from server');
                });
        }

        </script>



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