@extends('plantilla')
@section('contenido')

<div class="right_col" role="main">
    <div class="control">
        <h1>REPORTES ODONTOLOGOS</h1>
        <br>
        <a href="{{route('alta_odontologos')}}">
            <button type="button" class="btn btn-success">Agregar un nuevo odontologo</button>
        </a> <br>
        <br><br>
        @if(Session::has('mensaje'))
        <div class="alert alert-success">{{Session::get('mensaje')}}</div>
        @endif
        <div class="x_content">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">Foto</th>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Correo electronico</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Municipio</th>
                        <th scope="col">Especialidad</th>
                        <th scope="col">Horario</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($consulta as $c)
                    <tr>
                          <td data-titulo="Foto"> <img src="{{ asset('archivos/'. $c->img)}}" height="70" witd="70"> 
                            <div align="center">
                                <a href="{{route('descarga_imagen',[$c->img])}}"> <img src="./production/images/iconodes.png" height="30" width="30"> </a>
                            </div>
                            </td>
                        <td data-titulo="ID" scope="row">{{$c->idodo}}</td>
                        <td data-titulo="Nombre">{{$c->appaterno}} {{$c->apmaterno}} {{$c->nombre}}</td>
                        <td data-titulo="Telefono">{{$c->telefono}}</td>
                        <td data-titulo="Correo electronico">{{$c->correo}}</td>
                        <td data-titulo="Dirección">{{$c->calle}} Num. ext {{$c->numext}} Num. int {{$c->numint}}, {{$c->colonia}} </td>
                        <td data-titulo="Municipio">{{$c->municipio}}</td>
                        <td data-titulo="Especialidad">{{$c->esp}}</td>
                        <td data-titulo="Horario">{{$c->hora_entrada}} - {{$c->hora_salida}} </td>
                        <td>
                            <a href="{{route('modifica_odontologos',['idodo'=>$c->idodo])}}">
                                <button type="button" class="btn btn-info">Modificar</button>
                            </a>
                            @if($c -> deleted_at)
                            <a href="{{route('activar_odontologos',['idodo'=>$c->idodo])}}">
                                <button type="button" class="btn btn-warning">Activar</button>
                            </a>
                            <a href="{{route('eliminar_odontologos',['idodo'=>$c->idodo])}}">
                                <button type="button" class="btn btn-secondary">Eliminar</button>
                            </a>
                            @else
                            <a href="{{route('desactivar_odontologos',['idodo'=>$c->idodo])}}">
                                <button type="button" class="btn btn-danger">Desactivar</button>
                            </a>
                            @endif

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop
