<?php
include_once 'php/conexion.php';

$usuario_login = $_POST["usuario"];
$clave_login = $_POST["clave"];

//verificacion

$sql ='SELECT usuario,clave FROM registro where Id=?';
$sentencia= $pdo->prepare($sql);
$sentencia->execute(array($usuario_login));
$resultado=$sentencia->fetch();



if(!$resultado['usuario']){
echo "usuario inexistente";
header("Location: index1.php");
die();
}
if(password_verify($clave_login, $resultado['clave']))
{
//echo $resultado['clave'];echo('<br>');
//echo $clave_login;echo('<br>');
echo "sesion iniciada";
}else{
    header("Location: index1.php");
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Checkout example · Bootstrap v5.0</title>

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
<br>
<a href="editar.php"><button class="w-50 btn btn-lg btn-primary" type="submit" >editar contraseña</button></a>