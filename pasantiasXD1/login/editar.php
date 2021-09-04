<?php
include_once 'conexion.php';
session_start();
if($_POST){

$usuario = $_SESSION ['usuarioRegister'];
$clave = $_SESSION ['claveRegister'];
$claveConfirmar = $_POST ["clave1"];
$clave1 = $_POST ["clave"];
$clave2 = $_POST ["clave2"];

if($clave==$claveConfirmar){
    if($clave1==$clave2){
      $clave1=password_hash($clave1, PASSWORD_DEFAULT);
      $sql_editar = 'UPDATE usuarios SET clave=? WHERE usuario=?';
      $sentencia_editar = $pdo->prepare($sql_editar);
      $sentencia_editar->execute(array($clave1,$usuario));

      $sentencia_agregar = null;
      $pdo = null;

      header("Location: editar.php");
    }else{
        ?>
    <script>
    alert("las nuevas contraseñas son distintas");
    </script>
    <?php
    }
  }else{
    ?>
    <script>
    alert("la contraseña actual es incorrecta");
    </script>
    <?php
  }
}
$usuario = $_SESSION ['usuarioRegister'];
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Editar Contraseña</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">
<center><br><br><br><br>
<form method="POST">
<div class="form-floating col-sm-6">
      <input type="text" class="form-control" name="clave1" placeholder="">
      <label for="">Confirme su Contraseña</label>
    </div><br>    
    <div class="form-floating col-sm-6">
      <input type="text" class="form-control" name="clave" placeholder="">
      <label for="">Nueva Contraseña</label>
    </div><br>    
    <div class="form-floating col-sm-6">
      <input type="text" class="form-control" name="clave2" placeholder="">
      <label for="">Confirme su Nueva Contraseña</label>
    </div><br>
    <br>
    <button class="w-50 btn btn-lg btn-primary" type="submit">Reestablecer Contraseña</button>
    </form>
    <form action="../index.php">
    <button class="w-50 btn btn-lg btn-primary" type="submit" >Salir</button>
    </form>
    </html>