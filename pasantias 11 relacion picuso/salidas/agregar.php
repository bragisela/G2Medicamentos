<?php

include_once '../php/conexion.php';

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
    $agregar->execute(array($fecha,$motivo,$cantidad,$Cod_Medic,$Idusuario));

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

              <h6>Ingrese el Fecha</h6><input type="date" class="form-control mt-3" name="Fecha">
              <h6>Ingrese el Motivo</h6><input type="text" class="form-control mt-3" name="Motivo" >
              <h6>Ingrese el Cantidad</h6><input type="text" class="form-control mt-3" name="Cantidad" >
              <h6>Ingrese el Codigo Medicicamento</h6><input type="text" class="form-control mt-3" name="Cod_medico" >
              <h6>Ingrese el Numero del caps</h6><input type="text" class="form-control mt-3" name="Idusuario" >
              <button class="btn btn-primary mt-3">Agregar</button>
              <center><a class="btn btn-outline-success" href="../salidas.php" >Volver al Datatable</a></center>
            </center>
          </form>
<?php endif ?>

            </div>
        </div>
    </body>
</html>
