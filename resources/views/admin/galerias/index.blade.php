@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <col-xs-12 class="col-md-6">Galerias de imágenes</col-xs-12>
                        <col-xs-12 class="col-md-6 text-right">
                            <a class="btn btn-warning" href="{{url('/admin-galerias')}}">Agregar nuevo</a>
                            @if($accion=='update')
                                <a class="btn btn-success" href="{{url('/admin-galerias/'.$ultimo->id)}}">Ver imágenes</a>
                            @endif
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
                                ['route' => ['admin-galerias.'.$accion, $accion == 'update' ? $ultimo : null], 
                                'method'=>$metodo]) !!}
                        
                        <div class="form-group">
                            {!! Form::label('titulo', 'Título') !!}
                            {!! Form::text('titulo', ($accion == 'update' ? $ultimo->titulo : null),  ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('orden', 'Orden en que aparece') !!}
                            {!! Form::text('orden', ($accion == 'update' ? $ultimo->orden : null),  ['class'=>'form-control']) !!}
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
                <th>Título</th>
                <th>Orden en que parece</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
                @foreach($malla as $registro)
                    <tr>
                        <td>{{$registro->titulo}}</td>
                        <td>{{$registro->orden}}</td>
                        <td>
                            <a href="{{route('admin-galerias.edit',$registro->id)}}">
                                <button class="btn btn-warning"><i class="fa fa-cog" aria-hidden="true"></i></button>
                              </a> 
                        </td>
                        <td>
                            {{ Form::open(['method' => 'DELETE', 'route' => ['admin-galerias.destroy', $registro->id]]) }}
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
