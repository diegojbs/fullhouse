@extends('layouts.appfront')
@section('content')
    

    <div class="encabezado" id="contenedor-productos"><h2>Catálogo de productos prefabricados</h2></div>
	<div class="text-center">{{ $malla->links() }}</div>
	<!-- lista de modelos -->
	<div class="container proyectos">
		
		@foreach($malla as $item)
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<div class="ficha_tecnica">
					<h3>{{$item->nombre}}</h3>
						<p>
							{!!$item->descripcion!!}
						</p>
						
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<a data-fancybox="gallery" href="{{Storage::url('public/productos/'.$item->imagen)}}"><img src="{{Storage::url('public/productos/'.$item->imagen)}}" class="img img-responsive imagen-custom"></a>
				<!-- <img src="{{$item->imagen}}" class="img-responsive imagen-custom"> -->
			</div>
		</div>
		<hr>
		@endforeach

	<!-- fin lista de modelos -->
	</div>
	
@endsection