<input type="hidden" name="ruta" id ="ruta" value="{{url('')}}">


   <div class="row" ><!--Inicio de row -->
                 <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            {!! Form::label('Parroquia') !!}
                            {!! Form::text('parroquia',null,['placeholder'=>'Parroquia','class'=>'form-control']) !!}
                        </div>
                </div>
                <div class="col-md-6 col-xs-12">
                         <div class="form-group">
                            {!! Form::label('Fecha Post') !!}
                            <div class="input-group">
                            <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker" name = "fecha_post" value="{{old('fecha_post')}}">
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
                            <label>Zonas</label>
                            <select class="form-control select2" name="id_zonas" id="zonas" style="width: 100%;" >
                                <option value="" disabled selected>Seleccione la zona</option>
                                @foreach($zonas as $zona)
                                   @if (old('id_zonas') == $zona->id)
                                        <option value="{{$zona->id}}" selected>{{ $zona->zona }}</option>
                                    @else
                                        <option value="{{$zona->id}}">{{ $zona->zona }}</option>
                                    @endif             
                                @endforeach
                                 
                            </select>
                        </div>
                </div>

</div>


<div class="form-group">
                {!! Form::label('Contenido') !!}
                
                                                
                {!! Form::textarea('contenido',null,['class'=>'form-control', 'rows' => 50]) !!}
                                
</div>

<div class="form-group">
                {!! Form::label('¿Que Traer?') !!}
                
                                                
                {!! Form::textarea('traer',null,['class'=>'form-control', 'rows' => 50]) !!}
                                
</div>

<div class="row" ><!--Inicio de row -->
                
                <div class="col-md-6 col-xs-12">
                        
                     {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
                </div>

</div>