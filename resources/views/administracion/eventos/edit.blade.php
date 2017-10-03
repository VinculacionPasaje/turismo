@extends('layouts.admin')
@section('title')
    <section class="content-header">
        <h1>Eventos<small>Editar</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active">Eventos</li>
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
            <h3 class="box-title">Editar Evento</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            {{Form::model($evento, ['route' => ['eventos.update',$evento->id],'method'=>'PUT','files' => true ])}}
            <div id="msj-success" class="alert alert-success alert-dismissible aprobado" role="alert" style="display:none">
                <strong> Contenido Editado Correctamente.</strong>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <input type="hidden" name="ruta" id ="ruta" value="{{url('')}}">

       <div class="row" ><!--Inicio de row -->
                <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            {!! Form::label('Evento') !!}
                            {!! Form::text('titulo',null,['placeholder'=>'Escriba el evento','class'=>'form-control']) !!}
                        </div>
                </div>

                 <div class="col-md-4 col-xs-12">
                            <div class="bootstrap-timepicker">
                                <div class="form-group">
                                {!! Form::label('Hora de Inicio') !!}

                                <div class="input-group">
                                    <input type="text" class="form-control timepicker" name ="hora_inicio" value="{{$evento->hora_inicio}}">

                                    <div class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                    </div>
                                </div>
                                <!-- /.input group -->
                                </div>
                            <!-- /.form group -->
                        </div>
                </div>
        </div>

        <div class="row" ><!--Inicio de row -->
                 <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                                {!! Form::label('Descripción corta del Evento') !!}
                                {!! Form::text('descripcion',null,['placeholder'=>'Descripcion','class'=>'form-control']) !!}
                            </div>
                        </div>
                <div class="col-md-6 col-xs-12">
                      <div class="form-group">
                                {!! Form::label('Dirección del Evento') !!}
                                {!! Form::text('direccion',null,['placeholder'=>'Dirección','class'=>'form-control']) !!}
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
                            {!! Form::label('Precio Evento') !!}
                            {!! Form::number('precio',null,['placeholder'=>'Precio Evento','class'=>'form-control' ,'step' => 'any']) !!}
                        </div>
                     </div>

             
               

            </div>

            <div class="row" ><!--Inicio de row -->
                

                <div class="col-md-6 col-xs-12">
                         <div class="form-group">
                           {!! Form::label('Fecha Desde') !!}
                            <div class="input-group">
                            <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask id="datepicker" name = "fecha_desde" value="{{$evento->fecha_desde}}">
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-xs-12">
                         <div class="form-group">
                           {!! Form::label('Fecha Hasta') !!}
                            <div class="input-group">
                            <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask id="datepicker2" name = "fecha_hasta" value="{{$evento->fecha_hasta}}">
                        </div>
                    </div>
                </div>

            </div>


            <div class="row" ><!--Inicio de row -->
                 <div class="col-md-4 col-xs-12">
                        <label>Seleccione la categoria del evento</label>
                    
                  
                        <select class="form-control" name="categoria_id" id="categorias" style="width: 100%;" >
                            <option value="" disabled selected>Seleccione uno</option>

                                @foreach($categorias as $categoria)
                                        @if($categoria->id == $evento->categoria_evento->id)
                                            <option value="{{$categoria->id}}" selected>  {{ $categoria->categoria }} </option>
                                        @else
                                            <option value="{{$categoria->id}}">  {{ $categoria->categoria }} </option>
                                        @endif
                                    @endforeach
                        </select>
                </div>

                 <div class="col-md-4 col-xs-12">

                 <label>Seleccione la Ubicación</label>
                    
                  
                    <select class="form-control" name="parroquias_id" id="parroquias" style="width: 100%;" >
                         <option value="" disabled selected>Seleccione la Parroquia</option>

                            @foreach($parroquias as $parroquia)
                                    @if($parroquia->id == $evento->parroquias->id)
                                        <option value="{{$parroquia->id}}" selected>  {{ $parroquia->parroquia }} </option>
                                    @else
                                        <option value="{{$parroquia->id}}">  {{ $parroquia->parroquia }} </option>
                                    @endif
                                @endforeach
                    </select>



                </div>

                

                <div class="col-md-4 col-xs-12">
                        
                     {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
                </div>

            </div>

            <div class="form-group">
                    {!! Form::label('Script') !!}
                    {!! Form::text('script',null,['placeholder'=>'ingrese el script de google map','class'=>'form-control']) !!}
                </div>

            <div class="form-group">
                    {!! Form::label('Contenido') !!}
                                   
                    {!! Form::textarea('contenido',null,['class'=>'form-control', 'rows' => 50]) !!}
                   
                </div>        

           

            
            
            {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('script')
    <script src="{{url('administration/dist/js/alimentacion/java-alimentacion.js')}}"></script>
    <script src="{{url('administration/dist/js/validaNumerosLetras.js')}}"></script>
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

                                 //Money Euro
                    $("[data-mask]").inputmask();

                    //Timepicker
                    $(".timepicker").timepicker({
                    showInputs: false,
                        showMeridian:false
                    });
                    
            });


    </script>

    <script>
  var editor_config = {
    path_absolute : "{{ URL::to('/') }}/",
    selector: "textarea",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | forecolor backcolor | sizeselect | fontselect |  fontsizeselect",
    fontsize_formats: '8pt 10pt 12pt 14pt 18pt 24pt 36pt',
    font_formats: "Andale Mono=andale mono,times;"+
        "Arial=arial,helvetica,sans-serif;"+
        "Arial Black=arial black,avant garde;"+
        "Book Antiqua=book antiqua,palatino;"+
        "Comic Sans MS=comic sans ms,sans-serif;"+
        "Courier New=courier new,courier;"+
        "Georgia=georgia,palatino;"+
        "Helvetica=helvetica;"+
        "Impact=impact,chicago;"+
        "Symbol=symbol;"+
        "Tahoma=tahoma,arial,helvetica,sans-serif;"+
        "Terminal=terminal,monaco;"+
        "Times New Roman=times new roman,times;"+
        "Trebuchet MS=trebuchet ms,geneva;"+
        "Verdana=verdana,geneva;"+
        "Webdings=webdings;"+
        "Wingdings=wingdings,zapf dingbats",
    image_dimensions: false,
    image_class_list: [
            {title: 'Responsive', value: 'img-responsive3'}
        ],
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>

@endsection