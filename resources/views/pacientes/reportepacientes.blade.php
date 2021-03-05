@extends('plantilla')
@section('contenido')
 <div class="right_col" role="main">
            <nav class="navbar navbar-expand-lg navbar-dark ">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <span class="sr-only"></span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Buscar">
      <button class="btn btn-primary my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>

                <div class="x_panel">
                    <h1>REPORTE PACIENTES</h1>
                     <br>
                  <div>
                    <a href="{{route('altapacientes')}}"><button type="button" class="btn btn-success" >Nuevo paciente</button></a>
                 
                  <br>
                  <br>
                  @if (Session::has('mensaje'))
                 <div class="alert alert-success">
                  {{Session::get('mensaje')}}
                  @endif
                   @if (Session::has('mensaje2'))
                 <div class="alert alert-danger">
                  {{Session::get('mensaje2')}}
                  @endif
                 </div>
                    
                    <table class="table table-dark">
                      <thead>
                        <tr>
                             <th scope="col">clave</th>
                             <th scope="col">Nombre completo</th>
                             <th scope="col">Edad</th>
                             <th scope="col">Telefono</th>
                             <th scope="col">Correo</th>
                             <th scope="col">Alergias</th>
                             <th scope="col">Operaciones</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($consulta as $c)
            
             <tr>
               <th scope="row">{{$c->idpaciente}}</th>
               <td>{{$c->nombre}} {{$c->apellidop}} {{$c->apellidom}} </td>
               <td>{{$c->edad}}</td>
               <td>{{$c->telefono}}</td>
               <td>{{$c->correo}}</td>
               <td>{{$c->alergias}}</td>

               <td>
                <a> 
                  <button type="button" class="btn btn-success">Modificar</button>
                </a>
                @if($c->deleted_at)
                <a href="{{route('activapaciente',['idpaciente'=>$c->idpaciente])}}"> 
                  <button type="button" class="btn btn-warning">Activar</button>
                </a>
                <a href="{{route('borrarpaciente',['idpaciente'=>$c->idpaciente])}}"> 
                  <button type="button" class="btn btn-danger">Borrar</button>
                </a>
                @else
                <a href="{{route('desactivapaciente',['idpaciente'=>$c->idpaciente])}}"> 
                  <button type="button" class="btn btn-danger">Desactivar</button>
                </a>
                @endif
             </tr>
           @endforeach
                        </tbody>
                    </table>
                        
                    <section class="paginacion">
                        <ul>
                            <li class="page-item ">
      <a class="page-link" href="#">&laquo;</a>
    </li>
    <li class="page-item active">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">4</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">5</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">&raquo;</a>
    </li>
                        </ul>
                    </section>
                     

                        
<!--
                      <table>
                        <thead>
                          <tr>
                              <th>ID</th>
                              <th>Nombre</th>
                              <th>Ap. Paterno</th>
                              <th>Ap. Materno</th>
                              <th>Edad</th>
                              <th>Sexo</th>
                              <th>Correo</th>
                              <th>Operaciones</th>                    
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <td data-titulo="id">1</td>
                              <td data-titulo="Nombre">Alexis</td>
                              <td data-titulo="Ap .Paterno">Morales</td>
                              <td data-titulo="Ap. Materno">Gómez</td>
                              <td data-titulo="Edad">20</td>
                              <td data-titulo="Sexo">Masculino</td>
                              <td data-titulo="Correo" colspan="2">al221811729@gmail.com</td>
                              <td>Editar Eliminar</td>                        
                          </tr>
                        </tbody>
                      </table>
-->
                </div>
            
        </div>
<style>
  .boton{
    text-align:right;
  }
  </style>
@endsection