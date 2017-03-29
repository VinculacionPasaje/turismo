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