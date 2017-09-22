             <articles class="row">
                    @foreach($imagenes as $imagen)            
                                                        

                    <article class="col-sm-6 col-xs-6 col-md-3 col-lg-3">
                            <a href="{{url('fotos/'.$imagen->path)}}" data-lightbox="example-set" data-title="{{$imagen->titulo}}">
                            <img style="width: 100%;height: 250px;" src="{{url('fotos/'.$imagen->path)}}" alt="{{$imagen->titulo}}" class="img-thumbnail"></a>
                          
                        </article>
                            


                                

                                                
                                                        
                    @endforeach 
   
			</articles>   
		
  
