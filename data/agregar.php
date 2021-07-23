<?php

include_once 'conexion.php';

$sql_leer = 'SELECT * FROM usuarios';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();

//var_dump($resultado);

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
    
<title>agregar</title>
    </head>
    <body>
        <div class="container">
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
          </form>
<?php endif ?>
                
            </div>
        </div>
    </body>
</html>