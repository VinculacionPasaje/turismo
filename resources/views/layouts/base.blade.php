<!doctype html>
<html class="home no-js" lang="">

<head>
  <!-- meta -->
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   
  <!-- /meta -->
  @yield('title')
   <title>GAD PASAJE | Bienvenido</title>

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
  
  


   @yield('head')
</head>


<body id="home" class="homepage">
  

   <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    
    <header id="header">
        
        <nav id="main-menu" class="navbar navbar-default navbar-static-top" role="banner">

            
            <div id="topbar">
                        <div class="line ">

                            <div  class="col-xs-4 col-md-4 fondo1">
                                        
                                        
                                    </div>

                            <div  class="col-xs-4 col-md-4 fondo2">
                                        
                                        
                                    </div>

                            <div  class="col-xs-4 col-md-4 fondo3">
                                        
                                        
                                    </div>

                         
                        
                        
                        </div>  
            </div> 

            

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
                                <li><a href="#">¿Cómo Llegar?</a></li>
                                <li><a href="#">Mapas</a></li>  
                                <li><a href="{{url ('traer')}}">¿Que Traer?</a></li> 
                                <li><a href="{{url ('preguntas')}}">Preguntas Frecuentes</a></li>   
                                <li><a href="{{url ('material')}}">Material Turístico</a></li>            
                            </ul>
                             </li> 

                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >OFERTA<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                 <li class="dropdown-submenu">
                                        <a tabindex="-1" href="#">Actividades</a>
                                        <ul class="dropdown-menu">
                                                <li><a tabindex="-1" href="#">Deportes de Aventura</a></li>
                                                <li><a tabindex="-1" href="#">Otras Actividades</a></li>
                                        </ul>
                                 </li>
                                 <li class="dropdown-submenu">
                                        <a tabindex="-1" href="#">Atractivos Turísticos</a>
                                        <ul class="dropdown-menu">
                                                <li><a tabindex="-1" href="#">Parroquias</a></li>
                                                <li><a tabindex="-1" href="#">Iglesias</a></li>
                                                <li><a tabindex="-1" href="#">Parques y Monumentos</a></li>
                                                <li><a tabindex="-1" href="#">Rutas Turísticas</a></li>
                                                <li><a tabindex="-1" href="#">Sitios Tradicionales</a></li>
                                                 <li><a tabindex="-1" href="#">Manifestaciones Culturales</a></li>
                                                  <li><a tabindex="-1" href="#">Sitios Arqueológicos</a></li>
                                                   <li><a tabindex="-1" href="#">Sitios Naturales</a></li>
                                        </ul>
                                 </li>   
                                 <li><a href="#">Turismo Comunitario</a></li>           
                            </ul>
                        </li>    


                            
                          <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >SERVICIOS<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                 <li class="dropdown-submenu">
                                        <a tabindex="-1" href="#">Hospedaje</a>
                                        <ul class="dropdown-menu">
                                                <li><a tabindex="-1" href="#">Hosterías</a></li>
                                                <li><a tabindex="-1" href="#">Hoteles</a></li>
                                                 <li><a tabindex="-1" href="#">Hostales</a></li>
                                        </ul>
                                 </li>
                                 <li class="dropdown-submenu">
                                        <a tabindex="-1" href="#">Alimentación</a>
                                        <ul class="dropdown-menu">
                                                <li><a tabindex="-1" href="#">Restaurantes</a></li>
                                                <li><a tabindex="-1" href="#">Cafeterias</a></li>
                                                <li><a tabindex="-1" href="#">Fuentes de Soda</a></li>
                                                
                                        </ul>
                                 </li> 

                                  <li class="dropdown-submenu">
                                        <a tabindex="-1" href="#">Diversión</a>
                                        <ul class="dropdown-menu">
                                                <li><a tabindex="-1" href="#">Discotecas</a></li>
                                                <li><a tabindex="-1" href="#">Centro de eventos</a></li>
                                                <li><a tabindex="-1" href="#">Bares</a></li>
                                                 <li><a tabindex="-1" href="#">Karaokes</a></li>
                                                
                                        </ul>
                                 </li>   
                                         
                            </ul>
                        </li>    
 

                           <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >GESTIÓN<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                 
                                <li><a href="#">Dirección de Turismo</a></li>
                                <li><a href="#">Agenda de Eventos</a></li>
                                <li><a href="#">Proyectos</a></li>  
                                <li><a href="#">Catastros Turísticos</a></li>               
                            </ul>
                        </li>  

                        

                       
                        
                        <li class="scroll"><a href="#about">CONTACTOS</a></li>

                     
                      
                  
                                                       
                       
                </div>

                



            </div>
        </nav>
    </header>

   @yield('header')
 
