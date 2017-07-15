<input type="hidden" name="ruta" id ="ruta" value="{{url('')}}">

<div class="form-group">
    <label>Comentario</label>
    <select class="form-control select2" name="comentario_id" id="comentario_id" style="width: 100%;" >
        <option value="" disabled selected>Seleccione el comentario</option>
        @foreach($comentarios as $comment)
            <option value="{{$comment->id}}" >  {{ $comment->comentario }} </option>
        @endforeach

    </select>
</div>

<div class="form-group">
    {!! Form::label('Respuesta') !!}                                                
    {!! Form::textarea('comentario',null,['class'=>'form-control', 'rows' => 5]) !!}
</div>



