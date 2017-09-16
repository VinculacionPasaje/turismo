@extends('layouts.admin')
@section('title')
    <section class="content-header">
        <h1>Comentarios<small>Actualizar</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active">Comentarios</li>
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
            <h3 class="box-title">Edición de Comentarios de Actividades de Pasaje</h3>
        </div><!-- /.box-header -->

        <div id="notificacion_resul_fanu"></div>
        <div class="box-body">
            {{Form::model($comentarios, ['route' => ['comentariosActividades.update',$comentarios->id],'method'=>'PUT' ])}}
                <input type="hidden" name="ruta" id ="ruta" value="{{url('')}}">


                <div class="col-md-12 col-xs-12">
                        <div class="form-group">
                            {!! Form::label('Comentario: ') !!}

                            {!! Form::textarea('comentario',null,['class'=>'form-control', 'rows' => 5,'readonly' => 'true' ]) !!}
                           
                        </div>
                </div>

                 <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            {!! Form::label('¿Desea Aprobar o no Aprobar el siguiente comentario?') !!}
                           
                        </div>
                </div>

                <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                           
                            <input type="radio" name="aprovado" value="1"> Si<br>
                            <input type="radio" name="aprovado" value="0"> No<br>
                        </div>
                </div>

                 <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            {!!Form::label('enviar','¿Desea Enviar por Email la respuesta?:')!!}
                            {{ Form::checkbox('enviar', 1) }}
                        </div>
                </div>

                <div align="center" class="col-md-12 col-xs-12">
                      <div class="form-group">
                                {!! Form::label('Respuesta al comentario') !!}
                                
                            </div>
                  
                </div>


                <div class="col-md-12 col-xs-12">
                        <div class="form-group">
                            {!! Form::label('Nombre: ') !!}

                           {!! Form::text('nombre',null,['placeholder'=>'Asunto','class'=>'form-control', 'readonly' => 'true']) !!}
                           
                        </div>
                </div>


                 <div class="col-md-12 col-xs-12">
                        <div class="form-group">
                            {!! Form::label('Correo: ') !!}

                           {!! Form::text('email',null,['placeholder'=>'Asunto','class'=>'form-control', 'readonly' => 'true']) !!}
                           
                        </div>
                </div>



                 <div class="col-md-12 col-xs-12">
                      <div class="form-group">
                                {!! Form::label('Escriba la respuesta:') !!}
                                
                            </div>
                  
                </div>


                <div  class="col-md-12 col-xs-12">
                      <div class="form-group">
                               
                                 {!! Form::textarea('respuesta_comentario',null,['class'=>'form-control', 'rows' => 10]) !!}
                            </div>
                       
                </div>


                <div align="center" class="col-md-12 col-xs-12">
                
                {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}

                </div >
                {!! Form::close() !!}
        </div>

    </div>
@endsection
@section('script')
   

    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $(".aprobado").fadeOut(300);
            },3000);
        });
    </script>
@endsection