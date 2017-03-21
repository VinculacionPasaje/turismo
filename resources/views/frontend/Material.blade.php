@extends('layouts.base')
@section('title')
<title>Materiales Turisticos</title>

@endsection

@section('contenido')

@foreach($material as $item)

{!! $item->contenido !!}


@endforeach

@endsection