
                  
                  
                   @foreach($actividades as $act)            
                        
                                                
                                 <div class="blog-post blog-large" style= "padding-bottom: 25px;" >
                                        <article>
                                            <header class="entry-header">
                                                <div class="entry-thumbnail">
                                                   <a href="noticias/{{$act->id}}" > <img class="img-responsive" src="{{url('fotos/'.$act->path)}}" alt=""> </a>
                                                    
                                                </div>
                                                <div class="entry-date">{{$act->fecha_post}}</div>
                                                <h3 class="entry-title" align= "center"><a href="noticias/{{$act->id}}">{{$act->titulo}}</a></h3>
                                            </header>

                                            <div class="entry-content">
                                                <P class="negro2"> {{$act->descripcion}}  </P>
                                            
                                            </div>

                                        
                                        </article>
                                    </div>
                                        
                                                    
                                            
                                                    
                                                
                                
                           @endforeach 

                             <div class="col-lg-12 col-md-12 col-sm-12" align="center">

                          {!! $actividades->render() !!}

                        </div>