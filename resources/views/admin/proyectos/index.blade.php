@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <col-xs-12 class="col-md-6">Modelos de casas</col-xs-12>
                        <col-xs-12 class="col-md-6 text-right">
                            <a class="btn btn-warning" href="{{url('/admin-proyectos')}}">Agregar nuevo</a>
                            @if($accion=='update')
                                <a class="btn btn-success" href="{{url('/admin-proyectos/'.$ultimo->id)}}">Ver características</a>
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
                        {{-- Form de nuevo proyecto --}}
                        {!! Form::open(
                                ['route' => ['admin-proyectos.'.$accion, $accion == 'update' ? $ultimo : null], 
                                'method'=>$metodo,
                                'files'=>true]) !!}
                        

                        {!! Form::label('titulo', 'Título') !!}
                        {!! Form::text('titulo',($accion == 'update' ? $ultimo->titulo : null),  ['class'=>'form-control']) !!}

                        @if($accion == 'store')
                            {!! Form::label('categorias', 'Categoria') !!}
                            {!! Form::select('categorias[]', $categorias, null, array('multiple' => true, 'class'=>'form-control')) !!}
                        @else
                            {{-- Pintar select si la accion es una edicion --}}
                            {!! Form::label('categorias', 'Categoria') !!}
                            <select multiple="multiple" name="categorias[]" id="catergorias" class="form-control">
                            @foreach($categorias as $categoria1)
                                <?php $bandera = false; ?>
                                @foreach($categorias_actuales as $categoria2)
                                    @if($categoria1->id == $categoria2->categoria_id)
                                        <option value="{{$categoria1->id}}" selected="selected">{{$categoria1->nombre}}</option>
                                        <?php $bandera = true; ?>
                                        @break
                                    @endif
                                @endforeach
                                @if($bandera == false)
                                    <option value="{{$categoria1->id}}">{{$categoria1->nombre}}</option>
                                @endif
                            @endforeach
                            </select>
                            {{-- Fin select de edicion --}}
                        @endif

                        {!! Form::label('contenido', 'Contenido') !!}
                        {!! Form::textarea('contenido',($accion == 'update' ? $ultimo->contenido : null),  ['class'=>'form-control']) !!}

                        {!! Form::label('prioridad_orden', 'Prioridad orden') !!}
                        {!! Form::text('prioridad_orden',($accion == 'update' ? $ultimo->prioridad_orden : null),  ['class'=>'form-control']) !!}

                        {!! Form::label('imagen', 'Imagen del proyecto') !!}
                        {!! Form::file('imagen', array('class'=>'form-control')) !!}

                        <div class="form-group text-center">
                            @if($accion == 'update')
                                {!! Form::label('imagen_actual', 'Imagen actual') !!}
                                <img width="100px" src="{{Storage::url('public/proyectos/'.$ultimo->imagen)}}" alt="" class="img-rounded">
                                {{$ultimo->imagen}}
                            @endif
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
                <th>Titulo</th>
                <th>Categorias</th>
                <th>Contenido</th>
                <th>Prioridad orden</th>
                <th>Imagen</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
                @foreach($malla as $registro)
                    <tr>
                        <td>{{$registro->titulo}}</td>
                        <td>{{'Categorias'}}</td>
                        <td>{{$registro->contenido}}</td>
                        <td>{{$registro->prioridad_orden}}</td>
                        <td>
                            <a href="{{Storage::url('public/proyectos/'.$registro->imagen)}}" target="_blank">
                                <img width="50px" src="{{Storage::url('public/proyectos/'.$registro->imagen)}}" alt="" class="img-rounded">
                            </a>
                        </td>
                        <td>
                            <a href="{{route('admin-proyectos.edit',$registro->id)}}">
                                <button class="btn btn-warning"><i class="fa fa-cog" aria-hidden="true"></i></button>
                              </a> 
                        </td>
                        <td>
                            {{ Form::open(['method' => 'DELETE', 'route' => ['admin-proyectos.destroy', $registro->id]]) }}
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
