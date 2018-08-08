@extends('layouts.appfront')
@section('content')

    <div class="encabezado" id="fotos"><h2>FOTOS DE PROYECTOS</h2></div>

	<!-- lista de modelos -->

	<div class="container proyectos">

	<!-- galerias de proyectos -->
		@foreach($galerias as $galeria)
		<div class="row">
			<hr>
			<div class="row">
				<h3 class="text-center">{{$galeria->titulo}}</h3>
					<!-- TODO crear botones sociales -->
			</div>
			<hr>
			<?php 
				$i = 0;
			 ?>
			<div class="row">
				@foreach($imagenes as $imagen)
					@if($galeria->id == $imagen->galeria_id)

					<div class="col xs-12 col-sm-3 col-md-3">
						<a data-fancybox="gallery" href="{{$imagen->enlace_imagen}}">
							<img src="{{$imagen->enlace_imagen}}" class="img-responsive imagen-galeria">
						</a>
						<!-- <h4>{!!$i!!}</h4> -->
						<?php 
							$i++;
						 ?>
					</div>
					@if($i % 4 == 0)
						</div>
						<div class="row">
					@endif
					@endif
				@endforeach
			</div>
		</div>
		@endforeach






		<div class="text-center"> <span class="h3">Ver más proyectos </span></div>
		<div class="text-center">{{ $galerias->links() }}</div>
	</div>
@endsection