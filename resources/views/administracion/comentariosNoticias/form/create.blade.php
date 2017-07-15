<input type="hidden" name="ruta" id ="ruta" value="{{url('')}}">

<div class="form-group">
    {!! Form::label('Comentario') !!}                                                
    {!! Form::textarea('comentario',null,['class'=>'form-control', 'rows' => 5]) !!}
</div>

<div class="form-group">
    <label>Usuario</label>
    <select class="form-control select2" name="usuario_id" id="usuarios" style="width: 100%;" >
        <option value="" disabled selected>Seleccione el usuario</option>
        @foreach($usuarios as $usuario)
            <option value="{{$usuario->id}}" >  {{ $usuario->name.' '.$usuario->apellido }} </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label>Noticia</label>
    <select class="form-control select2" name="noticias_id" id="noticias" style="width: 100%;" >
        <option value="" disabled selected>Seleccione la noticia</option>
        @foreach($noticias as $noticia)
            <option value="{{$noticia->id}}" >  {{ $noticia->titulo }} </option>
        @endforeach

    </select>
</div>
