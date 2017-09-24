@extends('layouts.admin')
@section('title')
    <section class="content-header">
        <h1>Guia Turística Fotos<small>Editar</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active">Guia Turística Fotos</li>
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
            <h3 class="box-title">Editar Guia Turística Fotos</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            {{Form::model($foto, ['route' => ['guiaFotos.update',$foto->id],'method'=>'PUT','files' => true ])}}
            <div id="msj-success" class="alert alert-success alert-dismissible aprobado" role="alert" style="display:none">
                <strong> Contenido Editado Correctamente.</strong>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <input type="hidden" name="ruta" id ="ruta" value="{{url('')}}">
            
           


            <div class="row" ><!--Inicio de row -->
              <div class="col-md-6 col-xs-12">
                       <div class="form-group">
                            <label for="telefono">Orden de la Imagen</label>
                            <input type="text" class="form-control" id="orden" name="orden" placeholder="Telefono" onkeypress="return soloNumeros(event)" maxlength="20" value="{{$foto->telefono }}">
                        </div>
                </div>
                 <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            {!!Form::label('Foto','Foto:')!!}
                            {!!Form::file('path',['class'=>'form-control'])!!}
                        </div>
                </div>

            </div>

            

            


                <div class="col-md-4 col-xs-12">
                        
                     {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
                </div>
           

            
            
            {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('script')
    <script src="{{url('administration/dist/js/hospedaje/java-hospedaje.js')}}"></script>
     <script src="{{url('administration/dist/js/tinymce/js/tinymce/tinymce.min.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $(".aprobado").fadeOut(300);
            },3000);
        });
    </script>
    
  

@endsection