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
                                <li><a href="#">Agenda de Eventos</a></li>
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

<div class= "col-xs-12 col-md-12">

<div class="post-comments">

    <form>
      <div class="form-group">
        <label for="comment">Tu comentario</label>
        <textarea name="comment" class="form-control" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <div class="comments-nav">
      <ul class="nav nav-pills">
        <li role="presentation" class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="margin-top: 10px; margin-bottom: 10px;">
                  Hay 2 comments <span class="caret"></span>
                </a>
          <ul class="dropdown-menu">
            <li><a href="#">Más votado</a></li>
            <li><a href="#">Recientes</a></li>
          </ul>
        </li>
      </ul>
    </div>

    <div class="row">

      <div class="media">
        <!-- first comment -->

        <div class="media-heading">
          <button class="btn btn-default btn-xs" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseExample"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button> <span class="label label-info">12314</span> 
          Enviado hace 12 horas
        </div>

        <div class="panel-collapse collapse in" id="collapseOne">

          <div class="media-left">
            <div class="vote-wrap">
              <div class="save-post">
                <a href="#"><span class="glyphicon glyphicon-star" aria-label="Save"></span></a>
              </div>
              <div class="vote up">
                <i class="glyphicon glyphicon-menu-up"></i>
              </div>
              <div class="vote inactive">
                <i class="glyphicon glyphicon-menu-down"></i>
              </div>
            </div>
            <!-- vote-wrap -->
          </div>
          <!-- media-left -->


          <div class="media-body">
            <p>este es un comentario</p>
            <div class="comment-meta">
              <span><a href="#">Borrar</a></span>
              <span><a href="#">Reportar</a></span>
              <span><a href="#">Ocultar</a></span>
              <span>
                        <a class="" role="button" data-toggle="collapse" href="#replyCommentT" aria-expanded="false" aria-controls="collapseExample">Responder</a>
                      </span>
              <div class="collapse" id="replyCommentT">
                <form>
                  <div class="form-group">
                    <label for="comment">Tu comentario</label>
                    <textarea name="comment" class="form-control" rows="3"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
              </div>
            </div>
            <!-- comment-meta -->

            <div class="media">
              <!-- answer to the first comment -->

              <div class="media-heading">
                <button class="btn btn-default btn-collapse btn-xs" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseExample"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button> <span class="label label-info">12314</span> Enviado hace 5 horas
              </div>

              <div class="panel-collapse collapse in" id="collapseTwo">

                <div class="media-left">
                  <div class="vote-wrap">
                    <div class="save-post">
                      <a href="#"><span class="glyphicon glyphicon-star" aria-label="Save"></span></a>
                    </div>
                    <div class="vote up">
                      <i class="glyphicon glyphicon-menu-up"></i>
                    </div>
                    <div class="vote inactive">
                      <i class="glyphicon glyphicon-menu-down"></i>
                    </div>
                  </div>
                  <!-- vote-wrap -->
                </div>
                <!-- media-left -->


                <div class="media-body">
                  <p>Te responde a tu comentario.</p>
                  <div class="comment-meta">
                    <span><a href="#">Borrar</a></span>
                    <span><a href="#">Reportar</a></span>
                    <span><a href="#">Ocultar</a></span>
                            <span>
                              <a class="" role="button" data-toggle="collapse" href="#replyCommentThree" aria-expanded="false" aria-controls="collapseExample">Responder</a>
                            </span>
                    <div class="collapse" id="replyCommentThree">
                      <form>
                        <div class="form-group">
                          <label for="comment">Tu comentario</label>
                          <textarea name="comment" class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                      </form>
                    </div>
                  </div>
                  <!-- comment-meta -->
                </div>
              </div>
              <!-- comments -->

            </div>
            <!-- answer to the first comment -->

          </div>
        </div>
        <!-- comments -->

      </div>

     
    </div> <!-- row -->

  </div>   <!-- post-comments -->


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

                                                

                                        @endforeach



                                @endif
                                   
                                        
                                </ul>				
                                                                                    
                            </div>
                

                   
                </div>

                
           
        </div>
    </footer><!--/#footer-->



@endsection