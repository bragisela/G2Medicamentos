<?php
include_once 'conexion.php';
session_start();


if($_POST){
$_SESSION ["usuarioRegister"] = $_POST["usuario"];
$_SESSION ["claveRegister"] = $_POST["clave"];
}

$usuarioRegister = $_SESSION ['usuarioRegister'];
$claveRegister = $_SESSION ['claveRegister'];

//verificacion

$sql ='SELECT usuario,clave FROM registro where usuario=?';
$sentencia= $pdo->prepare($sql);
$sentencia->execute(array($usuarioRegister));
$resultado=$sentencia->fetch();

if(!$resultado['usuario']){
  echo "usuario inexistente";
  header("Location: ../index.php");
  die();
  }
  if(password_verify($claveRegister, $resultado['clave']))
  {
  echo "Usuario: ";
  echo $usuarioRegister;echo('<br>');
  echo "Clave: ";
  echo $claveRegister;echo('<br>');
  echo "Clave Hash: ";
  echo $resultado['clave'];echo('<br>');
  }else{
      header("Location: ../index.php");
  }
  ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Login</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
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
<h1>Subir archivo</h1>
	<form action="sube.php" method="post" enctype="multipart/form-data">
		<input type="file" name="archivo">
		<br><br>
		<button>Subir Archivo</button>
	</form>
<center><div class="col-sm-6">
<br>
<form action="../index.php">
<button class="w-50 btn btn-lg btn-primary" type="submit" >Salir</button>
</form>
</div>
</center>