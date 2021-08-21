<?php

include_once '../php/conexion.php';

$sql_leer = 'SELECT * FROM clsbotiquin';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();

//Agregar
if($_POST){
    $codigo = $_POST['Codigo'];
    $medicamento = $_POST['Medicamento'];
    $stockinicial = $_POST['Stock_inicial'];

    $sql_agregar = 'INSERT INTO clsbotiquin (Codigo,Medicamento,Stock_inicial) VALUES (?,?,?)';
    $agregar = $pdo->prepare($sql_agregar);
    $agregar->execute(array($codigo,$medicamento,$stockinicial));

  //cerrar
    $agregar = null;
    $pdo = null;
    header('location:clsbotiquin.php');
  }
  if($_GET){
    $UsID=$_GET['Idclsbotiquin'];
    $sql_unico='SELECT * FROM clearing WHERE Idclsbotiquin=?';
    $gsent_unico=$pdo->prepare($sql_unico);
    $gsent_unico->execute(array($UsID));
    $resultado_unico=$gsent_unico->fetch();
  }
  ?>

<!doctype html>
<html lang="en">
  <head>
    .
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

              <h6>Ingrese el codigo</h6><input type="number" class="form-control mt-3" name="Codigo" >
              <h6>Ingrese Medicamento</h6><input type="text" class="form-control mt-3" name="Medicamento" >
              <h6>Ingrese stock inicial</h6><input type="number" class="form-control mt-3" name="Stock_inicial">

              <button class="btn btn-primary mt-3">Agregar</button>
              <center><a class="btn btn-outline-success" href="clsbotiquin.php" >Volver al Datatable</a></center>
            </center>
          </form>
<?php endif ?>

            </div>
        </div>
    </body>
</html>
