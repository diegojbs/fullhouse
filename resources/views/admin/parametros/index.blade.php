@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Cambiar parámetros para botón de WhatsApp</div>

                <div class="panel-body">
                    <div class="row">
                        @if(isset($mensaje))
                            {{$mensaje}}
                        @endif
                    </div>
                    <div class="row">
                        {{-- Form de nuevo proyecto --}}
                        {!! Form::open(
                                ['route' => ['admin-parametros.'.$accion, $accion == 'update' ? $malla[0] : null], 
                                'method'=>$metodo, 
                                'files'=>true]) !!}
                        

                        {!! Form::label('campo1', 'Numero') !!}
                        {!! Form::text('campo1', ($accion == 'update' ? $malla[0]->campo1 : null),  ['class'=>'form-control']) !!}

                        {!! Form::label('campo2', 'Mensaje bienvenida') !!}
                        {!! Form::text('campo2', ($accion == 'update' ? $malla[0]->campo2 : null),  ['class'=>'form-control', 'maxlength'=>'48']) !!}

                        


                        {!! Form::submit('Guardar', array('class'=>'form-control btn-primary')) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="container">
    <div class="row">
        <table class="table table-striped">
            <thead>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Teléfono</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
                @foreach($malla as $registro)
                    <tr>
                        <td>{{$registro->nombre}}</td>
                        <td>{!!$registro->direccion!!}</td>
                        <td>{!!$registro->telefono!!}</td>
                        <td>
                            <a href="{{route('admin-oficinas.edit',$registro->id)}}">
                                <button class="btn btn-warning"><i class="fa fa-cog" aria-hidden="true"></i></button>
                              </a> 
                        </td>
                        <td>
                            {{ Form::open(['method' => 'DELETE', 'route' => ['admin-oficinas.destroy', $registro->id]]) }}
                                <!-- {{ Form::submit('X', ['class' => 'btn btn-danger']) }} -->
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                            {{ Form::close() }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div> --}}
@endsection
