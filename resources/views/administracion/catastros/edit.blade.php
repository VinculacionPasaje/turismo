@extends('layouts.admin')
@section('title')
    <section class="content-header">
        <h1>Catastros<small>Editar</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active">Catastros</li>
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
            <h3 class="box-title">Editar Catastro</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            {{Form::model($catastro, ['route' => ['catastros.update',$catastro->id],'method'=>'PUT','files' => true ])}}
            <div id="msj-success" class="alert alert-success alert-dismissible aprobado" role="alert" style="display:none">
                <strong> Catastro Editado Correctamente.</strong>
            </div>
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
                            {!! Form::label('Fecha Subida') !!}
                            <div class="input-group">
                            <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker" name = "fecha_post" value="{{$catastro->fecha_post}}">
                        </div>
                    </div>
                </div>

                </div>



                <div class="row" ><!--Inicio de row -->
                                <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            {!!Form::label('Foto','Foto:')!!}
                                            {!!Form::file('path',['class'=>'form-control'])!!}
                                        </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            {!!Form::label('PDF','PDF:')!!}
                                            <input type="file" name="pdf" id="pdf" accept="application/pdf" />
                                        </div>
                                </div>

                </div>

                <div class="row" ><!--Inicio de row -->
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group">
                                            {!! Form::label('Descripción') !!}
                                            {!! Form::text('descripcion',null,['placeholder'=>'Descripcion','class'=>'form-control']) !!}
                                        </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                        
                                    {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
                                </div>

                </div>
   

           

            
            
            {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('script')
    <script src="{{url('administration/dist/js/noticias/java-noticias.js')}}"></script>
     <script src="{{url('administration/dist/js/tinymce/js/tinymce/tinymce.min.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $(".aprobado").fadeOut(300);
            },3000);
        });
    </script>
    
    <script>

            $(function() {
                $.fn.datepicker.dates['en'] = {
                    days: [ "Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado" ],
                    daysShort: ["Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
                    daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
                    months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
                        "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                    monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun",
                        "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
                    today: "Hoy",
                    clear: "Clear",
                    titleFormat: "MM yyyy", /* Leverages same syntax as 'format' */
                    weekStart: 0
                };
                $("#datepicker").datepicker({
                    format: 'yyyy/mm/dd',
                    language:'en'
                })
                $("#datepicker2").datepicker({
                    format: 'yyyy/mm/dd',
                    language:'en'
                })
            });


    </script>



@endsection