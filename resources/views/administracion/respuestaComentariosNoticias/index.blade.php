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
                        <h3 class="box-title">Respuesta de Comentarios Registrados</h3>

                    </div>
                    
                  
                </div>
                <!-- /.box-header -->
                @if(count($respuestas) >0)

                   

                  <div class="ajax-tabla">
                        <div class="box-body table-responsive no-padding" >
                            <table class="table table-hover" >
                                <tr>
                                    <th>Comentario</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Likes</th>
                                    <th>Respuesta</th>
                                    <th>Acción</th>
                                </tr>
                                @foreach($respuestas as $resp)
                                 @if($resp->estado !=0)
                                    <tr data-id="{{$resp->id}}">
                                        <td>
                                            {{$resp->comentarios->comentario}}
                                        </td>
                                        <td>{{$resp->fecha}}</td>
                                        <td>{{$resp->hora}}</td>
                                        <td>{{$resp->contador_like}}</td>
                                        <td>{{$resp->comentario}}</td>
                                       
                                        <td>
                                            {!!link_to_route('respuestaComentariosNoticias.edit', $title = 'Editar', $parameters = $resp->id, $attributes = ['class'=>'btn  btn-primary btn-sm'])!!}
                                            <button type="button" class="btn btn-danger btn-sm btn-delete"  ><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp;Eliminar</button>
                                        </td>

                                    </tr>
                                    @endif
                                @endforeach
                            </table>
                            {{$respuestas->links()}}
                        </div>
                    </div>
                        

               
                @else
                    <br/><div class='rechazado'><label style='color:#FA206A'>...No se ha encontrado ninguna respuesta de comentario...</label>  </div>
                @endif
          
            </div>
            <!-- /.box -->
        </div>
    </div>

    {!! Form::open(['route' => ['respuestaComentariosNoticias.destroy', ':USER_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}
    {!! Form::close() !!}
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