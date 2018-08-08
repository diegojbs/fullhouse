@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Ficha técnica</div>

                <div class="panel-body">
                    <div class="row">
                        @if(isset($mensaje))
                            {{$mensaje}}
                        @endif
                    </div>
                    <div class="row">
                        {{-- Form de nuevo proyecto --}}
                        {!! Form::open(
                                ['route' => ['admin-ficha-tecnica.'.$accion, $accion == 'update' ? $ultimo : null], 
                                'method'=>$metodo, 
                                'files'=>true]) !!}

                        {!! Form::label('tipo', 'Tipo') !!}
                        {!! Form::select('tipo', array('Titulo' => 'Titulo', 'Parrafo' => 'Parrafo', 'Imagen' => 'Imagen'), ($accion == 'update' ? $ultimo->tipo : null), array('class'=>'form-control')) !!}
                        
                        {!! Form::label('ancho', 'Ancho') !!}
                        {!! Form::select('ancho', array('Total' => 'Total', 'Un tercio' => 'Un tercio'), ($accion == 'update' ? $ultimo->ancho : null), array('class'=>'form-control')) !!}

                        {!! Form::label('contenido', 'Contenido') !!}
                        {!! Form::textarea('contenido',($accion == 'update' ? $ultimo->contenido : null),  ['class'=>'form-control summernote']) !!}

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
                <th>Tipo</th>
                <th>Ancho</th>
                <th>Contenido</th>
                <th>Imagen</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
                @foreach($malla as $registro)
                    <tr>
                        <td>{{$registro->tipo}}</td>
                        <td>{!!$registro->ancho!!}</td>
                        <td>{!!$registro->contenido!!}</td>
                        <td>
                            @if($registro->imagen)
                                <img width="100px" src="{{Storage::url('public/fichatecnica/'.$registro->imagen)}}" alt="">
                            @endif
                        </td>
                        <td>
                            <a href="{{route('admin-ficha-tecnica.edit',$registro->id)}}">
                                <button class="btn btn-warning"><i class="fa fa-cog" aria-hidden="true"></i></button>
                              </a> 
                        </td>
                        <td>
                            {{ Form::open(['method' => 'DELETE', 'route' => ['admin-ficha-tecnica.destroy', $registro->id]]) }}
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
