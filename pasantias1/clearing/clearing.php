<?php
// conexion con la base
include_once '../php/conexion.php';

// llamado a la tabla
$sql_leer='SELECT * FROM clearing';
$gsent=$pdo->prepare($sql_leer);
$gsent->execute();
$usuarios=$gsent->fetchAll();
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link rel="text/css"href="../bocs/style.css">
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet"href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <a href="agregar.php" ><img src="https://img.icons8.com/ios/50/000000/add--v1.png"></a>
  </head>
  <body>
    <div class="container">
       <div class="row">
           <div class="col-lg-12">
           <div class="table-responsive">
                <table id="usuarios" class="table table-striped table-bordered" style="width:100%">
                     <thead>
                     <th>Fecha</th>
                     <th>Caps</th>
                     <th>Cod. Medic.</th>
                     <th>Cantidad</th>
                     <th>accion</th>
                     
                     </thead>
                <tbody>
                    <?php
                        foreach($usuarios as $usuario){
                    ?>
                    <tr>
                    <td><?php echo $usuario['Fecha']?></td>
                    <td><?php echo $usuario['Caps']?></td>
                    <td><?php echo $usuario['Cod_Medic']?></td>
                    <td><?php echo $usuario['Cantidad']?></td>
                    
                    <td>
                          <center>
                        <a href="editar.php?id=<?php echo $usuario['id']?>"><img src="https://img.icons8.com/material-outlined/24/000000/edit-file--v2.png"/></a>
                        <a href="eliminar.php?id=<?php echo $usuario['id']?>" onclick="return confirm('¿Quiere borrar a esta persona?')"><img src="https://img.icons8.com/material-outlined/24/000000/delete-sign.png"/>
                      </a></center>
                  </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
           </div>
       </div> 
    </div>
   
    

    <script src="../Datatables/js.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- datatables -->
    <script src="../Datatables/datatables.min.js"></script>
    <!-- Botones -->
    <script src="../Datatables/Butons-1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="../Datatables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="../Datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="../Datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="../Datatables/Butons-1.7.0/js/buttons.html5.min.js"></script>
  </body>

    
    
  </body>
</html>