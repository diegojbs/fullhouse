@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Tipos entrega</div>

                <div class="panel-body">
                    <div class="row">
                        @if(isset($mensaje))
                            {{$mensaje}}
                        @endif
                    </div>
                    <div class="row">
                        {{-- Form de nuevo proyecto --}}
                        {!! Form::open(
                                ['route' => ['admin-tipos-entrega.'.$accion, $accion == 'update' ? $ultimo : null], 
                                'method'=>$metodo, 
                                'files'=>true]) !!}
                        

                        {!! Form::label('titulo', 'Título') !!}
                        {!! Form::text('titulo', ($accion == 'update' ? $ultimo->titulo : null),  ['class'=>'form-control']) !!}

                        {!! Form::label('parrafo', 'Párrafo') !!}
                        {!! Form::textarea('parrafo',($accion == 'update' ? $ultimo->parrafo : null),  ['class'=>'form-control summernote']) !!}

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
                <th>Titulo</th>
                <th>Párrafo</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
                @foreach($malla as $registro)
                    <tr>
                        <td>{{$registro->titulo}}</td>
                        <td>{!!$registro->parrafo!!}</td>
                        <td>
                            <a href="{{route('admin-tipos-entrega.edit',$registro->id)}}">
                                <button class="btn btn-warning"><i class="fa fa-cog" aria-hidden="true"></i></button>
                              </a> 
                        </td>
                        <td>
                            {{ Form::open(['method' => 'DELETE', 'route' => ['admin-tipos-entrega.destroy', $registro->id]]) }}
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
