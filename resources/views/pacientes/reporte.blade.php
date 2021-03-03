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
                    <h1>REPORTES</h1>
                    
                    
                    <table class="table table-dark">
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
                              <td data-titulo="ID">1</td>
                              <td data-titulo="Nombre">Alexis</td>
                              <td data-titulo="Ap .Paterno">Morales</td>
                              <td data-titulo="Ap. Materno">Gómez</td>
                              <td data-titulo="Edad">20</td>
                              <td data-titulo="Sexo">Masculino</td>
                              <td data-titulo="Correo">al221811729@gmail.com</td>
                              <td data-titulo="Operaciones">
                                  <button type="button" class="btn btn-success">Editar</button>
                                  <button type="button" class="btn btn-danger">Eliminar</button></td>                        
                          </tr>
                          <tr>
                              <td data-titulo="ID">2</td>
                              <td data-titulo="Nombre">Erik</td>
                              <td data-titulo="Ap .Paterno">Morales</td>
                              <td data-titulo="Ap. Materno">Gómez</td>
                              <td data-titulo="Edad">19</td>
                              <td data-titulo="Sexo">Masculino</td>
                              <td data-titulo="Correo">erik@gmail.com</td>
                              <td data-titulo="Operaciones">
                                  <button type="button" class="btn btn-success">Editar</button>
                                  <button type="button" class="btn btn-danger">Eliminar</button></td>                        
                          </tr>
                          <tr>
                              <td data-titulo="ID">3</td>
                              <td data-titulo="Nombre">Carlos Ignacio</td>
                              <td data-titulo="Ap .Paterno">Morales</td>
                              <td data-titulo="Ap. Materno">Piña</td>
                              <td data-titulo="Edad">20</td>
                              <td data-titulo="Sexo">Masculino</td>
                              <td data-titulo="Correo">charly@gmail.com</td>
                              <td data-titulo="Operaciones">
                                  <button type="button" class="btn btn-success">Editar</button>
                                  <button type="button" class="btn btn-danger">Eliminar</button></td>                        
                          </tr>
                          <tr>
                              <td data-titulo="ID">4</td>
                              <td data-titulo="Nombre">Lesly Arlet</td>
                              <td data-titulo="Ap .Paterno">Santibañez</td>
                              <td data-titulo="Ap. Materno">Hernández</td>
                              <td data-titulo="Edad">21</td>
                              <td data-titulo="Sexo">Femenino</td>
                              <td data-titulo="Correo">less@gmail.com</td>
                              <td data-titulo="Operaciones">
                                  <button type="button" class="btn btn-success">Editar</button> 
                                  <button type="button" class="btn btn-danger">Eliminar</button></td>                        
                          </tr>
                          <tr>
                              <td data-titulo="ID">5</td>
                              <td data-titulo="Nombre">Eduardo</td>
                              <td data-titulo="Ap .Paterno">Flores</td>
                              <td data-titulo="Ap. Materno">Neri</td>
                              <td data-titulo="Edad">20</td>
                              <td data-titulo="Sexo">Masculino</td>
                              <td data-titulo="Correo">lalito@gmail.com</td>
                              <td data-titulo="Operaciones">
                                  <button type="button" class="btn btn-success">Editar</button> 
                                  <button type="button" class="btn btn-danger">Eliminar</button></td>                        
                          </tr>
                          <tr>
                              <td data-titulo="ID">6</td>
                              <td data-titulo="Nombre">Jean Carlo Axel </td>
                              <td data-titulo="Ap .Paterno">Vargas</td>
                              <td data-titulo="Ap. Materno">lópez</td>
                              <td data-titulo="Edad">20</td>
                              <td data-titulo="Sexo">Masculino</td>
                              <td data-titulo="Correo">axel@gmail.com</td>
                              <td data-titulo="Operaciones">
                                  <button type="button" class="btn btn-success">Editar</button> 
                                  <button type="button" class="btn btn-danger">Eliminar</button></td>                        
                          </tr>
                          
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
@endsection