@extends('layouts.admin')
@section('title')
    <section class="content-header">
        <h1>
            Inicio
            <small>Listar</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Inicio</li>
        </ol>
    </section>
@endsection

@section('contenido')
    @if (session('mensaje-registro'))
        @include('mensajes.msj_correcto')
    @endif
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class= "col-xs-6 col-md-6" aling="center">
                        <h3 class="box-title">Preguntas Registradas</h3>

                    </div>
                    
                     
                </div>

                <!-- /.box-header -->
                @if(count($preguntas) >0)
                
                    <div class="ajax-tabla">
                        <div class="box-body table-responsive no-padding" >
                            <table id="example2" class="table table-hover" >
                            <thead>
                                <tr>
                                    
                                    <th>Preguntas</th>
                                    <th>Respuestas</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($preguntas as $preguntita)
                                 @if($preguntita->estado !=0)
                                    <tr data-id="{{$preguntita->id}}">
                                       
                                        <td>{{$preguntita->pregunta}}</td>
                                        <td>{{$preguntita->respuesta}}</td>
                                       
                                        
                                        <td>
                                            {!!link_to_route('preguntas.edit', $title = 'Editar', $parameters = $preguntita->id, $attributes = ['class'=>'btn  btn-primary btn-sm'])!!}
                                            <button type="button" class="btn btn-danger btn-sm btn-delete"  ><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp;Eliminar</button>
                                        </td>

                                    </tr>
                                    @endif
                                @endforeach
                            </tbody>
                            </table>
                            {{$preguntas->links()}}
                        </div>
                    </div>
                     
                @else
                    <br/><div class='rechazado'><label style='color:#FA206A'>...No se ha encontrado ninguna pregunta...</label>  </div>
                @endif
            </div>
            <!-- /.box -->
        </div>
    </div>

    {!! Form::open(['route' => ['preguntas.destroy', ':USER_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}
    {!! Form::close() !!}
@endsection
@section('script')
    <script src="{{url('administration/dist/js/preguntas/java-preguntas.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $(".aprobado").fadeOut(300);
            },3000);
        });
    </script>
@endsection