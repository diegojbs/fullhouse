@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Videos</div>

                <div class="panel-body">
                    <div class="row">
                        @if(isset($mensaje))
                            {{$mensaje}}
                        @endif
                    </div>
                    <div class="row">
                        {{-- Form de nuevo proyecto --}}
                        {!! Form::open(
                                ['route' => ['admin-videos.'.$accion, $accion == 'update' ? $ultimo : null], 
                                'method'=>$metodo, 
                                'files'=>true]) !!}
                        

                        {!! Form::label('titulo', 'Título') !!}
                        {!! Form::text('titulo', ($accion == 'update' ? $ultimo->titulo : null),  ['class'=>'form-control']) !!}

                        {!! Form::label('descripcion', 'Descripción') !!}
                        {!! Form::text('descripcion', ($accion == 'update' ? $ultimo->descripcion : null),  ['class'=>'form-control']) !!}

                        {!! Form::label('url_video', 'ID video Youtube') !!}
                        {!! Form::text('url_video', ($accion == 'update' ? $ultimo->url_video : null),  ['class'=>'form-control']) !!}

                        {!! Form::label('orden', 'Orden') !!}
                        {!! Form::text('orden', ($accion == 'update' ? $ultimo->orden : null),  ['class'=>'form-control']) !!}


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
                <th>Título</th>
                <th>Descripción</th>
                <th>Orden</th>
                <th>ID vídeo</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
                @foreach($malla as $registro)
                    <tr>
                        <td>{{$registro->titulo}}</td>
                        <td>{!!$registro->descripcion!!}</td>
                        <td>{!!$registro->orden!!}</td>
                        <td>
                            <iframe width="180" 
                            height="90" 
                            src="https://www.youtube.com/embed/{{$registro->url_video}}" 
                            frameborder="0" 
                            allow="accelerometer; 
                            autoplay; 
                            encrypted-media; 
                            gyroscope; 
                            picture-in-picture" allowfullscreen>
                        </iframe>
                        </td>
                        <td>
                            <a href="{{route('admin-videos.edit',$registro->id)}}">
                                <button class="btn btn-warning"><i class="fa fa-cog" aria-hidden="true"></i></button>
                              </a> 
                        </td>
                        <td>
                            {{ Form::open(['method' => 'DELETE', 'route' => ['admin-videos.destroy', $registro->id]]) }}
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
