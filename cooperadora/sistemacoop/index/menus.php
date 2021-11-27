<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistema Cooperadora</title>



    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">

    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

<link rel="stylesheet" href="../build/css/custose.css">

    <!-- Custom Theme Style -->

    <link href="../build/css/custom.min.css" rel="stylesheet">
    
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link rel="stylesheet" href="estilos.css">

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a class="site_title"><i class="fa fa-leaf"></i> <span>Cooperadora</span></a>
            </div>
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  
                  </li>

                  <li><a><i class="fa fa-bar-chart-o"></i>Administracion<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="socios.php">Socios</a></li>
                      <li><a href="ListaAlumnos.php">Lista de Alumnos</a></li>
                      <li><a href="Cursos.php">Cursos</a></li>
                      <li><a href="proveedores.php">Proveedores</a></li>
                    </ul>
                  </li>


                  <li><a><i class="fa fa-clone"></i>Registro de Cuotas<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="cuotas.php">Nuevo Registro</a>
                         <li><a href="ValoresCuotas.php">Tabla de Valores</a>
                      </li>
                      
                    </ul>
                  </li>

                   <li><a><i class="fa fa-table"></i>Pago de Cuotas<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="PagarCuota.php">Registar Nuevo Pago</a></li>
                      
                    </ul>
                  </li>

                  <li><a><i class="fa fa-windows"></i>Movimientos<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="ingresos.php">Nuevo Ingreso</a></li>
                      <li><a href="egresos.php">Nuevo Egreso</a></li>
                      <li><a href="donaciones.php">Nueva Donacion</a></li>
                      <li><a href="RegistroMov.php">Registro Ingresos y Egresos</a></li>
                    </ul>
                  </li>

                    <li><a><i class="fa fa-clone"></i>Reportes<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="reportmovegre.php">Reporte Egreso</a></li>
                      <li><a href="reportmovingre.php">Reporte Ingreso</a></li>
                      <li><a href="reporte3.php">Reporte3</a></li>
                    </ul>
                  </li>    

                  <li><a><i class="fa fa-clone"></i>Inscripciones<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="indexo.php">Reinscripcion</a></li>
                    </ul>
                  </li>    
                  
                  
                </ul>
              </div>
              

            </div>
              <div class="contenedor">
      <button id="btn-abrir-popup" class="btn-abrir-popup">Pasar Alumno</button>

  <div class="overlay" id="overlay">
      <div class="popup" id="popup">
        <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
        <h3>¿Desea reinscribir al alumno para el próximo año?</h3>
        <br>
        <form action="">
          <div class="contenedor-inputs">
          </div>
          <input type="submit" class="btn-submit" value="Aceptar">
          <input type="submit" class="btn-submit" value="Cancelar">
        </form>
      </div>
    </div>
  </div>

  <script src="popup.js"></script>
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

              <a data-toggle="tooltip" data-placement="top" title="Logout" href="#">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>