<?php
// conexion con la base
include_once 'conexion.php';

// llamado a la tabla
$sql_leer='SELECT * FROM usuarios';
$gsent=$pdo->prepare($sql_leer);
$gsent->execute();
$usuarios=$gsent->fetchAll();

//Agregar
if($_POST){
    
  $nombre = $_POST['Nombre'];
  $genero = $_POST['Genero'];
  $apellido = $_GET['Apellido'];
  $nick = $_GET['Nick'];

  $sql_agregar = 'INSERT INTO usuarios (Nick,Apellido,Nombre,Genero) VALUES (?,?,?,?)';
  $sentencia_agregar = $pdo->prepare($sql_agregar);
  $sentencia_agregar->execute(array($nombre,$genero,$nick,$apellido));


  $sentencia_agregar = null;
  $pdo = null;
  header('location:editarf.php');
}

if($_GET){
  $id = $_GET['id'];
  $sql_unico = 'SELECT * FROM usuarios WHERE id=?';
  $gsent_unico = $pdo->prepare($sql_unico);
  $gsent_unico->execute(array($id));
  $resultado_unico = $gsent_unico->fetch();
}

?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet"href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">
    <center>
   <a href="agregar.php" class="btn btn-success">Agregar</a></center>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
  <body>
    <div class="container">
       <div class="row">
           <div class="col-lg-12">
           <div class="table-responsive">
                <table id="usuarios" class="table table-striped table-bordered" style="width:100%">
                     <thead>
                    <th>ID</th>
                    <th>Nick</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Genero</th>
                    <th>Clave</th>
                    <th>Accion</th>
                </thead>
                <tbody>
                    <?php
                        foreach($usuarios as $usuario){
                    ?>
                        
                    <tr>
                        <td><?php echo $usuario['id']?>
                        <td><?php echo $usuario['Nick']?></td>
                        <td><?php echo $usuario['Nombre']?></td>
                        <td><?php echo $usuario['Apellido']?></td>
                        <td><?php echo $usuario['Genero']?></td>
                        <td><?php echo $usuario['Clave']?></td>
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
    <!-- links js -->
    <script src="Datatables/js.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
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