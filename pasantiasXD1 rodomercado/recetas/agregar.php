<?php

include_once '../php/conexion.php';
include_once '../verificacion.php';
$sql_leer = 'SELECT * FROM recetas';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();

//Agregar
if($_POST){
    $fecha = $_POST['Fecha'];
    $apellido = $_POST['Apellido'];
    $nombres = $_POST['Nombres'];
    $tipo_dni = $_POST['Tipo_DNI'];
    $nro_dni = $_POST['Nro_DNI'];
    $fecha_naci = $_POST['Fecha_nacimiento'];
    $sexo = $_POST['Sexo'];
    $diagnostico1 = $_POST['Diagnostico1'];
    $diagnostico2 = $_POST['Diagnostico2'];
    $cod_medico1 = $_POST['1Cod_medico'];
    $cant1 = $_POST['Cantidad1'];
    $cod_medico2 = $_POST['2Cod_medico'];
    $cant2 = $_POST['Cantidad2'];
    $Idusuario = $_POST['Idusuario'];

    $sql_agregar = 'INSERT INTO recetas (Fecha,Apellido,Nombres,Tipo_DNI,Nro_DNI,Fecha_nacimiento,
        Sexo,Diagnostico1,Diagnostico2,1Cod_medico,Cantidad1,2Cod_medico,Cantidad2,Idusuario) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
    $agregar = $pdo->prepare($sql_agregar);
    $agregar->execute(array($fecha,$apellido,$nombres,$tipo_dni,$nro_dni,$fecha_naci,$sexo,$diagnostico1,$diagnostico2,$cod_medico1,$cant1,$cod_medico2,$cant2,$idregister));


    //cerrar
    $agregar = null;
    $pdo = null;
    header('location:../recetas.php');
}
  if($_GET){
    $UsID=$_GET['Idrecetas'];
    $sql_unico='SELECT * FROM recetas WHERE Idrecetas=?';
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
              <label for="text" class="form-label">Fecha</label>
              <input type="date" class="form-control bg-light text-dark"  name="Fecha" value="" required>
            </div>
            <div class="col-12">
              <label for="text" class="form-label">Apellido</label>
              <input type="text" class="form-control bg-light text-dark"  name="Apellido" value="" required>
            </div>
            <div class="col-12">
              <label for="text" class="form-label">Nombres</label>
              <input type="text" class="form-control bg-light text-dark"  name="Nombres" value="" required>
            </div>
            <div class="col-12">
              <label for="text" class="form-label">Tipo DNI</label>
              <input type="text" class="form-control bg-light text-dark"  name="Tipo_DNI" value="" required>
            </div>
            <div class="col-12">
              <label for="text" class="form-label">Nro. DNI</label>
              <input type="text" class="form-control bg-light text-dark"  name="Nro_DNI" value="" required>
            </div>
            <div class="col-12">
              <label for="text" class="form-label">Fecha de nacimiento</label>
              <input type="date" class="form-control bg-light text-dark"  name="Fecha_nacimiento" value="" required>
            </div>
            <div class="col-12">
              <label for="text" class="form-label">Sexo</label>
              <input type="text" class="form-control bg-light text-dark"  name="Sexo" value="" required>
            </div>
            <div class="col-12">
              <label for="text" class="form-label">Diagnostico 1</label>
              <input type="text" class="form-control bg-light text-dark"  name="Diagnostico1" value="" required>
            </div>
            <div class="col-12">
              <label for="text" class="form-label">Diagnostico 2</label>
              <input type="text" class="form-control bg-light text-dark"  name="Diagnostico2" value="" required>
            </div>
            <div class="col-12">
              <label for="text" class="form-label">Cod. medico 1</label>
              <input type="text" class="form-control bg-light text-dark"  name="1Cod_medico" value="" required>
            </div>
            <div class="col-12">
              <label for="text" class="form-label">Cantidad 1</label>
              <input type="text" class="form-control bg-light text-dark"  name="Cantidad1" value="" required>
            </div>
            <div class="col-12">
              <label for="text" class="form-label">Cod. medico 2</label>
              <input type="text" class="form-control bg-light text-dark"  name="2Cod_medico" value="" required>
            </div>
            <div class="col-12">
              <label for="text" class="form-label">Cantidad 2</label>
              <input type="text" class="form-control bg-light text-dark"  name="Cantidad2" value="" required>
            </div>
            <br>
              <button class="btn btn-primary col-sm-5">Agregar</button>
              <a class="btn btn-primary col-sm-5" href="../recetas.php" >Volver al Datatable</a></center>
          </form>
<?php endif ?>
            </div>
            </div>
        </div>
    </body>
</html>
