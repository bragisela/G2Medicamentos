<?php
include_once '../../php/conexion.php';
include_once '../../verificacion.php';
$sql_leer='SELECT * FROM usuarios';
$gsent=$pdo->prepare($sql_leer);
$gsent->execute();
$usuarios=$gsent->fetchAll();



if($_POST){
    $nombre = $_POST['Nombre'];
    $idrol =  $_POST['Idrol'];
    $clave =  $_POST['Clave'];
    $sql ='SELECT * FROM usuarios where Nombre =?';
    $sentencia= $pdo->prepare($sql);
    $sentencia->execute(array($nombre));
    $resultado=$sentencia->fetch();

    if($resultado){
      ?>
      <script>
      window.location="agregar.php";
      alert("el usuario ya existe, no se pudo registrar");
      </script>
      <?php
      die();
    }
    $clave=password_hash($clave, PASSWORD_DEFAULT);
    $sql_agregar = 'INSERT INTO usuarios (Nombre,Idrol,Clave) VALUES (?,?,?)';
    $sentencia_agregar = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($nombre,$idrol,$clave));
    $sentencia_agregar = null;
    $pdo = null;
    header('location:../index.php');
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
    <title>Registro</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">
    <link rel="stylesheet" href="../styles.css" type="text/css">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
    <link rel="shortcut icon" href="../../images/icon.png">

    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="../../css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="../../css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <script src="../../js/validacion.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
      @media (min-width: 768px) {
        .btn-primary {
          width: 25%;
          margin: 5px;
          height: 50px;
          padding: 10px;
        }
      }
      @media (min-height: 812px) {
        .btn-primary {
          width: 25%;
          margin: px;
          height: 100px;
          padding: 10px;
        }
      }
      @media (min-height: 736px) {
        .btn-primary {
          width: 25%;
          margin: px;
          margin-top: 50px;
          height: 100px;
          padding: 10px;
          font-size:40px;
        }
        .form-control {
          width: 100%;
          margin: px;
          height: 100px;
          padding: 10px;
          font-size:20px;
        }
        .form-label {
          font-size:40px;
        }
        .titulo {
          font-size:50px;
        }
      }
      @media (min-height: 1024px) {
        .btn-primary {
          width: 25%;
          margin: px;
          margin-top: 200px;
          height: 300px;
          padding: 10%;
        }
        .form-control {
          width: 200px;
          margin: px;
          height: 100px;
          padding: 10px;
          font-size:20px;
        }
        .form-label {
          font-size:40px;
        }
        .titulo {
          font-size:50px;
        }
      }

    </style>
    <!-- Custom styles for this template -->
    <link href="../../form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
  <h1 style="color: white;">Registrarse</h1>
  <div class=" w3l-login-form" style="background: #292b2c;" >
    <h2 style="color: white;">Complete los datos</h2>
      <div class=" w3l-form-group">
      <?php if(!$_GET): ?>
        <form action="login.php" method="POST">
        <div class="row g-3">
        <div class="col-sm-6">
              <label for="firstName" class="form-label">Nombre</label>
              <input type="text" class="form-control bg-light text-dark" name="Nombre" placeholder="Jose" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Clave</label>
              <input type="password" id="pass" name="Clave" class="form-control bg-light text-dark" onblur="enviardatos(this)" name="nombre" placeholder="Contraseña123" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>


            <div class="col-sm-12">
              <label for="firstName" class="form-label">Idrol</label>
              <select type="text" class="form-select" aria-label="form-control bg-light text-dark" name="Idrol" value="" required>
              <option value="2">Caps</option>
              <option value="1">Admin</option>
              </select>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <hr class="my-4">

          
          <button class=" w3l-register col-sm-12" type="submit" id="submit" style="background: #0275d8;">Registrarse</button>
          <br>
          <center><a class="btn btn-primary col-sm-12" href="../index.php" >Volver</a></center>
          <br>
        </form>
        <?php endif ?>
      </div>
    </div>
    </div>
    <br>
  </main>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../../js/funciones.js"></script>
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="../../form-validation.js"></script>
  </body>
</html>
