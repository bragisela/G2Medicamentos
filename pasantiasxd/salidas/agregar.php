<?php

include_once '../php/conexion.php';
include_once '../verificacion.php';
$sql_leer = 'SELECT * FROM salidas';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();

//Agregar
if($_POST){
    $fecha = $_POST['Fecha'];
    $motivo = $_POST['Motivo'];
    $cantidad = $_POST['Cantidad'];
    $Cod_Medic = $_POST['Cod_medico'];
    $Idusuario = $_POST['Idusuario'];

    $sql_agregar = 'INSERT INTO salidas (Fecha,Motivo,Cantidad,Cod_medico,Idusuario) VALUES (?,?,?,?,?)';
    $agregar = $pdo->prepare($sql_agregar);
    $agregar->execute(array($fecha,$motivo,$cantidad,$Cod_Medic,$idregister));

  //cerrar
    $agregar = null;
    $pdo = null;
    header('location:../salidas.php');
  }
  if($_GET){
    $UsID=$_GET['Idsalidas'];
    $sql_unico='SELECT * FROM salidas WHERE Idsalidas=?';
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
    <link rel="stylesheet" href="../styles.css" type="text/css">

<title>Agregar</title>
    </head>

    <center>
    <body class="sb-nav-fixed" style="background-image: url('../images/cover4.jpg');">
      <br>
        <div class="form-signin">
            <div class="col-md-12">
            <?php if(!$_GET): ?>
          <h1>Agregar Personas</h1>
          <form method="POST">
          <div class="row g-3">

          <div class="col-12">
              <label for="date" class="form-label">Ingrese el Fecha</label>
              <input type="date" class="form-control bg-light text-dark"  name="Fecha" value="" required>
            </div>

            <div class="col-12">
              <label for="text" class="form-label">Ingrese el Codigo Medicicamento</label>
              <input type="text" class="form-control bg-light text-dark"  name="Cod_medico" value="" required>
            </div>

            <div class="col-12">
              <label for="text" class="form-label">Ingrese el Cantidad</label>
              <input type="text" class="form-control bg-light text-dark"  name="Cantidad" value="" required>
            </div>

            
            <div class="col-12">
              <label for="text" class="form-label">Ingrese el Motivo</label>
              <input type="text" class="form-control bg-light text-dark"  name="Motivo" value="" required>
            </div>

            <br>
              <button class="btn btn-primary col-sm-5">Agregar</button>
              <a class="btn btn-primary col-sm-5" href="../salidas.php" >Volver al Datatable</a></center>
          </form>
<?php endif ?>
            </div>
            </div>
        </div>
    </body>
</html>
