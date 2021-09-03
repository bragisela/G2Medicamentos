<?php
// conexion con la base
include_once 'php/conexion.php';
include_once 'navbar/navbar.php';
include_once 'verificacion.php';

// llamado a la tabla
$sql_leer="SELECT * FROM salidas where Idusuario=$idregister";
$gsent=$pdo->prepare($sql_leer);
$gsent->execute();
$usuarios=$gsent->fetchAll();
?>

<?php
if($idregister==1){

}
?>


  <html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link rel="text/css"href="bocs/style.css">
    <link rel="stylesheet"href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet"/>
    <head>
    <div class="container">
            <div class="row">
                <div class="col-lg">
                    <div class="">
                            <a href="salidas/agregar.php" style="float: right;" class="btn btn-primary">Agregar</a>
                    </div>
                </div>
            </div>
        </div>

  </head>
  <body>
  <body class="sb-nav-fixed" style="background-image: url('images/cover4.jpg');">
    <div class="container">
       <div class="row">
           <div class="col-lg-12">
           <div class="table-responsive">
                <table id="usuarios" class="table table-hover table-dark" style="width:100%">
                <thead>
                     <th class="table-dark">Fecha</th>
                     <th class="table-dark">Cod_medico</th>
                     <th class="table-dark">Cantidad</th>
                     <th class="table-dark">Motivo</th>

                     <th class="table-dark">accion</th>
                     </thead>
                <tbody>
                    <?php
                        foreach($usuarios as $usuario){
                    ?>
                    <tr>
                    <td><?php echo $usuario['Fecha']?></td>
                    <td><?php echo $usuario['Cod_medico']?></td>
                    <td><?php echo $usuario['Cantidad']?></td>
                    <td><?php echo $usuario['Motivo']?></td>


                    <td>
                    <center>
                        <a href="salidas/editar.php?Idsalidas=<?php echo $usuario['Idsalidas']?>"><img src="imagenes/editar.png"/></a>


                        <?php
                        if($rolregister==1){
                        ?> 
                        <a href="salidas/eliminar.php?Idsalidas=<?php echo $usuario['Idsalidas']?>" onclick="return confirm('¿Quiere borrar a esta persona?')"><img src="imagenes/borrar.png"/>
                      </a>
                      <?php
                        }
                      ?>
                    </center>
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
    <script src="Datatables/js.js"></script>
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
