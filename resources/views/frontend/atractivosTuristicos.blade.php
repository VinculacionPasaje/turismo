@extends('layouts.base2')

@section('title')
<title>{{$actividad->titulo}}</title>

@endsection


@section('menu')

                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >OFERTA<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                 <li class="dropdown-submenu">
                                        <a href="{{url ('actividades')}}">Actividades</a>
                                        <ul class="dropdown-menu">

                                        @if($categorias->count())
                                            @foreach($categorias as $cat)

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
                                 <li><a href="#" onclick="window.open('pdf/guia_turistica.pdf')">Guía Turística</a></li>
                                <li><a href="#">Proceso de Licencia Turistica LOAF</a></li>
                                <li><a href="{{url ('eventos')}}">Agenda de Eventos</a></li>
                                <li><a href="#">Proyectos</a></li>  
                                <li><a href="#">Catastros Turísticos</a></li>               
                            </ul>
                          </li> 




@endsection

@section('encabezado')

{{$categoriasAct->categoria}}

@endsection

@section('menu2')

        @if($actividades->count())
                @foreach($actividades as $act)

                    <li><a href="{{url('atractivosTuristicos/'.$act->id)}}"><i class="glyphicon glyphicon-chevron-right" style="padding-right: 15px;"></i>{{$act->titulo}}</a></li>

                @endforeach
        @endif

@endsection


@section('contenido')

<div class= "col-xs-12 col-md-12" aling="center">
 <p class="contact2"> {{$actividad->titulo}} </p>
        <p style="font-color='black';"> <span class="fa fa-eye"></span> Visto: {{$variable->contador_visitas}} </p>
</div>

{!! $actividad->contenido !!}

<div class="row header">
            <div class="col-lg-12 col-md-12 col-sm-12">

                    <h2 class="column-title2"> Deja tu Comentario </h2>


                
            </div>
  </div>

	

	<div class="row">
		<div id="comment-form" class="col-xs-12 col-md-12" style="margin-top: 20px;">
			{{ Form::open(['route' => ['comentariosTuristicos2.store', $actividad->id], 'method' => 'POST']) }}
      <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
          
				
				<div class="row">
					<div class="col-md-6">
						{{ Form::label('name', "Nombre:") }}
            <input id="nombre" type="text" class="form-control" name="nombre" required placeholder="Ingrese su nombre *">
					
					</div>

					<div class="col-md-6">
						{{ Form::label('email', 'Email:') }}
            
					 <input id="email" type="email" class="form-control" name="email" required placeholder="Correo Electronico *">
					</div>

					<div class="col-md-12">
						{{ Form::label('comment', "Comentario:") }}

            <textarea name="comentario" id="comentario" required placeholder="Comentario *" class="form-control" rows="5"></textarea>
					

						
					</div>

          <div align="center" class="col-lg-12 col-md-12 col-sm-12">

          {{ Form::submit('Comentar', ['class' => ' slider_btn4', 'style' => 'margin-top:15px;']) }}

          </div>
				</div>

			{{ Form::close() }}
		</div>
	</div>



<div class= "col-xs-12 col-md-12">

      <div class="row header">
                  <div class="col-lg-12 col-md-12 col-sm-12">

                          <h4 class="column-title2"> Comentarios </h4>

                             


                      
                  </div>
        </div>




  <div class="post-comments col-lg-12 col-md-12 col-sm-12" id="post-data" >

          
      @include('ajax-frontend/comentariosActividades')

    </div>   <!-- post-comments -->


    @if(count($comentarios) >0)

     <div class="col-lg-12 col-md-12 col-sm-12" align="center">

                        <button type= "button" class="slider_btn4 loadMore"> Ver Mas </button>

                        </div>
                
                <div class="ajax-load text-center" style="display:none">
                            <p><img src="{{url('frontend/images/loader.gif')}}">Cargando más post</p>
                        </div>
      @else

                         <div class="col-lg-12 col-md-12 col-sm-12" align="center">

                             <img src="{{url('frontend/images/sad.png')}}">

                                    <p> No se encontraron resultados </p>

                             </div>



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

 


   <script type="text/javascript">
            var page = 1;


            $(document).ready(function(){

                            $('.loadMore').click(function(){

                                page++;
                                loadMoreData(page);

                        


                                });

                        });

            function loadMoreData(page){
            $.ajax(
                    {
                        url: '?page=' + page,
                        type: "get",
                        beforeSend: function()
                        {
                            $('.ajax-load').show();
                        }
                    })
                    .done(function(data)
                    {
                        if(data.html.length == "0"){
                            $('.loadMore').text("Ya no hay más comentarios").attr("disabled", "disabled");
                            $('.ajax-load').html("Ya no hay mas resultados");
                        return;
                        }
                        $('.ajax-load').hide();
                        $("#post-data").append(data.html);
                    })
                    .fail(function(jqXHR, ajaxOptions, thrownError)
                    {
                        alert('error al cargar los datos...');
                    });
            }
        </script>


@endsection