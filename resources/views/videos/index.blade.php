@extends('layouts.appfront')
@section('content')
    

    <div class="encabezado" id="mod_casas"><h2>Videos de proyectos</h2></div>
	<div class="text-center">{{ $malla->links() }}</div>
	<!-- lista de modelos -->
	<div class="container">
		
		@foreach($malla as $item)
			{{-- <div class="row"> --}}
				<div class="col-xs-12 col-md-6">
					<h3 style="color: orange;" class="text-center">{{$item->titulo}}</h3>
					<div style="background-color:rgba(0,0,0,.2);">
						<p style="padding:10px;">{{$item->descripcion}}</p>
						{{-- <h4>{{$item->url_video}}</h4> --}}
						<div style="padding:10px; background-color:#ff9933; border-radius:0px;">
							<iframe width="100%" 
								height="315" 
								src="https://www.youtube.com/embed/{{$item->url_video}}" 
								frameborder="0" 
								allow="accelerometer; 
								autoplay; 
								encrypted-media; 
								gyroscope; 
								picture-in-picture" allowfullscreen>
							</iframe>
						</div>
					</div>
					{{-- <div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" 
							src="{{$item->url_video}}" 
							allowfullscreen>
					</iframe>
					</div> --}}
					<hr>
				</div>
				
			{{-- </div> --}}
			
		@endforeach
		
		{{-- <div class="text-center"> <span class="h3">Ver más modelos de casas</span></div> --}}
		
		

	<!-- fin lista de modelos -->
	</div>
	
@endsection