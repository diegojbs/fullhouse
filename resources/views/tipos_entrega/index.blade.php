@extends('layouts.appfront')
@section('content')

    <div class="encabezado" id="mod_casas"><h2>Tipos de entrega</h2></div>

	<div class="container">
		@foreach($datos as $dato)
			<div class="row">
				<div class="col-xs-12">
					<h3>{{$dato->titulo}}</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<p>{!! $dato->parrafo !!}</p>
				</div>
			</div>
		@endforeach
	</div>
		
@endsection