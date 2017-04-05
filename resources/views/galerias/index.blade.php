@extends('layouts.app')
@section('content')

    <div class="encabezado" id="fotos"><h2>GALERIA DE IMÁGENES</h2></div>

	<!-- lista de modelos -->
	<div class="container proyectos">

	<!-- galerias de proyectos -->
		@foreach($galerias as $galeria)
		<div class="row">
			<hr>
			<div class="row">
				<h3 class="text-center">{{$galeria->titulo}}</h3>
					<!-- TODO crear botones sociales -->
			    </a>
			</div>
			<hr>
			@foreach($imagenes as $imagen)
				@if($galeria->id == $imagen->galeria_id)
				<div class="col xs-12 col-sm-4 col-md-3">
					<a data-fancybox="gallery" href="{{$imagen->enlace_imagen}}"><img src="{{$imagen->enlace_imagen}}" class="img img-responsive imagen-galeria"></a>
				</div>
				
				@endif
			@endforeach

		</div>
		@endforeach

		<div class="text-center"> <span class="h3">Ver más imágenes: </span></div>
		<div class="text-center">{{ $galerias->links() }}</div>
	</div>
@endsection