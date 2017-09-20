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
                    <h3 class="box-title">Contenido Registrado</h3>

                   
                </div>
                <!-- /.box-header -->
                @if(count($guia) >0)
                    <div class="ajax-tabla">
                        <div class="box-body table-responsive no-padding" >
                            <table id="example2" class="table table-hover" >
                            <thead>
                                <tr>
                                    <th>Foto</th>
                                    <th>Titulo</th>
                                    <th>Descripción</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($guia as $item)
                                    <tr data-id="{{$item->id}}">
                                        <td>
                                            <img src="{{url('fotos/'.$item->path)}}" alt="" style="width:70px;"/>
                                        </td>
                                        <td>{{$item->titulo}}</td>
                                    
                                        <td>{{$item->descripcion}}</td>
                                     
                                        <td>
                                            {!!link_to_route('guia.edit', $title = 'Editar', $parameters = $item->id, $attributes = ['class'=>'btn  btn-primary btn-sm'])!!}
                                            

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                            {{$guia->links()}}
                        </div>
                    </div>
                @else
                    <br/><div class='rechazado'><label style='color:#FA206A'>...No se ha encontrado ningun contenido...</label>  </div>
                @endif
            </div>
            <!-- /.box -->
        </div>
    </div>

    
    {!! Form::close() !!}
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