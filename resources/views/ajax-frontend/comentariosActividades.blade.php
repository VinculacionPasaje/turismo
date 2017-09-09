 
 @foreach($comentarios as $comments)      

 <div class="media">
        
        
        <!-- first comment -->

              <div class="media-heading">
                <button class="btn btn-default btn-xs" type="button" data-toggle="collapse" data-target="#{{$comments->id}}" aria-expanded="false" aria-controls="collapseExample"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                 <span class="label label-info">{{$comments->nombre}}</span> 
                Enviado el {{$comments->fecha}} a las {{$comments->hora}}
              </div>

                  <div class="panel-collapse collapse in" id="{{$comments->id}}">

                    <div class="media-left">
                          <div class="vote-wrap">
                                  <div class="save-post">
                                    <a href="#"><span class="glyphicon glyphicon-star" aria-label="Save"></span></a>
                                  </div>
                                  <div class="vote up">
                                    <i class="glyphicon glyphicon-menu-up"></i>
                                  </div>
                                    <div class="vote inactive">
                                      <i class="glyphicon glyphicon-menu-down"></i>
                                    </div>
                          </div>
                      <!-- vote-wrap -->
                    </div>
                    <!-- media-left -->


          <div class="media-body">
            <p>{{$comments->comentario}}</p>

            </div>
           

          
        </div>
        <!-- media -->

      </div>  <!-- media -->

@endforeach
