<?php

include_once '../php/conexion.php';
include_once '../verificacion.php';
$sql_leer = 'SELECT * FROM stockinicial';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();

//Agregar
if($_POST){
    $Codigo = $_POST['Codigo'];
    $Medicamento = $_POST['Medicamento'];
    $Stockinicial= $_POST['Stock_inicial'];
    $Idusuario = $_POST['Idusuario'];

    $sql_agregar = 'INSERT INTO stockinicial (Codigo,Medicamento,Stock_inicial,Idusuario) VALUES (?,?,?,?)';
    $agregar = $pdo->prepare($sql_agregar);
    $agregar -> execute(array($Codigo,$Medicamento,$Stockinicial,$Idusuario));

  //cerrar
    $agregar = null;
    $pdo = null;
    header('location:../stockinicial.php');
  }
  if($_GET){
    $UsID=$_GET['Idstockinicial'];
    $sql_unico='SELECT * FROM stockinicial WHERE Idstockinicial=?';
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

              <h6>Ingrese el codigo</h6><input type="number" class="form-control mt-3" name="Codigo">
              <h6>Ingrese el Medicamento</h6><input type="text" class="form-control mt-3" name="Medicamento" >
              <h6>Ingrese el Stock Inicial</h6><input type="text" class="form-control mt-3" name="Stock_inicial" >
              <h6>Ingrese el Numero del caps</h6><input type="text" class="form-control mt-3" name="Idusuario" >
              <button class="btn btn-primary mt-3">Agregar</button>
              <center><a class="btn btn-outline-success" href="../stockinicial.php" >Volver al Datatable</a></center>
            </center>
          </form>
<?php endif ?>

            </div>
        </div>
    </body>
</html>
