 @foreach($actividades as $act)            
                                    

                                    <div class="col-lg-4 col-md-6 col-sm-6 padding-botton25px">

                                            <div class="news">
                                                        <div class="img-figure">
                                                               @foreach($categoriasHospedaje as $cat)
                                                                    @if($cat->id == $act->id_categorias )

                                                                    <div class="cat">{{$cat->categoria}}</div>
                                                                    @endif

                                                               @endforeach
                                                           
                                                            <img src="{{url('fotos/'.$act->path)}}" class="img-responsive">
                                                        </div>	

                                                        <div class="title">
                                                          <a href="{{url ('hospedaje/'.$act->id)}}">  <h1>{{$act->titulo}}</h1></a>
                                                        </div>
                                                        <p class="description">
                                                            {{$act->descripcion}}
                                                        </p>

                                                        <p class="more">
                                                            <a href="{{url ('hospedaje/'.$act->id)}}">Leer Más</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                                                        </p>
                                                </div>


                                        
                                     </div>
              
                                      
                                @endforeach 