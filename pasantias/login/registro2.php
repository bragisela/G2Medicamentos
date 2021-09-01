<?php
include_once 'conexion2.php';

$sql_leer = 'SELECT * FROM crud';
$gsent = $pdo->prepare($sql_leer);
$gsent->execute();
$resultado = $gsent->fetchAll();

if($_POST){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $clave = $_POST['clave'];

    $sql_agregar = 'INSERT INTO crud (nombre,apellido,clave) VALUES (?,?,?)';
    $agregar = $pdo->prepare($sql_agregar);
    $agregar->execute(array($nombre,$apellido,$clave));
    $agregar = null;
    $pdo = null;
    header('location:../index.php');
  }
  if($_GET){
    $UsID=$_GET['id'];
    $sql_unico='SELECT * FROM crud WHERE id=?';
    $gsent_unico=$pdo->prepare($sql_unico);
    $gsent_unico->execute(array($UsID));
    $resultado_unico=$gsent_unico->fetch();
  }
  ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="col-md-12">    
            <?php if(!$_GET): ?>

          <center><h1>Registrar Nuevo Usuario</h1></center><br>

        <form method="POST">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-sm-6">
              <label for="apellido" class="form-label">Apellido</label>
              <input type="" class="form-control"  name="apellido" placeholder="" value="" required>
              <span id="alerta"></span>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div><br><br><br>
            <span id="passstrength"></span>
            <div class="col-12">
              <label for="clave" class="form-label">Clave </label>
              <input type="" class="form-control" name="clave" value="" required >
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div><br><br><br><br>
          <hr class="my-4">
              <button class="w-100 btn btn-primary btn-lg">Registrar</button>
              <h3><a href="../index.php" >Volver a la Tabla</a>
          </form>
<?php 
endif ?>               
            </div>
        </div>
    </body>
</html>