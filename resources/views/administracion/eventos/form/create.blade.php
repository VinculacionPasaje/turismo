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
                                    <input type="text" class="form-control timepicker" name ="hora_inicio">

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
                            {!! Form::label('Desde') !!}
                            <div class="input-group">
                            <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker" name = "fecha_desde" value="{{old('fecha_desde')}}">
                        </div>
                    </div>
                </div>

                   <div class="col-md-6 col-xs-12">
                         <div class="form-group">
                            {!! Form::label('Hasta') !!}
                            <div class="input-group">
                            <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker2" name = "fecha_hasta" value="{{old('fecha_hasta')}}">
                        </div>
                    </div>
                </div>
               

</div>


<div class="row" ><!--Inicio de row -->
                

                 <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label>Seleccione la categoria</label>
                            <select class="form-control select2" name="categoria_id" id="categorias" style="width: 100%;" >
                                <option value="" disabled selected>Seleccione alguna</option>
                                @foreach($categorias as $categoria)
                                   @if (old('categoria_id') == $categoria->id)
                                        <option value="{{$categoria->id}}" selected>{{ $categoria->categoria }}</option>
                                    @else
                                        <option value="{{$categoria->id}}">{{ $categoria->categoria }}</option>
                                    @endif             
                                @endforeach
                                 
                            </select>
                        </div>
                </div>

                  <div class="col-md-4 col-xs-12">
                        
                    <div class="form-group">
                            <label>Seleccione la Ubicación</label>
                            <select class="form-control select2" name="parroquias_id" id="parroquias" style="width: 100%;" >
                                <option value="" disabled selected>Seleccione la Parroquia</option>
                                @foreach($parroquias as $parroquia)
                                   @if (old('parroquias_id') == $parroquia->id)
                                        <option value="{{$parroquia->id}}" selected>{{ $parroquia->parroquia }}</option>
                                    @else
                                        <option value="{{$parroquia->id}}">{{ $parroquia->parroquia }}</option>
                                    @endif             
                                @endforeach
                                 
                            </select>
                        </div>
                </div>

                <div class="col-md-4 col-xs-12">
                        
                     {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
                </div>

</div>

<div class="form-group">
    {!! Form::label('Script de Google Maps (Ubicación del Evento))') !!}
    {!! Form::text('script',null,['placeholder'=>'ingrese el script de google map','class'=>'form-control']) !!}
</div>








  <div class="form-group">
                {!! Form::label('Contenido') !!}
                
                                                
                {!! Form::textarea('contenido',null,['class'=>'form-control', 'rows' => 50]) !!}
                                
</div>