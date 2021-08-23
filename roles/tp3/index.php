<?php
include_once 'php/conexion.php';

$sql_leer='SELECT * FROM crud';
$gsent=$pdo->prepare($sql_leer);
$gsent->execute();
$usuarios=$gsent->fetchAll();
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"/> <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
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
  <body><h1><h2>
    <div class="container">
       <div class="row">
           <div class="col-lg-12">
           <div class="href">
                <table id="usuarios" class="hover row-border">
                    <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Clave</th>
                    <th>Edicion</th>
                    </thead>
                 <tbody>
                    <?php
                        foreach($usuarios as $usuario){
                    ?>
                    <tr>
                        <td><?php echo $usuario['id']?>
                        <td><?php echo $usuario['nombre']?></td>
                        <td><?php echo $usuario['apellido']?></td>
                        <td><?php echo $usuario['clave']?></td>
                        <td>
                        <a href="php/editar.php?id=<?php echo $usuario['id']?>"><i class="fas fa-pencil-alt"></i></a>
                        <a href="php/eliminar.php?id=<?php echo $usuario['id']?>" class="float-right" onclick="return confirmar()"><i class="fas fa-trash-alt"></i></a>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
               </table>
           </div>
       </div> 
    </div>
    <h1><a href="php/registro.php">Registrar nuevos usuarios a la tabla</a>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>
    <script src="javascript/main.js">

      function confirmar()
      {
        var respuesta = confirm("Seguro que deseas eliminhar al usuario?")
        if(respuesta==true){
          return true;
        } else {
          return false;
        }
      }
  </script>
  </body>
</html>