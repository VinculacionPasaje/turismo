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
                        <h3 class="box-title">Comentarios Registradas</h3>

                    </div>
                    
                     <div class= "col-xs-6 col-md-6">

                            <div class="box-tools">
                                {!! Form::open(['route'=>'comentariosNoticias.index', 'method'=> 'GET', 'class'=>'navbar-form navbar-left pull-right', 'role'=>'search']) !!}
                                <div class="input-group input-group-sm" style="width: 350px;">
                                
                                    {!!Form::text('table_search', null, ['class'=>'form-control pull-right', 'placeholder'=>'Búscar por usuario']) !!}

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>

                                     <div class="input-group-btn">
                                    <a href="{{route('comentariosNoticias.index')}}" class="btn btn-primary btn-sm" role="button">Mostrar Todos</a>
                                     </div>

                                    
                                    
                                </div>
                                

                                {!! Form::close() !!}
                                
                                    
                            
                                
                                </div>
                    </div>
                </div>
                <!-- /.box-header -->
                @if(count($comentarios) >0)

                   @if(count($busqueda) >0) <!-- este if es para la busqueda -->

                  <div class="ajax-tabla">
                        <div class="box-body table-responsive no-padding" >
                            <table class="table table-hover" >
                                <tr>
                                    <th>Comentario</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Likes</th>
                                    <th>Usuario</th>
                                    <th>Noticia</th>
                                    <th>Acción</th>
                                </tr>
                                @foreach($busqueda as $noticia)
                                 @if($noticia->estado !=0)
                                    <tr data-id="{{$noticia->id}}">
                                        <td>
                                            {{$noticia->comentario}}
                                        </td>
                                        <td>{{$noticia->fecha}}</td>
                                        <td>{{$noticia->hora}}</td>
                                        <td>{{$noticia->contador_like}}</td>
                                        <td>{{$noticia->usuario->name.' '.$noticia->usuario->apellido}}</td>
                                        <td>{{$noticia->noticias->titulo}}</td>
                                       
                                        <td>
                                            {!!link_to_route('comentariosNoticias.edit', $title = 'Editar', $parameters = $noticia->id, $attributes = ['class'=>'btn  btn-primary btn-sm'])!!}
                                            <button type="button" class="btn btn-danger btn-sm btn-delete"  ><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp;Eliminar</button>
                                        </td>

                                    </tr>
                                    @endif
                                @endforeach
                            </table>
                            {{$comentarios->links()}}
                        </div>
                    </div>
                          @endif

               
                @else
                    <br/><div class='rechazado'><label style='color:#FA206A'>...No se ha encontrado ningun comentario...</label>  </div>
                @endif
          
            </div>
            <!-- /.box -->
        </div>
    </div>

    {!! Form::open(['route' => ['comentariosNoticias.destroy', ':USER_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}
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