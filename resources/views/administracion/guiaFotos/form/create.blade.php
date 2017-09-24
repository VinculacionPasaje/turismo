<input type="hidden" name="ruta" id ="ruta" value="{{url('')}}">




<div class="row" ><!--Inicio de row -->

                <div class="col-md-6 col-xs-12">
                       <div class="form-group">
                            <label for="telefono">Orden de la Imagen</label>
                            <input type="text" class="form-control" id="orden" name="orden" placeholder="Orden" onkeypress="return soloNumeros(event)"  value="{{old('orden') }}">
                        </div>
                </div>


                 <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            {!!Form::label('Foto','Foto:')!!}
                            {!!Form::file('path',['class'=>'form-control'])!!}
                        </div>
                </div>
              

</div>

<div class="row" ><!--Inicio de row -->

        <div align="center" class="col-md-12 col-xs-12">
                                
                            {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
                            
        </div>

</div>



