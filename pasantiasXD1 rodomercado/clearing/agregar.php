<?php

include_once '../php/conexion.php';
include_once '../verificacion.php';

$sql_leer = 'SELECT * FROM clearing';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();

//Agregar
if($_POST){
    $fecha = $_POST['Fecha'];
    $caps = $_POST['Caps'];
    $Cod_Medic = $_POST['Cod_medico'];
    $cantidad = $_POST['Cantidad'];
    $tipo = $_POST['Tipo'];
    $Otrocaps = $_POST['Otrocaps'];
    $Idusuario = $_POST['Idusuario'];

    $sql_agregar = 'INSERT INTO clearing (Fecha,Caps,Cod_medico,Cantidad,Tipo,Otrocaps,Idusuario) VALUES (?,?,?,?,?,?,?)';
    $agregar = $pdo->prepare($sql_agregar);
    $agregar->execute(array($fecha,$caps,$Cod_Medic,$cantidad,$tipo,$Otrocaps,$idregister));

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
              <label for="date" class="form-label">Fecha</label>
              <input type="date" class="form-control bg-light text-dark"  name="Fecha" value="" required>
            </div>

            <div class="col-12">
              <label for="text" class="form-label">Caps</label>
              <input type="text" class="form-control bg-light text-dark"  name="Caps" value="" required>
            </div>

            <div class="col-12">
              <label for="text" class="form-label">Codigo Medicicamento</label>
              <input type="text" class="form-control bg-light text-dark"  name="Cod_medico" value="" required>
            </div>

            <div class="col-12">
              <label for="text" class="form-label">Cantidad</label>
              <input type="text" class="form-control bg-light text-dark"  name="Cantidad" value="" required>
            </div>

            <div class="col-12">
                    <label for="Tipo" class="form-label">Salida/Entrada</label>
                        <select class="form-control bg-light text-dark" aria-label="form-control bg-light text-dark" name="Tipo" value="" required>
                            <option value="Entrada">Entrada</option>
                            <option value="Salida">Salida</option>
                        </select>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>

            <div class="col-12">
              <label for="text" class="form-label">Recibido/enviado por...</label>
              <input type="text" class="form-control bg-light text-dark"  name="Otrocaps" value="" required>
            </div>

            <div class="col-12">
              <label for="text" class="form-label">Numero de caps</label>
              <input type="text" class="form-control bg-light text-dark"  name="Idusuario" value="" required>
            </div>
            <br>
              <button class="btn btn-primary col-sm-5">Agregar</button>
              <a class="btn btn-primary col-sm-5" href="../clearing.php" >Volver al Datatable</a></center>
          </form>
<?php endif ?>
            </div>
            </div>
        </div>
    </body>
</html>
