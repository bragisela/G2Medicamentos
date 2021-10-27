<?php
// conexion con la base
include_once 'php/conexion.php';
include_once 'navbar/navbar.php';
include_once 'verificacion.php';

// llamado a la tabla
if($rolregister==1){
  $sql_leer="SELECT * FROM recetas where Idusuario=$eleccionRegister and mes=$eleccionmes";
  }else{
  $sql_leer="SELECT * FROM recetas where Idusuario=$idregister and mes=$eleccionmes";
  }
$gsent=$pdo->prepare($sql_leer);
$gsent->execute();
$usuarios=$gsent->fetchAll();
?>
  <html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link rel="text/css"href="bocs/style.css">
    <link href="styles.css" rel="stylesheet" />
    <link rel="stylesheet"href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet"/>
    <head>
    <div class="container">
            <div class="row">
                <div class="col-lg">
                    
                </div>
            </div>
        </div>

  </head>
<<<<<<< HEAD
  <body class="sb-nav-fixed" style="background-color: #1a4378; color: white;">
=======
  <body class="sb-nav-fixed" style="background-color: #1a4378;">
>>>>>>> 98ee616171dad8ff5ad2102527dab1c32d316fa5
  <style>    
  #sas3{
    color: #e6e6e6;
    text-shadow: 1px 1px 10px #e6e6e6;
    }

  .sos{
    width: 100%;
    margin-left:0%;

  }
    </style>

    <div class="sos">

           <div class="table-responsive">
           <div class="">
           <?php
                      if($eleccionmes==$idmes){
                      ?>
                            <a href="recetas/agregar.php" style="float: right;" class="btn btn-primary">Agregar</a>
                            <?php
                            
                        }
                      ?>
                    </div>
                <table id="usuarios" class="table table-hover table-dark" style="width:100%">
                <thead>
                <th class="table-dark">Fecha<br> &nbsp</th>
                <th class="table-dark">Apellido<br> &nbsp</th>
                <th class="table-dark">Nombres<br> &nbsp</th>
                <th class="table-dark">Tipo DNI</th>
                <th class="table-dark">Nro. DNI</th>
                <th class="table-dark">Fecha nacimiento</th>
                <th class="table-dark">Sexo<br> &nbsp</th>
                <th class="table-dark">Diagnostico 1</th>
                <th class="table-dark">Diagnostico 2</th>
                <th class="table-dark">Codigo 1</th>
                <th class="table-dark">Cantidad 1</th>
                <th class="table-dark">Codigo 2</th>
                <th class="table-dark">Cantidad 2</th>

                <?php
                      if($eleccionmes==$idmes){
                      ?>
                     <th class="table-dark">accion<br> &nbsp</th>
                     <?php
                        }
                      ?>
                     </thead>
                <tbody>
                    <?php
                        foreach($usuarios as $usuario){
                    ?>
                    <tr>
                    <td><?php echo $usuario['Fecha']?></td>
                    <td><?php echo $usuario['Apellido']?></td>
                    <td><?php echo $usuario['Nombres']?></td>
                    <td><?php echo $usuario['Tipo_DNI']?></td>
                    <td><?php echo $usuario['Nro_DNI']?></td>
                    <td><?php echo $usuario['Fecha_nacimiento']?></td>
                    <td><?php echo $usuario['Sexo']?></td>
                    <td><?php echo $usuario['Diagnostico1']?></td>
                    <td><?php echo $usuario['Diagnostico2']?></td>
                    <td><?php echo $usuario['1Cod_medico']?></td>
                    <td><?php echo $usuario['Cantidad1']?></td>
                    <td><?php echo $usuario['2Cod_medico']?></td>
                    <td><?php echo $usuario['Cantidad2']?></td>


                    <?php
                      if($eleccionmes==$idmes){
                      ?>
                    <td>
                    <center>
                        <a href="recetas/editar.php?Idrecetas=<?php echo $usuario['Idrecetas']?>"><img style="filter: invert(100%);" src="imagenes/edit (1).png"/></a>



                        <a href="recetas/eliminar.php?Idrecetas=<?php echo $usuario['Idrecetas']?>" onclick="return confirm('¿Quiere borrar a esta persona?')"><img style="filter: invert(100%);" src="imagenes/delete.png"/>
                      </a>

                    </center>
                    <?php
                        }
                    ?>
                  </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
           </div>
                      


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>
    <script src="recetas/js.js"></script>
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
