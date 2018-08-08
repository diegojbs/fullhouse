@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <col-xs-12 class="col-md-8">Caracteristicas de : {{$padre->titulo}}</col-xs-12>
                        <col-xs-12 class="col-md-4 text-right">
                            <a class="btn btn-warning" href="{{url('/admin-proyectos/'.$padre->id)}}">Agregar característica</a>
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
                                ['route' => ['admin-detalles-proyectos.'.$accion, $accion == 'update' ? $ultimo : null], 
                                'method'=>$metodo,
                                'files'=>true]) !!}
                        {!! Form::hidden('proyecto_id', $accion == 'update' ? $ultimo->proyecto_id : $padre->id)!!}
                        
                        <div class="form-group">
                            {!! Form::label('descripcion', 'Descripción') !!}
                            {!! Form::text('descripcion',($accion == 'update' ? $ultimo->descripcion : null),  ['class'=>'form-control', 'placeholder'=>'Escriba aqui la nueva característica de la casa']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Guardar', array('class'=>'form-control btn-primary')) !!}
                        </div>
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
                <th>Descripción</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
                @foreach($malla as $registro)
                    <tr>
                        <td>{{$registro->descripcion}}</td>
                        <td>
                            <a href="{{route('admin-detalles-proyectos.edit',$registro->id)}}">
                                <button class="btn btn-warning"><i class="fa fa-cog" aria-hidden="true"></i></button>
                              </a> 
                        </td>
                        <td>
                            {{ Form::open(['method' => 'DELETE', 'route' => ['admin-detalles-proyectos.destroy', $registro->id]]) }}
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
