
<!doctype html>
<html class="home no-js" lang="">

<head>
  <!-- meta -->
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   
  <!-- /meta -->

   <title>Contactos</title>

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
    
    <link rel="shortcut icon" href="{{url('frontend/images/ico/ico.ico')}}">
  
  


  
</head>


<body id="home" class="homepage">
  

   <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    
    <header id="header">
        
        <nav id="main-menu" class="navbar navbar-default navbar-static-top" role="banner">

            
          

            

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
                                <li><a href="{{url ('traer')}}">¿Que Traer?</a></li> 
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
                               <li><a href="{{url ('turismoComunitario')}}">Turismo Comunitario</a></li>     
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
                                 <li><a href="#" onclick="window.open('pdf/guia_turistica.pdf')">Guía Turística</a></li>
                                <li><a href="#">Proceso de Licencia Turistica LOAF</a></li>
                                <li><a href="{{url ('eventos')}}">Agenda de Eventos</a></li>
                                <li><a href="#">Proyectos</a></li>  
                                <li><a href="#">Catastros Turísticos</a></li>               
                            </ul>
                        </li>  

                        

                       
                        
                        <li class="scroll"><a href="{{url ('contactos')}}">CONTACTOS</a></li>

                     
                      
                  
                                                       
                       
                </div>

                



            </div>
        </nav>
    </header>


<div class="container text-center" style="padding-bottom:50px">
   @if (session('mensaje-registro'))
        @include('mensajes.msj_correcto')
    @endif
    @if(!$errors->isEmpty())
        <div class="alert alert-danger">
            <p><strong>Error!! </strong>Corrija los siguientes errores</p>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="row header">
            <div class="col-md-12">

                    <p class="contact"> Contactos </p>
                
            </div>
        </div>

        <div class=" col-md-6"   >
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title"><b>Formulario de contacto</b></h3></div>
                        <div class="panel-body">
                        {!! Form::open(['route' => 'send', 'method' => 'post']) !!}

                        
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    {!! Form::label('name', 'Nombres y Apellidos') !!}

                                     <div class="input-group">
                                        <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                        </div>
                                        {!! Form::text('nombre', null, ['placeholder'=>'Nombres y Apellidos*', 'class' => 'form-control' ]) !!}
                                    </div>
                                    
                                </div>

                                <div class="text-danger" id='error_nombre'>{{$errors->first('nombre')}}</div>
                                        
                            </div>

                            <div class="col-md-6 col-xs-12">

                                <div class="form-group">
                                    {!! Form::label('subject', 'Asunto') !!}
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                        <i class="fa fa-envelope-o"></i>
                                        </div>
                                       {!! Form::text('subject', null, ['placeholder'=>'Asunto*', 'class' => 'form-control' ]) !!}
                                    </div>
                                    
                                </div>

                                <div class="text-danger" id='error_subject'>{{$errors->first('subject')}}</div>
                                    
                                    
                            </div>

                       
                            
                            <div class="form-group">
                                {!! Form::label('email', 'E-Mail') !!}
                                {!! Form::email('email', null, ['placeholder'=>'Email*', 'class' => 'form-control' ]) !!}
                            </div>
                             <div class="text-danger" id='error_email'>{{$errors->first('email')}}</div>
                            
                            
                            <div class="form-group">
                                {!! Form::label('body', 'Mensaje') !!}
                                {!! Form::textarea('body', null, ['placeholder'=>'Mensaje*', 'class' => 'form-control' ]) !!}
                            </div>
                             <div class="text-danger" id='error_mensaje'>{{$errors->first('body')}}</div>

                            <div class="form-group">
                                {!! Form::submit('Enviar', ['class' => 'slider_btn3' ] ) !!}
                            </div>
                        {!! Form::close() !!}
                        </div>
                    </div>
                    </div>

        <div class="col-md-6">
            <legend><b>Redes Sociales</b></legend>

            <div class="social-box">

            @if(count($redes) >0)  

             @foreach($redes as $red)

                                @if($red->id==1) 

                               <div class="col-xs-3 col-md-3">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            
                                                <a href="{{$red->url}}">
                                                    <i class="fa fa-facebook-square icono icon-face" aria-hidden="true"></i>
                                                </a>
                                            
                                        </div>
                                        <div class="panel-footer">
                                            <b>Facebook</b>
                                        </div>
                                    </div>
                                </div>


                                @endif

                                @if($red->id==2)

                               
                                    <div class="col-xs-3 col-md-3">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                
                                                    <a href="{{$red->url}}">
                                                        <i class='fa fa-twitter-square icono icon-twi'></i>
                                                    </a>
                                                
                                            </div>
                                            <div class="panel-footer">
                                                <b>Twitter</b>
                                            </div>
                                        </div>
                                    </div>
                                @endif


                                @if($red->id==3)

                                  <div class="col-xs-3 col-md-3">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                
                                                    <a href="{{$red->url}}">
                                                        <i class='fa fa-instagram icono icon-ins'></i>
                                                    </a>
                                                
                                            </div>
                                            <div class="panel-footer">
                                                <b>Instagram</b>
                                            </div>
                                        </div>
                                    </div>

                                @endif



                                 @if($red->id==5)

                                  <div class="col-xs-3 col-md-3">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                
                                                    <a href="{{$red->url}}">
                                                        <i class='fa fa-pinterest icono icon-pinterest'></i>
                                                    </a>
                                                
                                            </div>
                                            <div class="panel-footer">
                                                <b>Pinterest</b>
                                            </div>
                                        </div>
                                    </div>

                                @endif



                                
                                

                    @endforeach 
            @endif
  
            </div>

                

            <div style="margin-top: 50px;">
                <legend><b> Más Información </b></legend>
                <p class="text-align: left;">
                    <address>
                    @if(count($footer) >0)  
                    @foreach($footer as $item)
                    


                     <strong>Gobierno Autónomo Descentralizado Municipal del Cantón Pasaje </strong><br>
                       <b> Dirección: </b> {{$item->direccion}}<br>
                        <b>Email: </b> {{$item->email}}<br>
                        <b>Teléfono: </b> {{$item->telefono}}<br>
                        <b>FAX: </b> {{$item->fax}}<br>
                        <b>Web:</b>    {{$item->web}}<br>
                @endforeach
                @endif
                       
                    </address>
                </p>
            </div>
            
            <iframe width="100%" height="230" frameborder="0" style="border-radius:0px;" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.0872999560816!2d-79.80886235618735!3d-3.3286075841479597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9033148ad7283497%3A0x4679366e0276b535!2sMunicipio+de+Pasaje%2C+Pasaje!5e0!3m2!1ses!2sec!4v1497075532766"  style="border-radius:20px;"></iframe>
            


                
        </div>

        
                
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

        $('#myCarousel').carousel({
            interval:   4000
        });

 
      </script>

       <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $(".aprobado").fadeOut(300);
            },3000);
        });
    </script>
  



   


</body>

</html>


