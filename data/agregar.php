<?php

include_once 'conexion.php';

$sql_leer = 'SELECT * FROM usuarios';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();

//Agregar
if($_POST){
    $nick =  $_POST['Nick'];
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $genero = $_POST['Genero'];
    $clave = $_POST['Clave'];

    $sql_agregar = 'INSERT INTO usuarios (Nick,Nombre,Apellido,Genero,Clave) VALUES (?,?,?,?,?)';
    $agregar = $pdo->prepare($sql_agregar);
    $agregar->execute(array($nick,$nombre,$apellido,$genero,$clave));
  
  //cerrar
    $agregar = null;
    $pdo = null;
    header('location:index.php');
  }
  if($_GET){
    $UsID=$_GET['id'];
    $sql_unico='SELECT * FROM usuarios WHERE id=?';
    $gsent_unico=$pdo->prepare($sql_unico);
    $gsent_unico->execute(array($UsID));
    $resultado_unico=$gsent_unico->fetch();
  }
  ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="bocs/style.css" type="text/css">
    
<title>agregar</title>
    </head>
   
    <center>
    <body>
   
        <div class="form-signin">
            <div class="col-md-12">    
            <?php if(!$_GET): ?>
          <h1>Agregar Personas</h1>
          <form method="POST">
            
              <h6>Nick</h6><input type="text" class="form-control mt-3" name="Nick">
              <h6>Nombre</h6><input type="text" class="form-control mt-3" name="Nombre">
              <h6>Apellido</h6><input type="text" class="form-control mt-3" name="Apellido">
              <h6>Genero</h6><input type="text" class="form-control mt-3" name="Genero">
              <h6>Clave</h6><input type="text" class="form-control mt-3" name="Clave">
              <button class="btn btn-primary mt-3">Agregar</button>
              <center><a class="btn btn-outline-success" href="index.php" >Volver al Datatable</a></center>
            </center>
          </form>
<?php endif ?>
                
            </div>
        </div>
    </body>
</html>