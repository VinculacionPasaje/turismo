@extends('layouts.base')
@section('title')
<title>Que Traer</title>

@endsection

@section('header')

<div class='oculto'>

<img src="{{url('frontend/images/imagen.jpg')}}" alt="">


<p class="sliderTitle"> ¿Qué traer? </p>





@endsection

@section('contenido')



@foreach($traer as $item)

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
                    <p >Gobierno Autónomo Descentralizado Municipal del Cantón Pasaje <br>
                        {{$item->direccion}} | Telf. {{$item->telefono}} | Fax. {{$item->fax}} | Web: {{$item->web}} | Email: {{$item->email}}
                        <br>® Todos los Derechos Reservados | Pasaje, El Oro, Ecuador {{$item->anio}}
                        
                        </p> 
                @endforeach

                         <div class="caja-redes">

                           @foreach($redes as $red)

                                @if($red->id==1)

                                <a href="{{$red->url}}" class="icon-button facebook"><i class="fa fa-facebook"></i><span></span></a>
                                @endif

                                @if($red->id==2)

                                <a href="{{$red->url}}" class="icon-button twitter"><i class="fa fa-twitter"></i><span></span></a>
                                @endif


                                @if($red->id==3)

                                 <a href="{{$red->url}}" class="icon-button linkedin"><i class="fa fa-instagram"></i><span></span></a>

                                @endif

                                @if($red->id==4)
                                   <a href="{{$red->url}}" class="icon-button pinterest"><i class="fa fa-youtube"></i><span></span></a>
                                @endif

                                

                    @endforeach 
                           
                            
                   
                    
                  
                  
                    
                    </div>
                

                   
                </div>

                
           
        </div>
    </footer><!--/#footer-->



@endsection