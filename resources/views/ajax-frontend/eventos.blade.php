
                  
                  
                   @foreach($actividades as $act)            
                        
                                                
                                <div class="col-lg-4 col-md-4 col-sm-4" style="padding-bottom:25px;">

                                        <div class="blog-post blog-large">
                                            <article>
                                                <header class="entry-header">
                                                    <div class="entry-thumbnail">
                                                       <a href="eventos/{{$act->id}}" > <img class="img-responsive5" src="{{url('fotos/'.$act->path)}}" alt=""> </a>
                                                        
                                                    </div>
                                                    
                                                    <h3 class="entry-title" align="center"><a href="eventos/{{$act->id}}">{{$act->titulo}}</a></h3>
                                                    <div class="entry-date">{{$act->fecha_post}}</div>
                                                </header>

                                                <div class="entry-content">
                                                    <P class="home-paragraph " style="text-align: justify; font-size:14px;">{{$act->descripcion}}</P>

                                                    <P class="negro2" style="text-align: justify; font-size:14px;"> <div style= "float: left; margin-right: 7px;"> <i class="fa fa-calendar fa-2x"></i> </div> <span> Del {{$act->fecha_desde}} al {{$act->fecha_hasta}} </span></P>
                                                    <P class="negro2" style="text-align: justify; font-size:14px;"> <div style= "float: left; margin-right: 10px;"> <i class="fa fa-clock-o fa-2x" aria-hidden="true"></i>  </div> <span> {{$act->hora_inicio}} </span> </P>
                                                    <P class="negro2" style="text-align: justify; font-size:14px;"> <div style= "float: left; margin-right: 14px; margin-left: 5px;"><i class="fa fa-map-marker fa-2x"></i> </div> <span> {{$act->direccion}}</span> </P>
                                                   

                                                
                                                </div>

                                            </article>
                                        </div>
                                </div>
                                        
                                                    
                                            
                                                    
                                                
                                
                           @endforeach 

                             <div class="col-lg-12 col-md-12 col-sm-12" align="center">

                          {!! $actividades->render() !!}

                        </div>

                        