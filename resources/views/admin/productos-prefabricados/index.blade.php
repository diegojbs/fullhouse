@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Productos prefabricados</div>

                <div class="panel-body">
                    <div class="row">
                        @if(isset($mensaje))
                            {{$mensaje}}
                        @endif
                    </div>
                    <div class="row">
                        {{-- Form de nuevo proyecto --}}
                        {!! Form::open(
                                ['route' => ['admin-productos-prefabricados.'.$accion, $accion == 'update' ? $ultimo : null], 
                                'method'=>$metodo, 
                                'files'=>true]) !!}

                        {!! Form::label('nombre', 'Nombre') !!}
                        {!! Form::text('nombre',($accion == 'update' ? $ultimo->nombre : null),  ['class'=>'form-control']) !!}
                        
                        
                        {!! Form::label('descripcion', 'Descripcion') !!}
                        {!! Form::textarea('descripcion',($accion == 'update' ? $ultimo->descripcion : null),  ['class'=>'form-control summernote']) !!}

                        {!! Form::label('imagen', 'Imagen') !!}
                        {!! Form::file('imagen', array('class'=>'form-control')) !!}

                        @if($accion == 'update' && $ultimo->tipo == 'Imagen')
                            {!! Form::label('imagen_actual', 'Imagen actual') !!}
                            <img width="100px" src="{{Storage::url('public/fichatecnica/'.$ultimo->imagen)}}" alt="">
                        @endif

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
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Imagen</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
                @foreach($malla as $registro)
                    <tr>
                        <td>{{$registro->nombre}}</td>
                        <td>{!!$registro->descripcion!!}</td>
                        <td>
                            @if($registro->imagen)
                                <img width="100px" src="{{Storage::url('public/productos/'.$registro->imagen)}}" alt="">
                            @endif
                        </td>
                        <td>
                            <a href="{{route('admin-productos-prefabricados.edit',$registro->id)}}">
                                <button class="btn btn-warning"><i class="fa fa-cog" aria-hidden="true"></i></button>
                              </a> 
                        </td>
                        <td>
                            {{ Form::open(['method' => 'DELETE', 'route' => ['admin-productos-prefabricados.destroy', $registro->id]]) }}
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
