@extends('layouts.appfront')
@section('content')
    

	<div class="encabezado" id="mod_casas"><h2>{{$categoria_actual->nombre}}</h2></div>
	<div class="text-center">{{ $proyectos->links() }}</div>

	<!-- lista de modelos -->
	<div class="container proyectos">
		
		@foreach($proyectos as $proyecto)
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<div class="ficha_tecnica">
					<h3>{{$proyecto->titulo}}</h3>
					<h5><i>{{$categoria_actual->nombre}}</i></h5>
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
							<span class="h4"><i>Compartir este modelo </i></span>
							<a target="_blank" href="https://wa.me/?text={{url('/search')}}/{{$proyecto->id}}" data-action="share/whatsapp/share">
								<i class="fa fa-whatsapp fa-2x ico-whatsapp" aria-hidden="true"></i>
							</a>
							<a href="https://www.facebook.com/sharer/sharer.php?u={{url('/search')}}/{{$proyecto->id}}&img[0]={{$proyecto->enlace_archivo}}" target="_blank">
						       <i class="fa fa-facebook-official fa-2x ico-facebook"></i>
						    </a>
						</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<a data-fancybox="gallery" href="{{$proyecto->enlace_archivo}}"><img src="{{$proyecto->enlace_archivo}}" class="img img-responsive imagen-custom"></a>
				<!-- <img src="{{$proyecto->imagen}}" class="img-responsive imagen-custom"> -->
			</div>
		</div>
		<hr>
		@endforeach
		
		{{-- <div class="text-center"> <span class="h3">Ver más modelos de casas: </span></div> --}}
		
		

	<!-- fin lista de modelos -->
	</div>
	
@endsection