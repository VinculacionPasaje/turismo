<input type="hidden" name="ruta" id ="ruta" value="{{url('')}}">


   <div class="row" ><!--Inicio de row -->
                 <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            {!! Form::label('Titulo') !!}
                            {!! Form::text('titulo',null,['placeholder'=>'Nombre','class'=>'form-control']) !!}
                        </div>
                </div>
                <div class="col-md-6 col-xs-12">
                         <div class="form-group">
                            {!! Form::label('Fecha Noticia') !!}
                            <div class="input-group">
                            <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker" name = "fecha_post" value="{{old('fecha_post')}}">
                        </div>
                    </div>
                </div>

</div>

<div class="form-group">
    {!! Form::label('Descripción') !!}
    {!! Form::text('descripcion',null,['placeholder'=>'Descripcion','class'=>'form-control']) !!}
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
                            <label>Categoria</label>
                            <select class="form-control select2" name="alimentacion_id" id="alimentacion_id" style="width: 100%;" >
                                <option value="" disabled selected>Seleccione la categoria</option>
                                @foreach($categorias as $categoria)
                                   @if (old('alimentacion_id') == $categoria->id)
                                        <option value="{{$categoria->id}}" selected>{{ $categoria->titulo }}</option>
                                    @else
                                        <option value="{{$categoria->id}}">{{ $categoria->titulo }}</option>
                                    @endif             
                                @endforeach
                                 
                            </select>
                        </div>
                </div>

</div>

<div class="row" ><!--Inicio de row -->
                 
                <div align="center" class="col-md-12 col-xs-12">
                        
                     {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
                </div>

</div>









 





