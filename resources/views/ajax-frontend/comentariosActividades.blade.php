 
 @foreach($comentarios as $comments) 


 <div class="row">
            
           <div class="media">
                    <div class="media-left">
                      <img src="{{url('frontend/images/user.png')}}" class="media-object" style="width:40px">
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading title">{{$comments->nombre}} -   Enviado el {{$comments->fecha}} a las {{$comments->hora}}</h4>
                      <p class="komen">
                          {{$comments->comentario}}<br>
                      
                      </p>
                    </div>
            </div>

            @if($comments->respuesta_comentario=="")


            @else

             <div class="geser">
                 <div class="media">
                        <div class="media-left">
                          <img src="{{url('frontend/images/admin.png')}}" class="media-object" style="width:40px">
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading title">Administrador - Enviado el {{$comments->fecha_respuesta}} a las {{$comments->hora_respuesta}}</h4>
                          <p class="komen">
                              {{$comments->respuesta_comentario}}<br>
                            
                          </p>
                        </div>
                </div>
            </div>



            @endif
              
            
        
           
        
            
</div>
        
           

@endforeach
