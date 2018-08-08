@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <col-xs-12 class="col-md-8">Imagenes de : {{$padre->titulo}}</col-xs-12>
                        <col-xs-12 class="col-md-4 text-right">
                            <a class="btn btn-warning" href="{{url('/admin-galerias/'.$padre->id)}}">Agregar imagen</a>
                        </col-xs-12>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="row">
                        @if(isset($mensaje))
                            {{$mensaje}}
                        @endif
                    </div>
                    <div class="row">
                        {!! Form::open(
                                ['route' => ['admin-imagenes-galerias.'.$accion, $accion == 'update' ? $ultimo : null], 
                                'method'=>$metodo,
                                'files'=>true]) !!}
                        {!! Form::hidden('galeria_id', $accion == 'update' ? $ultimo->galeria_id : $padre->id)!!}
                        <div class="form-group">
                            {!! Form::label('imagen', 'Imagen') !!}
                            {!! Form::file('imagen', array('class'=>'form-control')) !!}
                        </div>
                        <div class="form-group text-center">
                            @if($accion == 'update')
                                {!! Form::label('imagen_actual', 'Imagen actual') !!}
                                <img width="100px" src="{{Storage::url('public/imagenesgalerias/'.$ultimo->imagen)}}" alt="">
                            @endif
                            {{$ultimo->imagen}}
                        </div>
                        {!! Form::submit('Guardar', array('class'=>'form-control btn-primary')) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <table class="table table-striped">
            <thead>
                <th>Imagen</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
                @foreach($malla as $registro)
                    <tr>
                        <td>{{$registro->imagen}}</td>
                        <td>
                            <a href="{{route('admin-imagenes-galerias.edit',$registro->id)}}">
                                <button class="btn btn-warning"><i class="fa fa-cog" aria-hidden="true"></i></button>
                              </a> 
                        </td>
                        <td>
                            {{ Form::open(['method' => 'DELETE', 'route' => ['admin-imagenes-galerias.destroy', $registro->id]]) }}
                                <!-- {{ Form::submit('X', ['class' => 'btn btn-danger']) }} -->
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                            {{ Form::close() }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
