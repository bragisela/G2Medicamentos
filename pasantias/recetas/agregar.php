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
    $agregar->execute(array($fecha,$apellido,$nombres,$tipo_dni,$nro_dni,$fecha_naci,$sexo,$diagnostico1,$diagnostico2,$cod_medico1,$cant1,$cod_medico2,$cant2,$Idusuario));


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
              <h6>Ingrese el Apellido</h6><input type="text" class="form-control mt-3" name="Apellido" >
              <h6>Ingrese el Nombres</h6><input type="text" class="form-control mt-3" name="Nombres" >
              <h6>Ingrese el Tipo_DNI</h6><input type="text" class="form-control mt-3" name="Tipo_DNI" >
              <h6>Ingrese el Nro_DNI</h6><input type="text" class="form-control mt-3" name="Nro_DNI" >
              <h6>Ingrese el Fecha_nacimiento</h6><input type="date" class="form-control mt-3" name="Fecha_nacimiento" >
              <h6>Ingrese el Sexo</h6><input type="text" class="form-control mt-3" name="Sexo" >
              <h6>Ingrese el Diagnostico1</h6><input type="text" class="form-control mt-3" name="Diagnostico1" >
              <h6>Ingrese el Diagnostico2</h6><input type="text" class="form-control mt-3" name="Diagnostico2" >
              <h6>Ingrese el 1Cod_medico</h6><input type="text" class="form-control mt-3" name="1Cod_medico" >
              <h6>Ingrese el Cantidad1</h6><input type="text" class="form-control mt-3" name="Cantidad1" >
              <h6>Ingrese el 2Cod_medico</h6><input type="text" class="form-control mt-3" name="2Cod_medico" >
              <h6>Ingrese el Cantidad2</h6><input type="text" class="form-control mt-3" name="Cantidad2" >
              <h6>Ingrese el NCap</h6><input type="text" class="form-control mt-3" name="Idusuario" >
              <button class="btn btn-primary mt-3">Agregar</button>
              <center><a class="btn btn-outline-success" href="../recetas.php" >Volver al Datatable</a></center>
            </center>
          </form>
<?php endif ?>

            </div>
        </div>
    </body>
</html>
