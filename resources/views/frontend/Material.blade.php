@extends('layouts.base')
@section('title')
<title>Materiales Turisticos</title>

@endsection

@section('header')

<div class='oculto'>

<img src="{{url('frontend/images/material.jpg')}}" alt="">


<p class="sliderTitle2"> Material Turístico </p>





@endsection

@section('contenido')

@foreach($material as $item)

{!! $item->contenido !!}


@endforeach

@endsection