@extends('layouts.admin')
@section('title')
    <section class="content-header">
        <h1>Comentarios<small>Editar</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active">Coomentarios</li>
            <li class="active">Editar</li>
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
            <h3 class="box-title">Editar Comentario</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            {{Form::model($comentario, ['route' => ['comentariosNoticias.update',$comentario->id],'method'=>'PUT','files' => true ])}}
            <div id="msj-success" class="alert alert-success alert-dismissible aprobado" role="alert" style="display:none">
                <strong> Comentario Agregado Correctamente.</strong>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <input type="hidden" name="ruta" id ="ruta" value="{{url('')}}">

            <div class="form-group">
               
                {!! Form::label('Comentario') !!}                                                
                {!! Form::textarea('comentario',null,['class'=>'form-control', 'rows' => 5]) !!}
           
            </div>

            <div class="form-group">
                <label>Usuario</label>
                <select class="form-control select2" name="usuario_id" id="usuarios" style="width: 100%;" >
                        <option value="{{$comentario->usuario->id}}" >  {{ $comentario->usuario->name.' '.$comentario->usuario->apellido }}</option>
                </select>
            </div>

            <div class="form-group">
                <label>Evento</label>
                <select class="form-control select2" name="noticias_id" id="noticias" style="width: 100%;" >
                    <option value="{{$comentario->noticias->id}}" selected >  {{ $comentario->noticias->titulo }} </option>

                </select>
            </div>

            

            {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('script')
     <script src="{{url('administration/dist/js/comentarios/java-comentarios.js')}}"></script>



    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $(".aprobado").fadeOut(300);
            },3000);
        });
        
    </script>
@endsection