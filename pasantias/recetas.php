<?php
include_once 'php/conexion.php';


$sql_leer='SELECT * FROM recetas';
$gsent=$pdo->prepare($sql_leer);
$gsent->execute();
$usuarios=$gsent->fetchAll();
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"/> <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"> 
  </head>
  <body>
    <div class="container">
       <div class="row">
           <div class="col-lg-12">
            <table id="tablaUsuarios" class="hover row-border">
                <thead class="text-center">
                <th>Fecha</th>
                <th>Apellido</th>
                <th>Nombres</th>
                <th>Tipo DNI</th>
                <th>Nro. DNI</th>
                <th>Fecha nacimiento</th>
                <th>Sexo</th>
                <th>Diagnostico 1</th>
                <th>Diagnostico 2</th>
                <th>1. Cod. Medic.</th>
                <th>Cantidad 1</th>
                <th>2. Cod. Medic.</th>
                <th>Cantidad 2</th>
                </thead>
                <tbody>
                    <?php
                        foreach($usuarios as $usuario){
                    ?>
                    <tr>
                    <td><?php echo $usuario['Fecha']?></td>
                    <td><?php echo $usuario['Apellido']?></td>
                    <td><?php echo $usuario['Nombres']?></td>
                    <td><?php echo $usuario['Tipo DNI']?></td>
                    <td><?php echo $usuario['Nro. DNI']?></td>
                    <td><?php echo $usuario['Fecha nacimiento']?></td>
                    <td><?php echo $usuario['Sexo']?></td>
                    <td><?php echo $usuario['Diagnostico 1']?></td>
                    <td><?php echo $usuario['Diagnostico 2']?></td>
                    <td><?php echo $usuario['1. Cod. Medic.']?></td>
                    <td><?php echo $usuario['Cantidad 1']?></td>
                    <td><?php echo $usuario['2. Cod. Medic.']?></td>
                    <td><?php echo $usuario['Cantidad 2']?></td>
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
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>  
    <script src="popper/popper.min.js"> </script>
    <script src="JavaScript/main.js"></script>                
    <script src="datatables.min.js"></script>
    <script src="Buttons-1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="JSZip-2.5.0/jszip.min.js"></script>    
    <script src="pdfmake-0.1.36/pdfmake.min.js"></script>   
    <script src="pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="Buttons-1.7.0/js/buttons.html5.min.js"></script>
  </body>
</html>