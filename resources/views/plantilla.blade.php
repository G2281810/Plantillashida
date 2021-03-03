
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="./vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="./vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="./vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="./vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="./vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="./vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="./vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="./build/css/custom.min.css" rel="stylesheet">
    <link href="./build/css/custom.css" rel="stylesheet">
    <!--estilos-->
  <link rel="stylesheet" href="./build/css/estilos.css">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-space-shuttle"></i> <span>MY-DENTIS</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="./production/images/alex.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>Alexis Gómez</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Inicio <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="reporte">Menu principal</a></li>
                    </ul>
                  </li>
                  <li><a href="altausuarios"><i class="fa fa-user"></i> Usuarios  <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                
                      <li><a href="./production/formulario.html">Alta usuarios</a></li>
                      <li><a href="./production/formulario.html">Reporte usuarios</a></li>
                      <li><a href="./production/formulario.html">Eliminación usuarios</a></li>
                      <li><a href="./production/formulario.html">Modificación usuarios</a></li>
                    </ul> -->
                  </li>
                  <li><a href="altapacientes"><i class="fa fa-user"></i>Pacientes  <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                      
                      <li><a href="./production/formulario.html">Alta pacientes</a></li>
                      <li><a href="./production/formulario.html">Reporte pacientes</a></li>
                      <li><a href="./production/formulario.html">Eliminación pacientes</a></li>
                      <li><a href="./production/formulario.html">Modificación pacientes</a></li>
                    </ul> -->
                  </li>
                  <li><a><i class="fa fa-user"></i>Odontologos <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                      
                      <li><a href="./production/formulario.html">Alta odontologos</a></li>
                      <li><a href="./production/formulario.html">Reporte odontologos</a></li>
                      <li><a href="./production/formulario.html">Eliminación odontologos</a></li>
                      <li><a href="./production/formulario.html">Modificación odontologos</a></li>
                    </ul> -->
                  </li>
                  <li><a><i class="fa fa-calendar"></i>Consultas  <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">            
                      <li><a href="./production/formulario.html">Alta consultas</a></li>
                      <li><a href="./production/formulario.html">Reporte consultas</a></li>
                      <li><a href="./production/formulario.html">Eliminación consultas</a></li>
                      <li><a href="./production/formulario.html">Modificación consultas</a></li>
                    </ul> -->
                  </li>
                  <li><a><i class="fa fa-navicon"></i>Municipios <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                      
                      <li><a href="./production/formulario.html">Alta municipios</a></li>
                      <li><a href="./production/formulario.html">Reporte municipios</a></li>
                      <li><a href="./production/formulario.html">Eliminación municipios</a></li>
                      <li><a href="./production/formulario.html">Modificación municipios</a></li>
                    </ul> -->
                  </li>
                  <li><a><i class="fa fa-navicon"></i>Especialidades <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                      
                      <li><a href="./production/formulario.html">Alta especialidades</a></li>
                      <li><a href="./production/formulario.html">Reporte especialidades</a></li>
                      <li><a href="./production/formulario.html">Eliminación especialidades</a></li>
                      <li><a href="./production/formulario.html">Modificación especialidades</a></li>
                    </ul> -->
                  </li>
                  <li><a><i class="fa fa-navicon"></i>Status <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                      
                      <li><a href="./production/formulario.html">Alta Status</a></li>
                      <li><a href="./production/formulario.html">Reporte Status</a></li>
                      <li><a href="./production/formulario.html">Eliminación Status</a></li>
                      <li><a href="./production/formulario.html">Modificación Status</a></li>
                    </ul> -->
                  </li>
                  <li><a href="altatiposangre"><i class="fa fa-tint"></i>Tipo de sangre <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                      
                      <li><a href="./production/formulario.html">Alta tipo de sangre</a></li>
                      <li><a href="./production/formulario.html">Reporte tipo de sangre</a></li>
                      <li><a href="./production/formulario.html">Eliminación tipo de sangre</a></li>
                      <li><a href="./production/formulario.html">Modificación tipo de sangre</a></li>
                    </ul> -->
                  </li>
                  <li><a><i class="fa fa-edit"></i>Tratamientos <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                      
                      <li><a href="./production/formulario.html">Alta tratamientos</a></li>
                      <li><a href="./production/formulario.html">Reporte tratamientos</a></li>
                      <li><a href="./production/formulario.html">Eliminación tratamientos</a></li>
                      <li><a href="./production/formulario.html">Modificación tratamientos</a></li>
                    </ul> -->
                  </li>
                  <li><a><i class="fa fa-eyedropper"></i>Material odontologico <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                      
                      <li><a href="./production/formulario.html">Alta material odontologico</a></li>
                      <li><a href="./production/formulario.html">Reporte material odontologico</a></li>
                      <li><a href="./production/formulario.html">Eliminación material odontologico</a></li>
                      <li><a href="./production/formulario.html">Modificación material odontologico</a></li>
                    </ul> -->
                  </li>
                  <li><a><i class="fa fa-edit"></i>Medicamentos <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                      
                      <li><a href="./production/formulario.html">Alta medicamentos</a></li>
                      <li><a href="./production/formulario.html">Reporte medicamentos</a></li>
                      <li><a href="./production/formulario.html">Eliminación medicamentos</a></li>
                      <li><a href="./production/formulario.html">Modificación medicamentos</a></li>
                    </ul> -->
                  </li>
                  <li><a><i class="fa fa-navicon"></i>Tipo medicamento <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                      
                      <li><a href="./production/formulario.html">Alta tipo medicamento</a></li>
                      <li><a href="./production/formulario.html">Reporte tipo medicamento</a></li>
                      <li><a href="./production/formulario.html">Eliminación tipo medicamento</a></li>
                      <li><a href="./production/formulario.html">Modificación tipo medicamento</a></li>
                    </ul> -->
                  </li>
                  <li><a href="altatipousuario"><i class="fa fa-navicon"></i>Tipo usuarios <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                      
                      <li><a href="./production/formulario.html">Alta tipo usuarios</a></li>
                      <li><a href="./production/formulario.html">Reporte tipo usuarios</a></li>
                      <li><a href="./production/formulario.html">Eliminación tipo usuarios</a></li>
                      <li><a href="./production/formulario.html">Modificación tipo usuarios</a></li>
                    </ul> -->
                  </li>
                  <li><a href="altaconestudio"><i class="fa fa-info-circle"></i>Consulta estudios <!--<span class="fa fa-chevron-down"></span>--></a>
                    <!-- <ul class="nav child_menu">                    
                      <li><a href="./production/formulario.html">Alta consulta estudios</a></li>
                      <li><a href="./production/formulario.html">Reporte consulta estudios</a></li>
                      <li><a href="./production/formulario.html">Eliminación consulta estudios</a></li>
                      <li><a href="./production/formulario.html">Modificación consulta estudios</a></li>
                    </ul> -->
                  </li>
                  <li><a href="altaestudios"><i class="fa fa-file-text"></i>Estudios <!--<span class="fa fa-chevron-down"></span>--></a>
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
                    <img src="./production/images/alex.jpg" alt="">Alexis Gómez
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
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
</html>