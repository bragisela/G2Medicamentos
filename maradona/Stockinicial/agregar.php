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


    $sql_agregar = 'INSERT INTO stockinicial (Codigo,Medicamento,Stock_inicial,Idusuario) VALUES (?,?,?,?)';
    $agregar = $pdo->prepare($sql_agregar);
    if($rolregister==1){
    $agregar -> execute(array($Codigo,$Medicamento,$Stockinicial,$eleccionRegister));
    }else{
    $agregar -> execute(array($Codigo,$Medicamento,$Stockinicial,$idregister));
    }
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
    <link rel="stylesheet" href="../styles.css" type="text/css">

<title>Agregar</title>
    </head>

    <center>
    <body class="sb-nav-fixed" style="background-image: url('../images/cover4.jpg');">
      <br>
        <div class="form-signin">
            <div class="col-md-12">
            <?php if(!$_GET): ?>
          <h1>agregar</h1>
          <form method="POST">
          <div class="row g-3">

          <div class="col-12">
              <label for="text" class="form-label">Ingrese el codigo</label>
              <input type="text" class="form-control bg-light text-dark"  name="Codigo" value="" required>
            </div>
            <div class="col-12">
              <label for="text" class="form-label">Ingrese el Medicamento</label>
              <input type="text" class="form-control bg-light text-dark"  name="Medicamento" value="" required>
            </div>
            <div class="col-12">
              <label for="text" class="form-label">Ingrese el Stock Inicial</label>
              <input type="text" class="form-control bg-light text-dark"  name="Stock_inicial" value="" required>
            </div>

            <br>
              <button class="btn btn-primary col-sm-5">Agregar</button>
              <a class="btn btn-primary col-sm-5" href="../stockinicial.php" >Volver al Datatable</a></center>
          </form>
<?php endif ?>
            </div>
            </div>
        </div>
    </body>
</html>
