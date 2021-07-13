
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>My-dentis</title>
    @yield('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"/>
    
    
    
    
        <!-- Bootstrap -->
    <link rel="stylesheet" href="{{URL::asset('./vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{URL::asset('./vendors/font-awesome/css/font-awesome.min.css')}}">
    <!-- NProgress -->
    <link rel="stylesheet" href="{{URL::asset('./vendors/nprogress/nprogress.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{URL::asset('./vendors/iCheck/skins/flat/green.css')}}">
	
    <!-- bootstrap-progressbar -->
    <link rel="stylesheet" href="{{URL::asset('./vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{URL::asset('./vendors/jqvmap/dist/jqvmap.min.css')}}"/>
    <!-- bootstrap-daterangepicker -->
    <link rel="stylesheet" href="{{URL::asset('./vendors/bootstrap-daterangepicker/daterangepicker.css')}}">

    <!-- Custom Theme Style -->
    <link rel="stylesheet" href="{{URL::asset('./build/css/custom.min.css')}}">
    <!--<link href="https://bootswatch.com/4/darkly/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{URL::asset('./build/css/custom.css')}}" >
    <!--estilos-->
  <link rel="stylesheet" href="{{URL::asset('./build/css/estilos.css')}}">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index" class="site_title"><i class="fa fa-space-shuttle"></i> <span>MY-DENTIS</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{URL::asset('./production/images/gustavo.jpg')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>Gustavo Angel</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a a href="{{route('index')}}"><i class="fa fa-home"></i> Inicio <!--<span class="fa fa-chevron-down"></span>--></a></li>
                  <li><a href="{{route('usuarios')}}"><i class="fa fa-user"></i> Usuarios  <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                
                      <li><a href="./production/formulario.html">Alta usuarios</a></li>
                      <li><a href="./production/formulario.html">Reporte usuarios</a></li>
                      <li><a href="./production/formulario.html">Eliminación usuarios</a></li>
                      <li><a href="./production/formulario.html">Modificación usuarios</a></li>
                    </ul> -->
                  </li>
                  <li><a href="{{route('reportepacientes')}}"><i class="fa fa-user"></i>Pacientes  <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                      
                      <li><a href="./production/formulario.html">Alta pacientes</a></li>
                      <li><a href="./production/formulario.html">Reporte pacientes</a></li>
                      <li><a href="./production/formulario.html">Eliminación pacientes</a></li>
                      <li><a href="./production/formulario.html">Modificación pacientes</a></li>
                    </ul> -->
                  </li>
                  <li><a href="{{route('reportes_odontologos')}}"><i class="fa fa-user"></i>Odontologos <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                      
                      <li><a href="./production/formulario.html">Alta odontologos</a></li>
                      <li><a href="./production/formulario.html">Reporte odontologos</a></li>
                      <li><a href="./production/formulario.html">Eliminación odontologos</a></li>
                      <li><a href="./production/formulario.html">Modificación odontologos</a></li>
                    </ul> -->
                  </li>
                  <li><a href="{{ route ('reporteconsultas') }}"><i class="fa fa-calendar"></i>Consultas  <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">            
                      <li><a href="./production/formulario.html">Alta consultas</a></li>
                      <li><a href="./production/formulario.html">Reporte consultas</a></li>
                      <li><a href="./production/formulario.html">Eliminación consultas</a></li>
                      <li><a href="./production/formulario.html">Modificación consultas</a></li>
                    </ul> -->
                  </li>
                  <li><a href="{{route('reportes_municipios')}}"><i class="fa fa-navicon"></i>Municipios <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                      
                      <li><a href="./production/formulario.html">Alta municipios</a></li>
                      <li><a href="./production/formulario.html">Reporte municipios</a></li>
                      <li><a href="./production/formulario.html">Eliminación municipios</a></li>
                      <li><a href="./production/formulario.html">Modificación municipios</a></li>
                    </ul> -->
                  </li>
                  <li><a href="{{route('reportes_especialidades')}}"><i class="fa fa-navicon"></i>Especialidades <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                      
                      <li><a href="./production/formulario.html">Alta especialidades</a></li>
                      <li><a href="./production/formulario.html">Reporte especialidades</a></li>
                      <li><a href="./production/formulario.html">Eliminación especialidades</a></li>
                      <li><a href="./production/formulario.html">Modificación especialidades</a></li>
                    </ul> -->
                  </li>
                  <li><a href="{{ route ('reportestatus') }}"><i class="fa fa-navicon"></i>Status <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                      
                      <li><a href="./production/formulario.html">Alta Status</a></li>
                      <li><a href="./production/formulario.html">Reporte Status</a></li>
                      <li><a href="./production/formulario.html">Eliminación Status</a></li>
                      <li><a href="./production/formulario.html">Modificación Status</a></li>
                    </ul> -->
                  </li>
                  <li><a href="{{route('reportetiposan')}}"><i class="fa fa-tint"></i>Tipo de sangre <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                      
                      <li><a href="./production/formulario.html">Alta tipo de sangre</a></li>
                      <li><a href="./production/formulario.html">Reporte tipo de sangre</a></li>
                      <li><a href="./production/formulario.html">Eliminación tipo de sangre</a></li>
                      <li><a href="./production/formulario.html">Modificación tipo de sangre</a></li>
                    </ul> -->
                  </li>
                  <li><a href="{{ route ('reportetratamientos') }}"><i class="fa fa-edit"></i>Tratamientos <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                      
                      <li><a href="./production/formulario.html">Alta tratamientos</a></li>
                      <li><a href="./production/formulario.html">Reporte tratamientos</a></li>
                      <li><a href="./production/formulario.html">Eliminación tratamientos</a></li>
                      <li><a href="./production/formulario.html">Modificación tratamientos</a></li>
                    </ul> -->
                  </li>
                  <li><a href="{{ route ('reportemateriales') }}"><i class="fa fa-eyedropper"></i>Material odontologico <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                      
                      <li><a href="./production/formulario.html">Alta material odontologico</a></li>
                      <li><a href="./production/formulario.html">Reporte material odontologico</a></li>
                      <li><a href="./production/formulario.html">Eliminación material odontologico</a></li>
                      <li><a href="./production/formulario.html">Modificación material odontologico</a></li>
                    </ul> -->
                  </li>
                  <li><a href="{{route('reportes_medicamentos')}}"><i class="fa fa-edit"></i>Medicamentos <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                      
                      <li><a href="./production/formulario.html">Alta medicamentos</a></li>
                      <li><a href="./production/formulario.html">Reporte medicamentos</a></li>
                      <li><a href="./production/formulario.html">Eliminación medicamentos</a></li>
                      <li><a href="./production/formulario.html">Modificación medicamentos</a></li>
                    </ul> -->
                  </li>
                  <li><a href="{{route('reportes_tipomedicamentos')}}"><i class="fa fa-navicon"></i>Tipo medicamento <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                      
                      <li><a href="./production/formulario.html">Alta tipo medicamento</a></li>
                      <li><a href="./production/formulario.html">Reporte tipo medicamento</a></li>
                      <li><a href="./production/formulario.html">Eliminación tipo medicamento</a></li>
                      <li><a href="./production/formulario.html">Modificación tipo medicamento</a></li>
                    </ul> -->
                  </li>
                  <li><a href="{{route('reportetipousuario')}}"><i class="fa fa-navicon"></i>Tipo usuarios <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                      
                      <li><a href="./production/formulario.html">Alta tipo usuarios</a></li>
                      <li><a href="./production/formulario.html">Reporte tipo usuarios</a></li>
                      <li><a href="./production/formulario.html">Eliminación tipo usuarios</a></li>
                      <li><a href="./production/formulario.html">Modificación tipo usuarios</a></li>
                    </ul> -->
                  </li>
                  <li><a href="{{route('reporteconsultaes')}}"><i class="fa fa-info-circle"></i>Consulta estudios <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                    
                      <li><a href="./production/formulario.html">Alta consulta estudios</a></li>
                      <li><a href="./production/formulario.html">Reporte consulta estudios</a></li>
                      <li><a href="./production/formulario.html">Eliminación consulta estudios</a></li>
                      <li><a href="./production/formulario.html">Modificación consulta estudios</a></li>
                    </ul> -->
                  </li>
                  <li><a href="{{route('reporteestudio')}}"><i class="fa fa-file-text"></i>Estudios <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                      
                      <li><a href="./production/formulario.html">Alta estudios</a></li>
                      <li><a href="./production/formulario.html">Reporte estudios</a></li>
                       <li><a href="./production/formulario.html">Eliminación estudios</a></li>
                      <li><a href="./production/formulario.html">Modificación estudios</a></li> 
                    </ul> -->
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{URL::asset('./production/images/gustavo.jpg')}}" alt="">Gustavo Angel
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="{{route('login')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/alex.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Alexis Gómez</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/alex.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Alexis Gómez</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/alex.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Alexis Gómez</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/alex.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Alexis Gómez</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content aqui va su codigo  -->
        <div id="contenido">
          @yield('contenido')
        </div>
        <!-- /page content termina su codigo -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="./vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="./vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="./vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="./vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="./vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="./vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="./vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="./vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="./vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="./vendors/Flot/jquery.flot.js"></script>
    <script src="./vendors/Flot/jquery.flot.pie.js"></script>
    <script src="./vendors/Flot/jquery.flot.time.js"></script>
    <script src="./vendors/Flot/jquery.flot.stack.js"></script>
    <script src="./vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="./vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="./vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="./vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="./vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="./vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="./vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="./vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="./vendors/moment/min/moment.min.js"></script>
    <script src="./vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="./build/js/custom.min.js"></script>
	
  </body>
  @yield('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
  
<script type="text/javascript">
    $(function(){
      $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
          });
        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "",
            columns:[
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'numusuario', name: 'numusuario'},
                {data: 'nombre', name: 'nombre'},
                {data: 'apellidop', name: 'apellidop'},
                {data: 'sexo', name: 'sexo'},
                {data: 'telefono', name: 'telefono'},
                {data: 'correo', name: 'correo'},
                {data: 'tipou', name: 'tipou'},
                {data: 'otros',name: 'otros',orderable:false, searchable:false},
            ]
        });
        ///////Nuevo Usuario ///////
         $('#createNewCustomer').click(function(){
              $('#saveBtn').val("create-Customer");
              $('#Customer_id').val("");
              $('#CustomerForm').trigger("reset");
              $('#modelHeading').html("Crear Nuevo Ususario");
              $('#ajaxModel').modal("show");
            });
          
        ///////////Modificar usuarios////////////77
        $('body').on('click', '.editCustomer', function(){
                var id = $(this).data('id');
                // console.log(id);
                $.get("editar/" + id, function (data){
                    $('#modelHeading').html("Editar Customer");
                    $('#saveBtn').val("edit-user");
                    $('#ajaxModel').modal("show");
                    $('#Customer_id').val(data.id);
                    $('#numusuario').val(data.numusuario);
                    $('#nombre').val(data.nombre);
                    $('#apellidop').val(data.apellidop);
                    $('#sexo').val(data.sexo);
                    $('#telefono').val(data.telefono);
                    $('#correo').val(data.correo);
                    $('#tipou').val(data.tipou);
                })
            });
        ////////////////////Salvar Usuario///////////////////

                  $('#saveBtn').click(function(e){
                    e.preventDefault();
                  $(this).html('Enviando...');
                          $.ajax({
                            data: $('#CustomerForm').serialize(),
                            url: "{{ route('store') }}",
                            type: "POST",
                            dataType: "json",
                            success: function(data){
                              $('#CustomerForm').trigger('reset');
                              $('#ajaxModel').modal('hide');
                              table.draw();
                            },
                            error: function(data){
                              console.log('Error: ', data);
                              $('#saveBtn').html('Guardar Cambios');
                            }
                          });
                  });
          // ----------------- Delete -------------
          $('body').on('click', '.deleteCustomer', function(){
              var id = $(this).data("id");
              if (confirm("Esta seguro de querer borrar el registro...?")) {
                $.ajax({
                  type: "DELETE",
                  url: "{{ url('destroy') }}"+"/"+id,
                  success: function(data){
                    table.draw();
                  },
                  error: function(data){
                    console.log("Error: ", data);
                  }
                });
              }
              else{}
            });

          });
        </script>
</html>