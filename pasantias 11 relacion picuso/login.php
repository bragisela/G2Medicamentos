<?php
include_once 'php/conexion.php';
session_start();
session_destroy();
$sql_leer='SELECT * FROM usuarios';
$gsent=$pdo->prepare($sql_leer);
$gsent->execute();
$usuarios=$gsent->fetchAll();

if($_POST){
    $nombre = $_POST['Nombre'];
    $apellido =  $_POST['Apellido'];
    $idrol =  $_POST['Idrol'];
    $clave =  $_POST['Clave'];
    $sql ='SELECT * FROM usuarios where Nombre =?';
    $sentencia= $pdo->prepare($sql);
    $sentencia->execute(array($usuario));
    $resultado=$sentencia->fetch();

    if($resultado){
      ?>
      <script>
      window.location="registro.php";
      alert("el usuario ya existe, no se pudo registrar");
      </script>
      <?php
      die();
    }
    $clave=password_hash($clave, PASSWORD_DEFAULT);
    $sql_agregar = 'INSERT INTO usuarios (Nombre,Apellido,Idrol,Clave) VALUES (?,?,?,?)';
    $sentencia_agregar = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($nombre,$apellido,$idrol,$clave));
    $sentencia_agregar = null;
    $pdo = null;
    header('location:login.php');
  }
  if($_GET){
    $idusuario = $_GET['idusuario'];
    $sql_unico = 'SELECT * FROM usuarios WHERE idusuario=?';
    $gsent_unico = $pdo->prepare($sql_unico);
    $gsent_unico->execute(array($idusuario));
    $resultado_unico = $gsent_unico->fetch();
  }
  ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>index</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
<main class="form-signin">
    <br><br><br><br><center><h2>Login</h2><br>
    <form action="../pasantias/index.php" method="POST">
    <div class="form-floating col-sm-6">
      <input type="text" class="form-control" name="Nombre" placeholder="">
      <label for="usuario">nombre</label>
    </div><br>
    <div class="form-floating col-sm-6">
      <input type="password" class="form-control" name="Clave" placeholder="">
      <label for="clave">clave</label>
    </div><br><br>
    <div class="col-sm-6">
    <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar sesion</button><br><br><br>Si no tienes una cuenta...
    <a href="registro.php">Registrarse</a></div>
</main>
  </body>
</html>