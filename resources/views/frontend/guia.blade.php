<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Guia Turística de Pasaje</title>
		<meta name="description" content="GuiaPasaje: Guia turistica de Pasaje" />
		<meta name="keywords" content="javascript, jquery, plugin, css3, flip, page, 3d, booklet, book, perspective" />
		<meta name="author" content="Fernando" />
		<link rel="shortcut icon" href="{{url('frontend/images/ico/ico.ico')}}">

         <link rel="stylesheet" href="{{url('frontend/css/default.css')}}">
         <link rel="stylesheet" href="{{url('frontend/css/bookblock.css')}}">
         <link rel="stylesheet" href="{{url('frontend/css/demo4.css')}}">
		 



	     <script src="{{url('frontend/js/modernizr.custom.js')}}"></script>

	</head>
	<body>
		<div class="container">
			<div class="bb-custom-wrapper">
				
				<div id="bb-bookblock" class="bb-bookblock">

				  <?php $cont = 0?>


				 
                    @foreach($fotos as $foto)
							<?php $cont = $cont+1?>

							@if($cont==1)

							<?php $aux1 = $foto?>


							@else

								@if($cont==2)

								<?php $cont = 0?>
								<?php $aux2 = $foto?>

								<div class="bb-item">
									<div class="bb-custom-side">
										<img src="{{url('fotos/'.$aux1->path)}}">
									
									</div>
									<div class="bb-custom-side">
										<img src="{{url('fotos/'.$aux2->path)}}">
									</div>
								</div>


								@endif
							
							@endif

					@endforeach

	
				
					                    	


				</div>

				<nav>
					<a id="bb-nav-first" href="#" class="bb-custom-icon bb-custom-icon-first">First page</a>
					<a id="bb-nav-prev" href="#" class="bb-custom-icon bb-custom-icon-arrow-left">Previous</a>
					<a id="bb-nav-next" href="#" class="bb-custom-icon bb-custom-icon-arrow-right">Next</a>
					<a id="bb-nav-last" href="#" class="bb-custom-icon bb-custom-icon-last">Last page</a>

                
				</nav>

            

			</div>

		</div><!-- /container -->
	
        <script src="{{url('frontend/js/jquery.js')}}"></script>
          <script src="{{url('frontend/js/jquerypp.custom.js')}}"></script>
           <script src="{{url('frontend/js/jquery.bookblock.js')}}"></script>
	

		<script>
			var Page = (function() {
				
				var config = {
						$bookBlock : $( '#bb-bookblock' ),
						$navNext : $( '#bb-nav-next' ),
						$navPrev : $( '#bb-nav-prev' ),
						$navFirst : $( '#bb-nav-first' ),
						$navLast : $( '#bb-nav-last' )
					},
					init = function() {
						config.$bookBlock.bookblock( {
							speed : 1000,
							shadowSides : 0.8,
							shadowFlip : 0.4
						} );
						initEvents();
					},
					initEvents = function() {
						
						var $slides = config.$bookBlock.children();

						// add navigation events
						config.$navNext.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'next' );
							return false;
						} );

						config.$navPrev.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'prev' );
							return false;
						} );

						config.$navFirst.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'first' );
							return false;
						} );

						config.$navLast.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'last' );
							return false;
						} );
						
						// add swipe events
						$slides.on( {
							'swipeleft' : function( event ) {
								config.$bookBlock.bookblock( 'next' );
								return false;
							},
							'swiperight' : function( event ) {
								config.$bookBlock.bookblock( 'prev' );
								return false;
							}
						} );

						// add keyboard events
						$( document ).keydown( function(e) {
							var keyCode = e.keyCode || e.which,
								arrow = {
									left : 37,
									up : 38,
									right : 39,
									down : 40
								};

							switch (keyCode) {
								case arrow.left:
									config.$bookBlock.bookblock( 'prev' );
									break;
								case arrow.right:
									config.$bookBlock.bookblock( 'next' );
									break;
							}
						} );
					};

					return { init : init };

			})();
		</script>
		<script>
				Page.init();
		</script>
	</body>
</html>