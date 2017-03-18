@extends('layouts.base')
@section('title')
<title>Que Traer</title>

@endsection

@section('contenido')

@foreach($traer as $item)

{!! $item->contenido !!}


@endforeach

@endsection