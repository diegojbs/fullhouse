@extends('layouts.app')
@section('content')

<div class="encabezado" id="fotos"><h2>OFICINAS</h2></div>



<div class="container text-center">
	@foreach($oficinas as $oficina)
		<div class="row">
			<h2>{{$oficina->nombre}}</h2>
			<h4>{{$oficina->direccion}}</h4>
			<h4>{{$oficina->telefono}}</h4>
			<hr>
		</div>
	@endforeach
</div>
@endsection