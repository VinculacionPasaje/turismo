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
                    <h3 class="box-title">Contenido Registrados</h3>

                    <div class="box-tools">
                        {!! Form::open(['route'=>'llegar.index', 'method'=> 'GET', 'class'=>'navbar-form navbar-left pull-right', 'role'=>'search']) !!}
                        <div class="input-group input-group-sm" style="width: 200px;">
                            {!!Form::text('table_search', null, ['class'=>'form-control pull-right', 'placeholder'=>'Buscar por título']) !!}

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
                <!-- /.box-header -->

                  @if(count($llegar) >0)
                        @if(count($busqueda) >0) <!-- este if es para la busqueda -->

                 

                  <div class="ajax-tabla">
                        <div class="box-body table-responsive no-padding" >
                            <table class="table table-hover" >
                                <tr>
                                    <th>Titulo</th>
                                    <th>Contenido</th>
                                    <th>Acción</th>
                                </tr>
                                @foreach($busqueda as $item)
                                 @if($item->estado !=0)
                                    <tr data-id="{{$item->id}}">
                                        
                                        <td WIDTH="100">{{$item->titulo}}</td>
                                        <td>{!! $item->contenido !!}</td>
                                       
                                       
                                        <td WIDTH="200">
                                            {!!link_to_route('llegar.edit', $title = 'Editar', $parameters = $item->id, $attributes = ['class'=>'btn  btn-primary btn-sm'])!!}
                                            <button type="button" class="btn btn-danger btn-sm btn-delete"  ><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp;Eliminar</button>
                                        </td>

                                    </tr>
                                    @endif
                                @endforeach
                            </table>
                            {{$llegar->links()}}
                        </div>
                    </div>

                     @endif

              
              
    
                @else
                    <br/><div class='rechazado'><label style='color:#FA206A'>...No se ha encontrado ningún contenido...</label>  </div>
                @endif
               
            </div>
            <!-- /.box -->
        </div>
    </div>

    {!! Form::open(['route' => ['llegar.destroy', ':USER_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}
    {!! Form::close() !!}
@endsection
@section('script')
    <script src="{{url('administration/dist/js/llegar/java-llegar.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $(".aprobado").fadeOut(300);
            },3000);
        });
    </script>
@endsection