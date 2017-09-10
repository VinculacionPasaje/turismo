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
                        <h3 class="box-title">Comentarios</h3>

                    </div>
                    
                     <div class= "col-xs-6 col-md-6">

                            <div class="box-tools">
                                {!! Form::open(['route'=>'comentariosTuristicos.index', 'method'=> 'GET', 'class'=>'navbar-form navbar-left pull-right', 'role'=>'search']) !!}
                                <div class="input-group input-group-sm" style="width: 350px;">
                                
                                    {!!Form::text('table_search', null, ['class'=>'form-control pull-right', 'placeholder'=>'Búscar por Nombre']) !!}

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>

                                     <div class="input-group-btn">
                                    <a href="{{route('comentariosTuristicos.index')}}" class="btn btn-primary btn-sm" role="button">Mostrar Todos</a>
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
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Comentario</th>
                                    <th>Fecha</th>
                                     <th>Hora</th>
                                    <th>Aprovado</th>
                                    <th>Acción</th>
                                </tr>
                                @foreach($busqueda as $noticia)
                                 @if($noticia->estado !=0)
                                    <tr data-id="{{$noticia->id}}">
                                       
                                     <td>{{$noticia->nombre}}</td>
                                     
                                        <td>{{$noticia->email}}</td>
                                        <td>{{$noticia->comentario}}</td>
                                        <td>{{$noticia->fecha}}</td>
                                         <td>{{$noticia->hora}}</td>

                                         @if($noticia->aprovado == 0)

                                         <td>No</td>

                                         @else
                                         <td>Si</td>


                                         @endif
                                          
                                       
                                        <td>
                                            {!!link_to_route('comentariosTuristicos.edit', $title = 'Editar', $parameters = $noticia->id, $attributes = ['class'=>'btn  btn-primary btn-sm'])!!}
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

    {!! Form::open(['route' => ['comentariosTuristicos.destroy', ':USER_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}
    {!! Form::close() !!}
@endsection
@section('script')
    <script src="{{url('administration/dist/js/alimentacion/java-alimentacion.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $(".aprobado").fadeOut(300);
            },3000);
        });
    </script>
@endsection