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
            {{Form::model($todos, ['route' => ['todos.update',$todos->id],'method'=>'PUT','files' => true ])}}

             <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <input type="hidden" name="ruta" id ="ruta" value="{{url('')}}">

           <div class="row" ><!--Inicio de row -->
                  <div class="col-md-12 col-xs-12">
                        <div class="form-group">
                            {!! Form::label('Titulo Actividades') !!}
                            {!! Form::text('titulo_actividades',null,['placeholder'=>'Titulo','class'=>'form-control']) !!}
                        </div>
                </div>
                

            </div>
            
            <div class="row" ><!--Inicio de row -->
                              
                                <div class="col-md-12 col-xs-12">
                                         <div class="form-group">
                                        {!! Form::label('Contenido Actividades') !!}
                                                    
                                        {!! Form::textarea('contenido_actividades',null,['class'=>'form-control', 'rows' => 30]) !!}
                                
                                        </div>
                                </div>

                               

                </div>


            <div class="row" ><!--Inicio de row -->
                   <div class="col-md-12 col-xs-12">
                        <div class="form-group">
                            {!! Form::label('Titulo Atractivos Turísticos') !!}
                            {!! Form::text('titulo_atractivos',null,['placeholder'=>'Titulo','class'=>'form-control']) !!}
                        </div>
                </div>
                

            </div>
            
            <div class="row" ><!--Inicio de row -->
                              
                                 <div class="col-md-12 col-xs-12">
                                         <div class="form-group">
                                        {!! Form::label('Contenido Atractivos Turisticos') !!}
                                                    
                                        {!! Form::textarea('contenido_atractivos',null,['class'=>'form-control', 'rows' => 30]) !!}
                                
                                        </div>
                                </div>

                               

                </div>
        

         <div class="row" ><!--Inicio de row -->
                 <div class="col-md-12 col-xs-12">
                        <div class="form-group">
                            {!! Form::label('Titulo Alimentacion') !!}
                            {!! Form::text('titulo_alimentacion',null,['placeholder'=>'Titulo','class'=>'form-control']) !!}
                        </div>
                </div>
                

            </div>
            
            <div class="row" ><!--Inicio de row -->
                              
                                <div class="col-md-12 col-xs-12">
                                         <div class="form-group">
                                        {!! Form::label('Contenido Alimentacion') !!}
                                                    
                                        {!! Form::textarea('contenido_alimentacion',null,['class'=>'form-control', 'rows' => 30]) !!}
                                
                                        </div>
                                </div>

                               

                </div>



                 <div class="row" ><!--Inicio de row -->
                 <div class="col-md-12 col-xs-12">
                        <div class="form-group">
                            {!! Form::label('Titulo Diversion') !!}
                            {!! Form::text('titulo_diversion',null,['placeholder'=>'Titulo','class'=>'form-control']) !!}
                        </div>
                </div>
                

            </div>
            
            <div class="row" ><!--Inicio de row -->
                              
                                <div class="col-md-12 col-xs-12">
                                         <div class="form-group">
                                        {!! Form::label('Contenido Diversion') !!}
                                                    
                                        {!! Form::textarea('contenido_diversion',null,['class'=>'form-control', 'rows' => 30]) !!}
                                
                                        </div>
                                </div>

                               

                </div>



                 <div class="row" ><!--Inicio de row -->
                  <div class="col-md-12 col-xs-12">
                        <div class="form-group">
                            {!! Form::label('Titulo Hospedajes') !!}
                            {!! Form::text('titulo_hospedajes',null,['placeholder'=>'Titulo','class'=>'form-control']) !!}
                        </div>
                </div>
                

            </div>
            
            <div class="row" ><!--Inicio de row -->
                              
                                  <div class="col-md-12 col-xs-12">
                                         <div class="form-group">
                                        {!! Form::label('Contenido Hospedajes') !!}
                                                    
                                        {!! Form::textarea('contenido_hospedajes',null,['class'=>'form-control', 'rows' => 30]) !!}
                                
                                        </div>
                                </div>

                               

                </div>



                 <div class="row" ><!--Inicio de row -->
                   <div class="col-md-12 col-xs-12">
                        <div class="form-group">
                            {!! Form::label('Titulo Gastronomía') !!}
                            {!! Form::text('titulo_gastronomia',null,['placeholder'=>'Titulo','class'=>'form-control']) !!}
                        </div>
                </div>
                

            </div>
            
            <div class="row" ><!--Inicio de row -->
                              
                                  <div class="col-md-12 col-xs-12">
                                         <div class="form-group">
                                        {!! Form::label('Contenido Gastronomía') !!}
                                                    
                                        {!! Form::textarea('contenido_gastronomia',null,['class'=>'form-control', 'rows' => 30]) !!}
                                
                                        </div>
                                </div>

                               

                </div>

               

                     <div class="col-md-12 col-xs-12">
                                        <div class="form-group">
                                             {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
                                        </div>
                                </div>

               

           
               
                {!! Form::close() !!}
        </div>

    </div>
@endsection
@section('script')
   
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