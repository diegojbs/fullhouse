@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <col-xs-12 class="col-md-6">Categorías de proyectos</col-xs-12>
                        <col-xs-12 class="col-md-6 text-right">
                            <a class="btn btn-warning" href="{{url('/admin-categorias')}}">Agregar nuevo</a>
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
                        {{-- Form de nuevo proyecto --}}
                        {!! Form::open(
                                ['route' => ['admin-categorias.'.$accion, $accion == 'update' ? $ultimo : null], 
                                'method'=>$metodo]) !!}
                        
                        <div class="form-group">
                            {!! Form::label('nombre', 'Nombre') !!}
                            {!! Form::text('nombre', ($accion == 'update' ? $ultimo->nombre : null),  ['class'=>'form-control']) !!}
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
                <th>Nombre</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
                @foreach($malla as $registro)
                    <tr>
                        <td>{{$registro->nombre}}</td>
                        <td>
                            <a href="{{route('admin-categorias.edit',$registro->id)}}">
                                <button class="btn btn-warning"><i class="fa fa-cog" aria-hidden="true"></i></button>
                              </a> 
                        </td>
                        <td>
                            {{ Form::open(['method' => 'DELETE', 'route' => ['admin-categorias.destroy', $registro->id]]) }}
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
