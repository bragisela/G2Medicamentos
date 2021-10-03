<?php

include_once '../php/conexion.php';
include_once '../verificacion.php';
$sql_leer = 'SELECT * FROM clsbotiquin';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();

//Agregar
if($_POST){
    $codigo = $_POST['Codigo'];
    $medicamento = $_POST['Medicamento'];
    $stockinicial = $_POST['Stock_inicial'];

    $sql_agregar = "INSERT INTO clsbotiquin (Medicamento,Stock_inicial,Idusuario,Codigo,mes) VALUES (?,?,?,?,?)";
    $agregar = $pdo->prepare($sql_agregar);
    if($rolregister==1){
    $agregar->execute(array($medicamento,$stockinicial,$eleccionRegister,$codigo,$eleccionmes));
    }else{
    $agregar->execute(array($medicamento,$stockinicial,$idregister,$codigo,$eleccionmes));
    }

    $cod=0;
    $sql ="SELECT Codigo,cantidad,clsbotiquin FROM medicamentos where Codigo=$codigo and Idusuario=$idregister and mes=$eleccionmes";
    $sentencia= $pdo->prepare($sql);
    $sentencia->execute(array($cod));
    $resultado=$sentencia->fetch();
    $cod = $resultado['Codigo'];

    $cant=0;
    $cant = $resultado['cantidad'];
    $total = $cant + $stockinicial;
    
    $cantbotiquin=0;
    $cantbotiquin = $resultado['clsbotiquin'];
    $totalbotiquin = $cantbotiquin + $stockinicial;


    if($cod==$codigo)
    {
    $sql = "UPDATE medicamentos set cantidad=?,clsbotiquin=? where Codigo=$cod and Idusuario=$idregister and mes=$eleccionmes";
    $sentencia_editar = $pdo->prepare($sql);
    $sentencia_editar->execute(array($total,$totalbotiquin));
    }else{
    $sql_agregar = 'INSERT INTO medicamentos (Codigo,Medicamento,cantidad,clsbotiquin,Idusuario,mes) VALUES (?,?,?,?,?,?)';
    $agregar = $pdo->prepare($sql_agregar);
    $agregar->execute(array($codigo,$medicamento,$stockinicial,$stockinicial,$idregister,$eleccionmes));
    }




  //cerrar
    $agregar = null;
    $pdo = null;
    header('location:../clsbotiquin.php');
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
              <label for="text" class="form-label">Codigo</label>
              <input type="number" class="form-control bg-light text-dark"  name="Codigo" value="" required>
            </div>

            <div class="col-12">
              <label for="text" class="form-label">Medicamento</label>
              <input type="text" class="form-control bg-light text-dark"  name="Medicamento" value="" required>
            </div>

            <div class="col-12">
              <label for="text" class="form-label">Stock inicial</label>
              <input type="text" class="form-control bg-light text-dark"  name="Stock_inicial" value="" required>
            </div>

            <br>
              <button class="btn btn-primary col-sm-5">Agregar</button>
              <a class="btn btn-primary col-sm-5" href="../clsbotiquin.php" >Volver al Datatable</a></center>
          </form>
          <br>
<?php endif ?>
            </div>
            </div>
        </div>
    </body>
</html>
