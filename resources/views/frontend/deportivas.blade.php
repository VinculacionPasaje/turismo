@extends('layouts.base2')

@section('title')
<title>Actividades Deportivas</title>

@endsection

@section('menu')

                <li class="active"><a href="#"><i class="fa fa-home fa-fw"></i>Home</a></li>
                <li><a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-chevron-right"></i>Widgets</a></li>
                <li><a href="http://www.jquery2dotnet.com"><i class="fa fa-file-o fa-fw"></i>Pages</a></li>
                <li><a href="http://www.jquery2dotnet.com"><i class="fa fa-bar-chart-o fa-fw"></i>Charts</a></li>
                <li><a href="http://www.jquery2dotnet.com"><i class="fa fa-table fa-fw"></i>Table</a></li>
                <li><a href="http://www.jquery2dotnet.com"><i class="fa fa-tasks fa-fw"></i>Forms</a></li>
                <li><a href="http://www.jquery2dotnet.com"><i class="fa fa-calendar fa-fw"></i>Calender</a></li>
                <li><a href="http://www.jquery2dotnet.com"><i class="fa fa-book fa-fw"></i>Library</a></li>
                <li><a href="http://www.jquery2dotnet.com"><i class="fa fa-pencil fa-fw"></i>Applications</a></li>
                <li><a href="http://www.jquery2dotnet.com"><i class="fa fa-cogs fa-fw"></i>Settings</a></li>
@endsection

@section('menu')

                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >OFERTA<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                 <li class="dropdown-submenu">
                                        <a href="{{url ('actividades')}}">Actividades</a>
                                        <ul class="dropdown-menu">

                                        @if($categoriasAct->count())
                                            @foreach($categoriasAct as $cat)

                                                <li><a href="#">{{$cat->categoria}}</a></li>
                                               


                                            @endforeach
                                        @endif
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




@endsection


@section('contenido')

<p>Bloque central</p>
@endsection










@section('footer')

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

                                                

                                        @endforeach



                                @endif
                                   
                                        
                                </ul>				
                                                                                    
                            </div>
                

                   
                </div>

                
           
        </div>
    </footer><!--/#footer-->



@endsection
