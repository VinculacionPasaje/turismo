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
                        <h3 class="box-title">Contenido Registrado</h3>

                    </div>
                    
                    
                </div>
                <!-- /.box-header -->
                @if(count($actividades) >0)

                  

                  <div class="ajax-tabla">
                        <div class="box-body table-responsive no-padding" >
                            <table id="example2" class="table table-hover" >
                            <thead>
                                <tr>
                                    <th>Foto</th>
                                    <th>Titulo</th>
                                    <th>Descripcion</th>
                                    <th>Fecha</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($actividades as $noticia)
                                 @if($noticia->estado !=0)
                                    <tr data-id="{{$noticia->id}}">
                                        <td>
                                            <img src="{{url('fotos/'.$noticia->path)}}" alt="" style="width:70px;"/>
                                        </td>
                                        <td width="130px">{{$noticia->titulo}}</td>
                                        <td width="500px">{{$noticia->descripcion}}</td>
                                        <td>{{$noticia->fecha_post}}</td>
                                       
                                        <td>
                                            {!!link_to_route('turistico.edit', $title = 'Editar', $parameters = $noticia->id, $attributes = ['class'=>'btn  btn-primary btn-sm'])!!}
                                            <button type="button" class="btn btn-danger btn-sm btn-delete"  ><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp;Eliminar</button>
                                        </td>

                                    </tr>
                                    @endif
                                @endforeach
                            </tbody>
                            </table>
                            {{$actividades->links()}}
                        </div>
                    </div>
                        

               
                @else
                    <br/><div class='rechazado'><label style='color:#FA206A'>...No se ha encontrado ningún contenido...</label>  </div>
                @endif
          
            </div>
            <!-- /.box -->
        </div>
    </div>

    {!! Form::open(['route' => ['turistico.destroy', ':USER_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}
    {!! Form::close() !!}
@endsection
@section('script')
    <script src="{{url('administration/dist/js/turistico/java-turistico.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $(".aprobado").fadeOut(300);
            },3000);
        });
    </script>
@endsection