@extends('layouts.appfront')
@section('content')

    <div class="encabezado" id="mod_casas"><h2>Ficha técnica</h2></div>

    

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2>CONSTRUCCIONES LIVIANAS A BASE DE PREFABRICADOS</h2>
			</div>
		</div>
		<div class="row">
			@foreach($datos as $dato)
				
					@if($dato->tipo == "")
						
					@else
						@if($dato->ancho == 'Total')
						
						<div class="col-xs-12" style="background-image: yellow;">
						@else
							<div class="col-xs-12 col-sm-4 col-md-4"  style="background-image: yellow;">
						@endif
						@if($dato->tipo == 'Imagen')
							<img src="{{$dato->enlace_archivo}}" class="img-responsive imagen-galeria">
						@elseif($dato->tipo == 'Titulo')
							<h2>{!! $dato->contenido !!}</h2>
							<hr>
						@else
							<p>{!! $dato->contenido !!}</p>
						@endif
						</div>
					@endif

				
			@endforeach
		</div>
	</div>

@endsection