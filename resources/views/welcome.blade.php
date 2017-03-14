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
    
    <link rel="shortcut icon" href="{{url('frontend/images/ico/icon.ico')}}">
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

<body id="home" class="homepage">

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    
    <header id="header">

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

                 

                <div  class="col-xs-4 col-md-4" align="center">
                      <img src="{{url('frontend/images/escudos.png')}}" alt="logo">                           
                                                
                </div>

                <div  class="col-xs-4 col-md-4" align="center">
                                <img src="{{url('frontend/images/logo4.png')}}" alt="logo">                   
                                                    
                </div>

            <div class="redessocial" align="center" >
               <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-youtube"></i></a></li>
                       
               </ul>				
                                                                
            </div>

                     

         
        
        
    </header>

      <!-- CAROUSEL --> 
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


         <nav id="main-menu" class="navbar navbar-default menu " role="banner">

            
            

            

            <div class="container">
                
                <div class="navbar-header">
                    

                    
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    

                    
                    <a class="navbar-brand" href="{{url ('/')}}"><img src="{{url('frontend/images/logo.png')}}" alt="logo"></a>
                </div>

                


                
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home">INICIO</a></li>
						
						
                          <li class="dropdown">
						
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">PASAJE<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">¿Cómo Llegar?</a></li>
                                <li><a href="#">Mapas</a></li>  
                                <li><a href="#">¿Que Traer?</a></li> 
                                <li><a href="#">FAQ</a></li>   
                                <li><a href="#">Material Turístico</a></li>            
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

                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">LOGIN</a></li>
                        
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
                                            Logout
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

    
<section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        
      </div>
    </div>
  </section>

    

    <!--

    <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Our Works</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="text-center">
                <ul class="portfolio-filter">
                    <li><a class="active" href="#" data-filter="*">All Works</a></li>
                    <li><a href="#" data-filter=".creative">Creative</a></li>
                    <li><a href="#" data-filter=".corporate">Corporate</a></li>
                    <li><a href="#" data-filter=".portfolio">Portfolio</a></li>
                </ul>
            </div>

            <div class="portfolio-items">
                <div class="portfolio-item creative">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{url('frontend/images/portfolio/01.jpg')}}" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 1</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="{{url('frontend/images/portfolio/01.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item corporate portfolio">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{url('frontend/images/portfolio/02.jpg')}}" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 2</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="{{url('frontend/images/portfolio/full.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item creative">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{url('frontend/images/portfolio/03.jpg')}}" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 3</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="{{url('frontend/images/portfolio/full.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item corporate">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{url('frontend/images/portfolio/04.jpg')}}" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 4</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="{{url('frontend/images/portfolio/full.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item creative portfolio">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{url('frontend/images/portfolio/05.jpg')}}" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 5</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="{{url('frontend/images/portfolio/full.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item corporate">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{url('frontend/images/portfolio/06.jpg')}}" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 5</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="{{url('frontend/images/portfolio/full.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item creative portfolio">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{url('frontend/images/portfolio/07.jpg')}}" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 7</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="{{url('frontend/images/portfolio/full.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item corporate">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{url('frontend/images/portfolio/08.jpg')}}" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 8</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="{{url('frontend/images/portfolio/full.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    -->

    
   
   <!--
    <section id="meet-team">
        

        <div class="divider"></div>

            <div class="container">
                

                <div class="col-xs-12 col-md-12">
                    <h3 class="column-title">Our History</h3>
                    <div role="tabpanel">
                        <ul class="nav main-tab nav-justified" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#tab1" role="tab" data-toggle="tab" aria-controls="tab1" aria-expanded="true">2010</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab2" role="tab" data-toggle="tab" aria-controls="tab2" aria-expanded="false">2011</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab3" role="tab" data-toggle="tab" aria-controls="tab3" aria-expanded="false">2013</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab4" role="tab" data-toggle="tab" aria-controls="tab4" aria-expanded="false">2014</a>
                            </li>
                        </ul>
                        <div id="tab-content" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="tab1" aria-labelledby="tab1">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters readable English.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab2" aria-labelledby="tab2">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters readable English.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab3" aria-labelledby="tab3">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters readable English.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab4" aria-labelledby="tab3">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters readable English.</p>
                            </div>
                        </div>
                    </div>
                </div>


             

                <div class="col-xs-6 col-md-6">
                    <h3 class="column-title">Faqs</h3>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Enim eiusmod high life accusamus
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Nihil anim keffiyeh helvetica
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Vegan excepteur butcher vice lomo
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               

           
        </div>
    </section>

 -->


 <section id="blog">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Últimas noticias</h2>
                
            </div>

            <div class="row">
            
                <div class="col-lg-8 col-md-8 col-sm-6">
                    <div class="blog-post blog-large wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="0ms">
                        <article>
                            <header class="entry-header">
                                <div class="entry-thumbnail">
                                    <img class="img-responsive" src="{{url('frontend/images/blog/01.jpg')}}" alt="">
                                    <span class="post-format post-format-video"><i class="fa fa-film"></i></span>
                                </div>
                                <div class="entry-date">25 November 2014</div>
                                <h2 class="entry-title"><a href="#">While now the fated Pequod had been so long afloat this</a></h2>
                            </header>

                            <div class="entry-content">
                                <P>With a blow from the top-maul Ahab knocked off the steel head of the lance, and then handing to the mate the long iron rod remaining, bade him hold it upright, without its touching off the steel head of the lance, and then handing to the mate the long iron rod remaining. without its touching off the steel without its touching off the steel</P>
                                <a class="btn btn-primary" href="#">Leer más</a>
                            </div>

                            <footer class="entry-meta">
                                <span class="entry-author"><i class="fa fa-pencil"></i> <a href="#">Victor</a></span>
                                <span class="entry-category"><i class="fa fa-folder-o"></i> <a href="#">Tutorial</a></span>
                                <span class="entry-comments"><i class="fa fa-comments-o"></i> <a href="#">15</a></span>
                            </footer>
                        </article>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">

                     <div class="blog-post blog-large wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="0ms">
                        <article>
                            <header class="entry-header">
                                <div class="entry-thumbnail">
                                    <img class="img-responsive2" src="{{url('frontend/images/blog/01.jpg')}}" alt="">
                                    <span class="post-format post-format-video"><i class="fa fa-film"></i></span>
                                </div>
                                <div class="entry-date">25 November 2014</div>
                                <h2 class="entry-title"><a href="#">While now the fated Pequod had been so long afloat this</a></h2>
                            </header>

                            <div class="entry-content">
                                <P>With a blow from the top-maul Ahab knocked off the steel head of the lance, and then handing to the mate the long iron rod remaining, bade him hold it upright, without its touching off the steel head of the lance, and then handing to the mate the long iron rod remaining. without its touching off the steel without its touching off the steel</P>
                                <a class="btn btn-primary" href="#">Leer más</a>
                            </div>

                            <footer class="entry-meta">
                                <span class="entry-author"><i class="fa fa-pencil"></i> <a href="#">Victor</a></span>
                                <span class="entry-category"><i class="fa fa-folder-o"></i> <a href="#">Tutorial</a></span>
                                <span class="entry-comments"><i class="fa fa-comments-o"></i> <a href="#">15</a></span>
                            </footer>
                        </article>
                    </div>
                    </div>

                     <div class="col-lg-6 col-md-6 col-sm-6">

                     <div class="blog-post blog-large wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="0ms">
                        <article>
                            <header class="entry-header">
                                <div class="entry-thumbnail">
                                    <img class="img-responsive2" src="{{url('frontend/images/blog/01.jpg')}}" alt="">
                                    <span class="post-format post-format-video"><i class="fa fa-film"></i></span>
                                </div>
                                <div class="entry-date">25 November 2014</div>
                                <h2 class="entry-title"><a href="#">While now the fated Pequod had been so long afloat this</a></h2>
                            </header>

                            <div class="entry-content">
                                <P>With a blow from the top-maul Ahab knocked off the steel head of the lance, and then handing to the mate the long iron rod remaining, bade him hold it upright, without its touching off the steel head of the lance, and then handing to the mate the long iron rod remaining. without its touching off the steel without its touching off the steel</P>
                                <a class="btn btn-primary" href="#">Leer más</a>
                            </div>

                            <footer class="entry-meta">
                                <span class="entry-author"><i class="fa fa-pencil"></i> <a href="#">Victor</a></span>
                                <span class="entry-category"><i class="fa fa-folder-o"></i> <a href="#">Tutorial</a></span>
                                <span class="entry-comments"><i class="fa fa-comments-o"></i> <a href="#">15</a></span>
                            </footer>
                        </article>
                    </div>
                    </div>

                </div><!--/.col-sm-8-->

                 <div class="col-lg-4 col-md-4 col-sm-6">
                    

                    <div class="panel panel-default">
                    <div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b> Noticias</b></div>
                    <div class="panel-body" id="menu2">
                    
                    <ul class="demo1" style="overflow-y: hidden; height: 210px;">


                            <li style="" class="news-item">
                            <table cellpadding="4">
                            <tbody><tr>
                            <td><img src="{{url('frontend/images/slider/bg1.jpg')}}" width="60"></td>
                            <td>
                                 <h5 class="negro"><a class="negro" href="#">While now the fated Pequod had been so long afloat this</a></h5>
                                 
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim...  <a class="btn btn-primary" href="#">Leer Más</a>
                                
                                </td>
                            </tr>
                            </tbody></table>
                            </li>
                            
                            <li style="" class="news-item">
                            <table cellpadding="4">
                            <tbody><tr>
                            <td><img src="{{url('frontend/images/slider/bg1.jpg')}}" width="60"></td>
                            <td>
                                <h5 class="negro"><a class="negro" href="#">While now the fated Pequod had been so long afloat this</a></h5>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim...  <a class="btn btn-primary" href="#">Leer más</a> </td>
                            </tr>
                            </tbody></table>
                            </li>
                            
                            <li style="" class="news-item">
                            <table cellpadding="4">
                            <tbody><tr>
                            <td><img src="{{url('frontend/images/slider/bg1.jpg')}}" width="60" ></td>
                            <td>
                                <h5 class="negro"><a class="negro" href="#">While now the fated Pequod had been so long afloat this</a></h5>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim...  <a class="btn btn-primary" href="#">Leer más</a></td>
                            </tr>
                            </tbody></table>
                            </li>
                            
                            <li style="display:none;" class="news-item">
                            <table cellpadding="4">
                            <tbody><tr>
                            <td><img src="{{url('frontend/images/slider/bg1.jpg')}}" width="60" ></td>
                            <td>
                                <h5 class="negro"><a class="negro" href="#">While now the fated Pequod had been so long afloat this</a></h5>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim...  <a class="btn btn-primary" href="#">Leer más</a></td>
                            </tr>
                            </tbody></table>
                            </li>
                            
                            <li style="display:none;" class="news-item">
                            <table cellpadding="4">
                            <tbody><tr>
                            <td><img src="{{url('frontend/images/slider/bg1.jpg')}}" width="60" ></td>
                            <td>
                                <h5 class="negro"><a class="negro" href="#">While now the fated Pequod had been so long afloat this</a></h5>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim...  <a class="btn btn-primary" href="#">Leer más</a></td>
                            </tr>
                            </tbody></table>
                            </li>
                            
                            <li style="display:none;" class="news-item">
                            <table cellpadding="4">
                            <tbody><tr>
                            <td><img src="{{url('frontend/images/slider/bg1.jpg')}}" width="60" ></td>
                            <td>
                                <h5 class="negro"><a class="negro" href="#">While now the fated Pequod had been so long afloat this</a></h5>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim...  <a class="btn btn-primary" href="#">Leer más</a></td>
                            </tr>
                            </tbody></table>
                            </li>
                            
                            <li style="display:none;" class="news-item">
                            <table cellpadding="4">
                            <tbody><tr>
                            <td><img src="{{url('frontend/images/slider/bg1.jpg')}}" width="60" ></td>
                            <td>
                                <h5 class="negro"><a class="negro" href="#">While now the fated Pequod had been so long afloat this</a></h5>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim...  <a class="btn btn-primary" href="#">Leer más</a></td>
                            </tr>
                            </tbody></table>
                            </li>
                        </ul>
                    </div>

                            <div class="panel-footer">
                                
                               
                                <div class="clearfix">
                                    

                                </div>
                                <a class="btn btn-primary" href="#">Ver Más Noticias</a>
                      
                            </div>

                    <h3 class="column-title">Categorias</h3>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <b>Turismo</b>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <b><a href="#"> Prueba 1 </a> </b>
                                    <br>
                                     <b><a href="#"> Prueba 2 </a> </b>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <b>Deportes</b>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <b><a href="#"> Prueba 1 </a> </b>
                                    <br>
                                     <b><a href="#"> Prueba 2 </a> </b>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <b>Cultural</b>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <b> <a href="#"> Prueba 1 </a> </b>
                                    <br>
                                     <b><a href="#"> Prueba 2 </a> </b>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--
                     <div class="blog-post blog-media wow fadeInRight" data-wow-duration="300ms" data-wow-delay="200ms">
                        <article class="media clearfix">
                            <div class="entry-thumbnail pull-left">
                                <img class="img-responsive" src="images/blog/03.jpg" alt="">
                                <span class="post-format post-format-audio"><i class="fa fa-music"></i></span>
                            </div>
                            <div class="media-body">
                                <header class="entry-header">
                                    <div class="entry-date">03 November 2014</div>
                                    <h2 class="entry-title"><a href="#">Play list of old bangle  music and gajal</a></h2>
                                </header>

                                <div class="entry-content">
                                    <P>With a blow from the top-maul Ahab knocked off the steel head of the lance, and then handing to the steel</P>
                                    <a class="btn btn-primary" href="#">Read More</a>
                                </div>

                                <footer class="entry-meta">
                                    <span class="entry-author"><i class="fa fa-pencil"></i> <a href="#">Ruth</a></span>
                                    <span class="entry-category"><i class="fa fa-folder-o"></i> <a href="#">Tutorial</a></span>
                                    <span class="entry-comments"><i class="fa fa-comments-o"></i> <a href="#">15</a></span>
                                </footer>
                            </div>
                        </article>
                    </div>
                    -->
                    
                </div>
                
            </div>

        </div>
    </section>


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




    <!--home-content-top starts from here-->
<section class="home-content-top">
  <div class="container">
    
    <!--our-quality-shadow-->
    <div class="clearfix"></div>
    <h1 class="heading1">Noticias de Pasaje</h1>
    <div class="tabbable-panel margin-tops4 ">
      <div class="tabbable-line">
        <ul class="nav nav-tabs tabtop  tabsetting">
          <li  class="active"> <a href="#tab_default_1" data-toggle="tab" > <span class="glyphicon glyphicon-list-alt"></span>  Noticias </a> </li>
          <li> <a href="#tab_default_2" data-toggle="tab"> <span class="glyphicon glyphicon-eye-open"></span>  Interesantes</a> </li>
          <li> <a href="#tab_default_3" data-toggle="tab"> <span class="glyphicon glyphicon-check"></span> Destacado </a> </li>
          
        </ul>
        <div class="tab-content margin-tops">
          <div class="tab-pane active fade in" id="tab_default_1">
               <div class="row" style="padding-bottom: 10px;">
                <div class="col-md-4">
                <div class="row"> <img src="{{url('frontend/images/slider/bg2.jpg')}}" class="img-responsive"> </div>
                </div>
                <div class="col-md-8">
                    <h4 class="heading4">Magento Product Upload Services</h4>
                    <p>Are you looking for someone who could upload products on your Magento based website? At webenlance India, we can effectively help you with our top quality Magento product upload services. With the pool of well experienced and talented experts, we ensure that your customers have an enriching experience every time they visit your website. Our comprehensive range of services is available all over the globe at extremely low cost. </p>
                    
                    <a class="btn btn-primary" href="#">Read More</a>
                </div>
                 </div>

                 <div class="row" style="padding-bottom: 10px;">

                <div class="col-md-4">
                <div class="row"> <img src="{{url('frontend/images/slider/bg2.jpg')}}" class="img-responsive"> </div>
                </div>
                <div class="col-md-8">
                        <h4 class="heading4">Magento Product Upload Services</h4>
                        <p>Are you looking for someone who could upload products on your Magento based website? At webenlance India, we can effectively help you with our top quality Magento product upload services. With the pool of well experienced and talented experts, we ensure that your customers have an enriching experience every time they visit your website. Our comprehensive range of services is available all over the globe at extremely low cost. </p>
                        
                         <a class="btn btn-primary" href="#">Read More</a>
                </div>
                </div>

          </div>
          <div class="tab-pane fade" id="tab_default_2">
            

            <div class="row" style="padding-bottom: 10px;">
                <div class="col-md-4">
                <div class="row"> <img src="{{url('frontend/images/slider/bg2.jpg')}}" class="img-responsive"> </div>
                </div>
                <div class="col-md-8">
                    <h4 class="heading4">Magento Product Upload Services</h4>
                    <p>Are you looking for someone who could upload products on your Magento based website? At webenlance India, we can effectively help you with our top quality Magento product upload services. With the pool of well experienced and talented experts, we ensure that your customers have an enriching experience every time they visit your website. Our comprehensive range of services is available all over the globe at extremely low cost. </p>
                    
                    <a class="btn btn-primary" href="#">Read More</a>
                </div>
                 </div>

                 <div class="row" style="padding-bottom: 10px;">

                <div class="col-md-4">
                <div class="row"> <img src="{{url('frontend/images/slider/bg2.jpg')}}" class="img-responsive"> </div>
                </div>
                <div class="col-md-8">
                        <h4 class="heading4">Magento Product Upload Services</h4>
                        <p>Are you looking for someone who could upload products on your Magento based website? At webenlance India, we can effectively help you with our top quality Magento product upload services. With the pool of well experienced and talented experts, we ensure that your customers have an enriching experience every time they visit your website. Our comprehensive range of services is available all over the globe at extremely low cost. </p>
                        
                       <a class="btn btn-primary" href="#">Read More</a>
                </div>
                </div>


          </div>
          <div class="tab-pane fade" id="tab_default_3">
            
            <div class="row" style="padding-bottom: 10px;">
                <div class="col-md-4">
                <div class="row"> <img src="{{url('frontend/images/slider/bg2.jpg')}}" class="img-responsive"> </div>
                </div>
                <div class="col-md-8">
                    <h4 class="heading4">Magento Product Upload Services</h4>
                    <p>Are you looking for someone who could upload products on your Magento based website? At webenlance India, we can effectively help you with our top quality Magento product upload services. With the pool of well experienced and talented experts, we ensure that your customers have an enriching experience every time they visit your website. Our comprehensive range of services is available all over the globe at extremely low cost. </p>
                    
                     <a class="btn btn-primary" href="#">Read More</a>
                </div>
                 </div>

                 <div class="row" style="padding-bottom: 10px;">

                <div class="col-md-4">
                <div class="row"> <img src="{{url('frontend/images/slider/bg2.jpg')}}" class="img-responsive"> </div>
                </div>
                <div class="col-md-8">
                        <h4 class="heading4">Magento Product Upload Services</h4>
                        <p>Are you looking for someone who could upload products on your Magento based website? At webenlance India, we can effectively help you with our top quality Magento product upload services. With the pool of well experienced and talented experts, we ensure that your customers have an enriching experience every time they visit your website. Our comprehensive range of services is available all over the globe at extremely low cost. </p>
                        
                         <a class="btn btn-primary" href="#">Read More</a>
                </div>
                </div>


          </div>
          
      
        </div>
      </div>
    </div>
  </div>
</section>
<!--home-content-top ends here--> 


    

    

    






  


    

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

         $(function () {
                $(".demo1").bootstrapNews({
                    newsPerPage: 3,
                    autoplay: true,
                    pauseOnHover:true,
                    direction: 'up',
                    newsTickerInterval: 4000,
                    onToDo: function () {
                        //console.log(this);
                    }
                });
		
		
        });
      </script>

          <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
     <script src="{{url('frontend/js/jquery.bootstrap.newsbox.min.js')}}"></script>
    


      
</body>
</html>