<div class="container" style=" padding-top: 25px;">

 


    <div class="col-lg-9 col-md-9 col-sm-6">
   
    @if (Session::has('errors'))
		    <div class="alert alert-warning" role="alert">
			<ul>
	            <strong>Oops! Something went wrong : </strong>
			    @foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
	@endif
    @yield('contenido')

    </div>

    
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <!-- Carousel
                    ================================================== -->
                    <div id="myCarousel" class="carousel slide">        
                        <div class="carousel-inner">           
                            <div class="item active"> 
                                <a href="#"><img class="thumbnail" src="http://placehold.it/600x400/" alt="Slide1"></a>
                                <div class="caption">
                                <h4>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h4>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                                </div>
                            </div>
                            <div class="item"> 
                                <a href="#"><img class="thumbnail" src="http://placehold.it/600x400/" alt="Slide2"></a>
                                <div class="caption">
                                <h4>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h4>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                                </div>                                                           
                            </div>  
                            <div class="item"> 
                                <a href="#"><img class="thumbnail" src="http://placehold.it/600x400/" alt="Slide3"></a>
                                <div class="caption">
                                <h4>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h4>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                                </div>                        
                            </div>                                                                                   
                        </div>
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>                                                                 
                    </div><!-- End Carousel -->  
                </div>
            </div>
       

 
</div>

