
@extends('layouts.base')
@section('title')
<title>Preguntas Frecuentes</title>

@endsection

@section('header')

<div class='oculto'>

<img class="oculto" src="{{url('frontend/images/faq.jpg')}}" alt="">

</div>
<p class="sliderTitle3"> Preguntas Frecuentes </p>





@endsection


@section('contenido')

<p> Preguntas Frecuentes </p>

@foreach($preguntas as $item)

<div class="content">
<div>
  <input type="checkbox" id="{{!! $item->id !!}}" name="q"  class="questions">
  <div class="plus">+</div>
  <label for="{{!! $item->id !!}}" class="question">
    {!! $item->pregunta !!}
  </label>
  <div class="answers">
   {!! $item->respuesta !!}
  </div>
</div>

</div> <!-- end of body !-->

{!! $item->contenido !!}


@endforeach

@endsection


@section('footer')

<div  class="col-xs-12 col-md-12 fondo1">   </div>
    <footer id="footer">
    
        <div class="container">

               <div class="col-xs-12 col-md-12 col-sm-12" style="padding-bottom: 10px; padding-top:15px;" align="center">
                   <img src="{{url('frontend/images/logo3.png')}}" alt="logo">
                

                   
                </div>

            
            
                <div class="col-xs-12 col-md-12 col-sm-12">
                 @foreach($footer as $item)
                      <p class="blanco" >Gobierno Autónomo Descentralizado Municipal del Cantón Pasaje <br>
                        {{$item->direccion}} | Telf. {{$item->telefono}} | Fax. {{$item->fax}} | Web: {{$item->web}} | Email: {{$item->email}}
                        <br>® Todos los Derechos Reservados | Pasaje, El Oro, Ecuador {{$item->anio}}
                        
                        </p> 
                @endforeach

                        <div class="redessocial2" align="center" >
                                <ul class="social-network social-circle">
                            

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

                                    
                                            
                                            
                                        
                                            
                                        
                                </ul>				
                                                                                    
                            </div>

                   
                </div>

                
           
        </div>
    </footer><!--/#footer-->


@endsection