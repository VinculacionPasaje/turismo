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
                            {!! Form::label('Fecha Subida') !!}
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
                            {!!Form::label('PDF','PDF:')!!}
                            <input type="file" name="pdf" id="pdf" accept="application/pdf" />
                        </div>
                </div>

</div>

<div class="row" ><!--Inicio de row -->
                 <div class="col-md-6 col-xs-12">
                       <div class="form-group">
                            {!! Form::label('Descripción') !!}
                            {!! Form::text('descripcion',null,['placeholder'=>'Descripcion','class'=>'form-control']) !!}
                        </div>
                </div>
                <div class="col-md-6 col-xs-12">
                        
                     {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
                </div>

</div>



