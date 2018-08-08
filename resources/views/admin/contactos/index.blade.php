@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Contactos</div>

                <div class="panel-body">
                    <div class="row">
                        @if(isset($mensaje))
                            {{$mensaje}}
                        @endif
                    </div>
                    <div class="row">
                        {{-- Form de nuevo proyecto --}}
                        {!! Form::open(['route' => ['admin-contactos.update', $ultimo], 'method'=>'put', 'files'=>true]) !!}
                        

                        {!! Form::label('nombre', 'Nombre') !!}
                        {!! Form::text('nombre',$ultimo->nombre,  ['class'=>'form-control']) !!}

                        {!! Form::label('email', 'Email') !!}
                        {!! Form::text('email',$ultimo->email,  ['class'=>'form-control']) !!}

                        {!! Form::label('telefonos', 'Telefonos') !!}
                        {!! Form::text('telefonos',$ultimo->telefonos,  ['class'=>'form-control']) !!}

                        {!! Form::label('ciudad', 'Ciudad') !!}
                        {!! Form::text('ciudad',$ultimo->ciudad, array('class'=>'form-control')) !!}

                        {!! Form::label('mensaje', 'Mensaje') !!}
                        {!! Form::textarea('mensaje',$ultimo->mensaje, array('class'=>'form-control')) !!}

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
                <th>Fecha de registro</th>
                <th>Email</th>
                <th>Telefonos</th>
                <th>Ciuada</th>
                <th>Mensaje</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
                @foreach($malla as $registro)
                    <tr>
                        <td>{{$registro->nombre}}</td>
                        <td>{{$registro->created_at}}</td>
                        <td>{{$registro->email}}</td>
                        <td>{{$registro->telefonos}}</td>
                        <td>{{$registro->ciudad}}</td>
                        <td>{{$registro->mensaje}}</td>
                        <td>
                            <a href="{{route('admin-contactos.edit',$registro->id)}}">
                                <button class="btn btn-warning"><i class="fa fa-cog" aria-hidden="true"></i></button>
                              </a> 
                        </td>
                        <td>
                            {{ Form::open(['method' => 'DELETE', 'route' => ['admin-contactos.destroy', $registro->id]]) }}
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
