<!doctype html>
<html class="home no-js" lang="">

<head>
  <!-- meta -->
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   
  <!-- /meta -->
  @yield('title')
   <title>Actividades</title>

   <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/prettyPhoto.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap-submenu.css')}}">
    <link rel="shortcut icon" href="{{url('frontend/images/ico/ico.ico')}}">
    <link rel="stylesheet" href="{{url('administration/dist/css/mensajes.css')}}">
    <link rel="stylesheet" href="{{url('administration/dist/css/sweetalert.css')}}">
    <link rel="stylesheet" href="{{url('administration/dist/css/alertify.css')}}">
  
  


   @yield('head')
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
                                <li><a href="{{url ('llegar')}}">¿Cómo Llegar?</a></li>
                                <li><a href="{{url ('mapas')}}">Mapas</a></li>  
                                <li><a href="{{url ('preguntas')}}">Preguntas Frecuentes</a></li>   
                                <li><a href="{{url ('material')}}">Material Turístico</a></li>            
                            </ul>
                             </li> 

                       @yield('menu') 

                        

                       
                        
                        <li class="scroll"><a href="{{url ('contactos')}}">CONTACTOS</a></li>
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="negrita"><a href="{{ route('login') }}">LOGIN</a></li>
                        
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif

                     
                      
                  
                                                       
                       
                </div>

                



            </div>
        </nav>
    </header>

   @yield('header')
 

<div class="container" style="padding-top:25px; padding-bottom:35px;">


 
    <div class="row">
        <div class="col-md-4" >
          <div class="module-title">
					<h2 class="encabezado">

                    @yield('encabezado')
                    
                    </h2>			
            </div>
           <div class="panel panel-default">
                    
                        <div class="panel-body" style="background: white;">
                            <ul class="nav nav-pills nav-stacked" style="font-size: 17px;">

                            @yield('menu2')
                        </div>
                    </div>
               
            </ul>
        </div>
        <div class="col-md-8 wel2" style="background: white;">
        @if (session('mensaje-registro'))
            @include('mensajes.msj_correcto')
        @endif

         @yield('contenido')

        


            
        </div>
    </div>



</div>


    
 

 @yield('footer')

    <script src="{{url('frontend/js/jquery.js')}}"></script>
    <script src="{{url('frontend/js/bootstrap.min.js')}}"></script>
    
 <script src="{{url('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{url('frontend/js/jquery.isotope.min.js')}}"></script>

 
    <script src="{{url('frontend/js/main.js')}}"></script>


      <script type="text/javascript">




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

       <script src="{{url('administration/dist/js/alertify.js')}}"></script>

        <script type="text/javascript">
          $(document).ready(function() {
              setTimeout(function() {
                  $(".aprobado").fadeOut(300);
              },3000);
          });
      </script>



  

   @yield('script')

   


</body>

</html>