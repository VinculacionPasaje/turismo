@extends('layouts.admin')
@section('title')
    <section class="content-header">
        <h1>Contenido<small>Actualizar</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active">Contenido</li>
            <li class="active">Actualizar</li>
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
            <h3 class="box-title">Edición de Contenido</h3>
        </div><!-- /.box-header -->

        <div id="notificacion_resul_fanu"></div>
        <div class="box-body">
            {{Form::model($guia, ['route' => ['guiaEventos.update',$guia->id],'method'=>'PUT','files' => true ])}}

             <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <input type="hidden" name="ruta" id ="ruta" value="{{url('')}}">

           <div class="row" ><!--Inicio de row -->
                 <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            {!! Form::label('Titulo') !!}
                            {!! Form::text('titulo',null,['placeholder'=>'Nombre','class'=>'form-control']) !!}
                        </div>
                </div>
                 <div class="col-md-6 col-xs-12">

                    <div class="form-group">
                        {!! Form::label('Descripción de la guía Turística') !!}
                        {!! Form::text('descripcion',null,['placeholder'=>'Descripcion','class'=>'form-control']) !!}
                    </div>
                         
                </div>

             </div>
            
            <div class="row" ><!--Inicio de row -->
                              
                                <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            {!!Form::label('PDF','PDF:')!!}
                                            <input type="file" name="pdf" id="pdf" accept="application/pdf" />
                                        </div>
                                </div>

                                  <div class="col-md-6 col-xs-12">
                                      <div class="form-group">
                                            {!!Form::label('Foto','Foto:')!!}
                                            {!!Form::file('path',['class'=>'form-control'])!!}
                                        </div>
                                </div>

                </div>

                <div class="form-group">
                    {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
                 </div>
               

                

         

           
               
                {!! Form::close() !!}
        </div>

    </div>
@endsection
@section('script')
   
    <script src="{{url('administration/dist/js/validaNumerosLetras.js')}}"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $(".aprobado").fadeOut(300);
            },3000);
        });
    </script>

    

@endsection