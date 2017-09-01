@extends('layouts.base')
@section('title')
<title>Todas las Noticias</title>

@endsection

@section('header')

<div class='oculto'>

<img src="{{url('frontend/images/noticias.jpg')}}" alt="">

</div>

<p class="sliderTitle2"> Noticias de Pasaje </p>




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
                                 
                                <li><a href="#">Proceso de Licencia Turistica LOAF</a></li>
                                <li><a href="{{url ('eventos')}}">Agenda de Eventos</a></li>
                                <li><a href="#">Proyectos</a></li>  
                                <li><a href="#">Catastros Turísticos</a></li>               
                            </ul>
                          </li> 




@endsection

@section('contenido')

    <div class="row header">
            <div class="col-lg-12 col-md-12 col-sm-12">

                   <h1 class="column-title2">  <a id="turismo"> Noticias </a> </h1>


                
            </div>
        </div>


                <div id="item-lists">

                            @if (count($actividades) > 0)

                                      
                            

                                @include('ajax-frontend/noticias')

                            @else

                             <div class="col-lg-12 col-md-12 col-sm-12" align="center">

                             <img src="{{url('frontend/images/sad.png')}}">

                                    <p> No se encontraron resultados </p>

                             </div>

                           

                            @endif


                     </div>


                   








@endsection


@section('derecho')



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



@endsection



@section('script')

     <script src="{{url('frontend/js/jquery.bootstrap.newsbox.min.js')}}"></script>

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

@endsection