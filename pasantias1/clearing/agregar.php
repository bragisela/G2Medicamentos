<?php

include_once '../php/conexion.php';

$sql_leer = 'SELECT * FROM clearing';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();

//Agregar
if($_POST){
    $fecha = $_POST['Fecha'];
    $caps = $_POST['Caps'];
    $cantidad = $_POST['Cantidad'];
    $Cod_Medic = $_POST['Cod_medico'];

    $sql_agregar = 'INSERT INTO clearing (Fecha,Caps,Cantidad,Cod_medico) VALUES (?,?,?,?)';
    $agregar = $pdo->prepare($sql_agregar);
    $agregar->execute(array($fecha,$caps,$cantidad,$Cod_Medic));

  //cerrar
    $agregar = null;
    $pdo = null;
    header('location:../clearing.php');
  }
  if($_GET){
    $UsID=$_GET['Idclearing'];
    $sql_unico='SELECT * FROM clearing WHERE Idclearing=?';
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
    <link rel="stylesheet" href="../bocs/style.css" type="text/css">

<title>Agregar</title>
    </head>

    <center>
    <body>

        <div class="form-signin">
            <div class="col-md-12">
            <?php if(!$_GET): ?>
          <h1>Agregar Personas</h1>
          <form method="POST">

              <h6>Fecha</h6><input type="date" class="form-control mt-3" name="Fecha">
              <h6>Caps</h6><input type="text" class="form-control mt-3" name="Caps" >
              <h6>Cantidad</h6><input type="text" class="form-control mt-3" name="Cantidad" >
              <h6>Codigo Medicicamento</h6><input type="text" class="form-control mt-3" name="Cod_medico" >
              <button class="btn btn-primary mt-3">Agregar</button>
              <center><a class="btn btn-outline-success" href="../clearing.php" >Volver al Datatable</a></center>
            </center>
          </form>
<?php endif ?>

            </div>
        </div>
    </body>
</html>
