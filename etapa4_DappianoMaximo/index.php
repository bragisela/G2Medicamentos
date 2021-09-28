<?php
include_once 'funciones/conexion.php';


$sql_leer='SELECT * FROM registro';
$gsent=$pdo->prepare($sql_leer);
$gsent->execute();
$usuarios=$gsent->fetchAll();


if($_POST){
    $nombre =  $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $clave =  $_POST['clave'];
    $email =  $_POST['email'];
    $localidad =  $_POST['localidad'];
    $estado =  $_POST['estado'];
  
    $clave=password_hash($clave, PASSWORD_DEFAULT);

    $sql_agregar = 'INSERT INTO registro (nombre,apellido,usuario,clave,email,localidad,estado) VALUES (?,?,?,?,?,?,?)';
    $sentencia_agregar = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($nombre,$apellido,$usuario,$clave,$email,$localidad,$estado));
  
    $sentencia_agregar = null;
    $pdo = null;
  
    header('location:index.php');

  
  }

  if($_GET){
    $id_usuario = $_GET['id_usuario'];
    $sql_unico = 'SELECT * FROM registro WHERE id_usuario=?';
    $gsent_unico = $pdo->prepare($sql_unico);
    $gsent_unico->execute(array($id_usuario));
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
    <title>Signin Template · Bootstrap v5.0</title>

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
  
    <img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    
    <form action="funciones/login.php" method="POST">
    <div class="form-floating">
      <input type="text" class="form-control" name="usuario" placeholder="">
      <label for="usuario">usuario</label>
    </div>

    <div class="form-floating">
      <input type="password" class="form-control" name="clave" placeholder="">
      <label for="clave">clave</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">iniciar sesion</button>
    </form>
  
    <a href="registro.php"><button class="w-100 btn btn-lg btn-primary" type="submit" >registrarse</button></a>


    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
  </form>
</main>


    
  </body>
</html>