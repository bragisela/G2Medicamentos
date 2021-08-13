<?php
// conexion con la base
include_once 'php/conexion.php';

// llamado a la tabla
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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"/> <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    
    <!-- CSS -->
    <link rel="text/css"href="style.css">
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet"href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <a href="agregar.php" ><img src="https://img.icons8.com/ios/50/000000/add--v1.png"></a>
  </head>
  <script type="text/javascript">

function confirmar()
{
  var respuesta = confirm("Seguro que deseas eliminar al usuario?")
    if(respuesta==true){
      return true;
    } 
 else {
  return false;
      }
}
</script>
  <body>
      <div class="container">
       <div class="row">
           <div class="col-lg-12">
           <div class="table-responsive">
                <table id="usuarios" class="table table-striped table-bordered" style="width:100%">
                     <thead>
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
                <th>Edicion</th>
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
                    <td>
                        <a href="editarrecetas.php?id=<?php echo $usuario['id']?>"><i class="fas fa-pencil-alt"></i></a>
                        <a href="eliminarrecetas.php?id=<?php echo $usuario['id']?>" class="float-right" onclick="return confirmar()"><i class="fas fa-trash-alt"></i></a>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
           </div>
       </div> 
    </div>
   
    

    <!--JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>   
    <!-- links js -->
    <script src="javascripts/js.js"></script>
    <!-- datatables -->
    <script src="Datatables/datatables.min.js"></script>
    <!-- Botones -->
    <script src="Datatables/Butons-1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="Datatables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="Datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="Datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="Datatables/Butons-1.7.0/js/buttons.html5.min.js"></script>
    

    
    
  </body>
</html>