<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-9">
                <h3>
                    Auction Ends Today</h3>
            </div>
            <div class="col-md-3">
                <!-- Controls -->
                <div class="controls pull-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example"
                            data-slide="next"></a>
                </div>
            </div>
        </div>
        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <div class="col-sm-3">
                            <span class="thumbnail text-center">
      			<img src="http://placehold.it/350x280" alt="...">
      			<h4 class="text-danger">Toyota Fortuner</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Uttar Pradesh (North Zone)</p>
      			<p>Registration No : gaadiexpert.com</p>
      			<p>Auction End in 5 days</p>



      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<button type="button" class="btn btn-link">Add to Wishlist</button>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-danger right" > BID NOW</button>
      				</div>
      				
      			</div>
    		</span>
                        </div>
                        <div class="col-sm-3">
                            <span class="thumbnail text-center">
      			<img src="http://placehold.it/350x280" alt="...">
      			<h4 class="text-danger">Toyota Fortuner</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Uttar Pradesh (North Zone)</p>
      			<p>Registration No : gaadiexpert.com</p>
      			<p>Auction End in 5 days</p>



      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<button type="button" class="btn btn-link">Add to Wishlist</button>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-danger right" > BID NOW</button>
      				</div>
      				
      			</div>
    		</span>
                        </div>
                        <div class="col-sm-3">
                            <span class="thumbnail text-center">
      			<img src="http://placehold.it/350x280" alt="...">
      			<h4 class="text-danger">Toyota Fortuner</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Uttar Pradesh (North Zone)</p>
      			<p>Registration No : gaadiexpert.com</p>
      			<p>Auction End in 5 days</p>



      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<button type="button" class="btn btn-link">Add to Wishlist</button>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-danger right" > BID NOW</button>
      				</div>
      				
      			</div>
    		</span>
                        </div>
                        <div class="col-sm-3">
                            <span class="thumbnail text-center">
      			<img src="http://placehold.it/350x280" alt="...">
      			<h4 class="text-danger">Toyota Fortuner</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Uttar Pradesh (North Zone)</p>
      			<p>Registration No : gaadiexpert.com</p>
      			<p>Auction End in 5 days</p>



      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<button type="button" class="btn btn-link">Add to Wishlist</button>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-danger right" > BID NOW</button>
      				</div>
      				
      			</div>
    		</span>
                        </div>
                        
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-sm-3">
                            <span class="thumbnail text-center">
      			<img src="http://placehold.it/350x280" alt="...">
      			<h4 class="text-danger">Toyota Fortuner</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Uttar Pradesh (North Zone)</p>
      			<p>Registration No : gaadiexpert.com</p>
      			<p>Auction End in 5 days</p>



      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<button type="button" class="btn btn-link">Add to Wishlist</button>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-danger right" > BID NOW</button>
      				</div>
      				
      			</div>
    		</span>
                        </div>
                        <div class="col-sm-3">
                            <span class="thumbnail text-center">
      			<img src="http://placehold.it/350x280" alt="...">
      			<h4 class="text-danger">Toyota Fortuner</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Uttar Pradesh (North Zone)</p>
      			<p>Registration No : gaadiexpert.com</p>
      			<p>Auction End in 5 days</p>



      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<button type="button" class="btn btn-link">Add to Wishlist</button>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-danger right" > BID NOW</button>
      				</div>
      				
      			</div>
    		</span>
                        </div>
                        <div class="col-sm-3">
                            <span class="thumbnail text-center">
      			<img src="http://placehold.it/350x280" alt="...">
      			<h4 class="text-danger">Toyota Fortuner</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Uttar Pradesh (North Zone)</p>
      			<p>Registration No : gaadiexpert.com</p>
      			<p>Auction End in 5 days</p>



      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<button type="button" class="btn btn-link">Add to Wishlist</button>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-danger right" > BID NOW</button>
      				</div>
      				
      			</div>
    		</span>
                        </div>
                        <div class="col-sm-3">
                            <span class="thumbnail text-center">
      			<img src="http://placehold.it/350x280" alt="...">
      			<h4 class="text-danger">Toyota Fortuner</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Uttar Pradesh (North Zone)</p>
      			<p>Registration No : gaadiexpert.com</p>
      			<p>Auction End in 5 days</p>



      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<button type="button" class="btn btn-link">Add to Wishlist</button>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-danger right" > BID NOW</button>
      				</div>
      				
      			</div>
    		</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
 


  
 <footer id="footer">
        <div class="container">

               <div class="col-xs-12 col-md-12 col-sm-12" style="padding-bottom: 10px;" align="center">
                   <img src="{{url('frontend/images/logo3.png')}}" alt="logo">
                

                   
                </div>

            
            
                <div class="col-xs-12 col-md-12 col-sm-12">
                    <p >Gobierno Autónomo Descentralizado Municipal del Cantón Pasaje <br>
                        Av. Bolívar entre Municipalidad y Juan Montalvo | Telf. 593 (7) 291-5234 | Fax. FALTA FAX | www.municipiodepasaje.gob.ec
                        <br>® Todos los Derechos Reservados | Pasaje, El Oro, Ecuador 2017
                        
                        </p> 

                         <div class="caja-redes">
                    <a href="#" class="icon-button linkedin"><i class="fa fa-instagram"></i><span></span></a>
                    <a href="#" class="icon-button pinterest"><i class="fa fa-youtube"></i><span></span></a>
                    <a href="#" class="icon-button twitter"><i class="fa fa-twitter"></i><span></span></a>
                    <a href="#" class="icon-button facebook"><i class="fa fa-facebook"></i><span></span></a>
                    
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

        $('#myCarousel').carousel({
            interval:   4000
        });

    (function () {
    var previousScroll = 0;

    $(window).scroll(function(){
       var currentScroll = $(this).scrollTop();
       if (currentScroll > previousScroll){

            //$('.menu').hide('slow');

           $('.menu2').addClass('desaparece');
           $('.menu2').removeClass('aparece');

           //para abajo
          
       } else {

           //$('.menu').show('slow');
          
            

           $('.menu2').addClass('aparece');
           $('.menu2').removeClass('desaparece');
           
          

         //para arriba
       }
       previousScroll = currentScroll;
    });
}()); //run this anonymous function immediately
      </script>
  

   @yield('script')

   


</body>

</html>