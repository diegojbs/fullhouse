@extends('layouts.app')
@section('content')

    <div class="encabezado" id="mod_casas"><h2>MODELOS DE CASAS</h2></div>

	<!-- lista de modelos -->
	<div class="container proyectos">
		
		
		<div class="row">
			
			<div class="col-xs-12 col-sm-6">
				<div class="ficha_tecnica">
					<h3>{{$proyecto->titulo}}</h3>
						<p>
							{{$proyecto->contenido}}
						</p>
						<h4>Detalles de este proyecto.</h4>
						<p>
							@foreach($detalles as $detalle)
								@if($detalle->proyecto_id == $proyecto->id)
									<i class="fa fa-check fa-2x ico-ok" aria-hidden="true"></i>{{$detalle->descripcion}}<br>
								@endif
							@endforeach
						</p>
						<p>
							<span class="h3">Compartir:</span>
							<a href="whatsapp://send?text={{url('/search')}}/{{$proyecto->id}}" data-action="share/whatsapp/share">
								<i class="fa fa-whatsapp fa-2x ico-whatsapp" aria-hidden="true"></i>
							</a>
							<a href="https://www.facebook.com/sharer/sharer.php?u={{url('/search')}}/{{$proyecto->id}}&img[0]={{$proyecto->enlace_archivo}}" target="_blank">
						       <i class="fa fa-facebook-official fa-2x ico-facebook"></i>
						    </a>
						</p>
						<p>
							<span class="h4"><a href="{{url('/')}}">Ver más modelos</a></span>
						</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<a data-fancybox="gallery" href="{{$proyecto->enlace_archivo}}"><img src="{{$proyecto->enlace_archivo}}" class="img img-responsive imagen-custom"></a>
				<!-- <img src="{{$proyecto->imagen}}" class="img-responsive imagen-custom"> -->
			</div>
		</div>
		<hr>
		
@endsection