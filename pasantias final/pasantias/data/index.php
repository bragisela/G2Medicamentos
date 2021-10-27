<?php
// conexion con la base
include_once '../php/conexion.php';

// llamado a la tabla
$sql_leer='SELECT * FROM usuarios';
$gsent=$pdo->prepare($sql_leer);
$gsent->execute();
$usuarios=$gsent->fetchAll();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Registro</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
    <link rel="shortcut icon" href="../../images/icon.png">

    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="../../css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="../../css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->

 

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <script src="../../js/validacion.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      @media (min-width: 768px) {
        .btn-primary {
          width: 25%;
          margin: 5px;
          height: 50px;
          padding: 10px;
        }
      }
      @media (min-height: 812px) {
        .btn-primary {
          width: 25%;
          margin: px;
          height: 100px;
          padding: 10px;
        }
      }
      @media (min-height: 736px) {
        .btn-primary {
          width: 25%;
          margin: px;
          margin-top: 50px;
          height: 100px;
          padding: 10px;
          font-size:40px;
        }
        .form-control {
          width: 100%;
          margin: px;
          height: 100px;
          padding: 10px;
          font-size:20px;
        }
        .form-label {
          font-size:40px;
        }
        .titulo {
          font-size:50px;
        }
      }
      @media (min-height: 1024px) {
        .btn-primary {
          width: 25%;
          margin: px;
          margin-top: 200px;
          height: 300px;
          padding: 10%;
        }
        .form-control {
          width: 200px;
          margin: px;
          height: 100px;
          padding: 10px;
          font-size:20px;
        }
        .form-label {
          font-size:40px;
        }
        .titulo {
          font-size:50px;
        }
      }

    </style>
    <!-- Custom styles for this template -->
    <link href="../../form-validation.css" rel="stylesheet">
  </head>
  <body style="background-color: #1a4378;">

   <link rel="stylesheet"href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
   <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet"/>
 </head>
  <body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
       <div class="row">
           <div class="col-lg-12">
           <div class="">
           <a href="../index1.php" class="btn btn-success" style="float: right; background-color: #0275d8; border-color: #0275d8;">Ir atras</a>

           <a href="acciones/agregar.php" class="btn btn-success" style="float: right; background-color: #0275d8; border-color: #0275d8;">Agregar</a>
                      
                    </div>
           
                <table id="usuarios" class="table table-hover table-dark" style="width:100%">
                     <thead>
                    <th class="table-dark">Rol</th>
                    <th class="table-dark">Nombre</th>

                    <th class="table-dark">Accion</th>
                </thead>
                <tbody>
                    <?php
                        foreach($usuarios as $usuario){
                    ?>

                    <tr>

                        <td><?php
                        $rol=$usuario['Idrol'];
                        if($rol==1){
                          $rol="Admin";
                        }else{
                          $rol="Caps";
                        }
                        
                        echo $rol?></td>
                        <td><?php echo $usuario['Nombre']?></td>


                        <td>
                          <center>
                        <a href="acciones/editar.php?Idusuario=<?php echo $usuario['Idusuario']?>"><img style="filter: invert(100%);" src="../imagenes/edit (1).png"/></a>
                        <a href="acciones/eliminar.php?Idusuario=<?php echo $usuario['Idusuario']?>" onclick="return confirm('¿Quiere borrar a esta persona?')"><img style="filter: invert(100%);" src="../imagenes/delete.png"/>
                      </a></td></center>
                  </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
           </div>
       </div>
       </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>

    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- links js -->
    <script src="js.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- datatables -->
    <script src="DataTables/datatables.min.js"></script>
    <!-- Botones -->
    <script src="DataTables/Butons-1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="DataTables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="DataTables/Butons-1.7.1/js/buttons.html5.min.js"></script>
  </body>


</html>
