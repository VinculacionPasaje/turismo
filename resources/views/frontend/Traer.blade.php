@extends('layouts.base')
@section('title')
<title>Que Traer</title>

@endsection

@section('header')

<div class='oculto'>

<img src="{{url('frontend/images/imagen.jpg')}}" alt="">


<p class="sliderTitle"> ¿Qué traer? </p>

<div class="rulo_slider" style="background: url({{url('frontend/images/Rulos.png')}})";></div>


</div>



@endsection

@section('contenido')



@foreach($traer as $item)

{!! $item->contenido !!}


@endforeach

@endsection