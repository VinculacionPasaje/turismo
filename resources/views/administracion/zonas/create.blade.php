@extends('layouts.admin')
@section('title')
    <section class="content-header">
        <h1>Zonas<small>Agregar</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active">Zonas</li>
            <li class="active">Agregar</li>
        </ol>
    </section>
@endsection
@section('contenido')
    @if (session('mensaje-registro'))
        @include('mensajes.msj_correcto')
    @endif
    @if(!$errors->isEmpty())
        <div class="alert alert-danger">
            <p><strong>Error!! </strong>Corrija los siguientes errores</p>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Nueva Zona</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            {!! Form::open(['route' => 'zonas.store','method'=>'POST']) !!}
                <input type="hidden" name="ruta" id ="ruta" value="{{url('')}}">
                        <div class="form-group">
                            {!! Form::label('Zona') !!}
                            {!! Form::text('zona',null,['placeholder'=>'Ingrese la zona','class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('descripción') !!}
                            {!! Form::text('descripcion',null,['placeholder'=>'Descripcion','class'=>'form-control']) !!}
                        </div>
                        {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('script')
    <script src="{{url('administration/dist/js/zonas/java-zona.js')}}"></script>
   
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $(".aprobado").fadeOut(300);
            },3000);
        });
    </script>
@endsection