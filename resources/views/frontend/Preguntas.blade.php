
@extends('layouts.base')
@section('title')
<title>Preguntas Frecuentes</title>

@endsection

@section('header')

<div class='oculto'>

<img src="{{url('frontend/images/faq.jpg')}}" alt="">


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