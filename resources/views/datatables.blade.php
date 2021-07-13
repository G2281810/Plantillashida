@extends('plantilla')
@section('contenido')
<!DOCTYPE html>
<html lang="es">
   <head>
        <meta charset="utf-8">
        <title>Laravel</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
    </head>
<body>
    
    <div class="container mt-5">
        <h2 class="mb-4">My Dentiss | Reporte Usuarios</h2>
        <a href="{{route('altausuarios')}}"><button type="button" class="btn btn-success" >Nuevo Usuario</button></a>
        <hr>
        <a href=" {{url('pdfusuarios') }}">PDF-Usuarios</a>
        <hr>
        <div>
                  @if (Session::has('mensaje'))
                 <div class="alert alert-success">
                  {{Session::get('mensaje')}}
                  @endif
        </div>
        
        <table class="table-bordered yajra-datatable">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>numusuario</th>
                    <th>Nombre</th>
                    <th>Apellido_p</th>
                    <th>Apellido_m</th>
                    <th>Genero</th>
                    <th>edad</th>
                    <th>telefono</th>
                    <th>E-mail</th>
                    <th>tipou</th>
                    <th>Otros</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>

    </div>
</body>
</html>
@endsection 