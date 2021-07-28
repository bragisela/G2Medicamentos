<?php
include_once 'php/conexionn.php';


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
  
    $sql ='SELECT * FROM registro where usuario =?';
    $sentencia= $pdo->prepare($sql);
    $sentencia->execute(array($usuario));
    $resultado=$sentencia->fetch();

    if($resultado){
      ?>
      <script>
      window.location="registro.php";
      alert("el usuario ya existe");
      </script>
      <?php
      die();
    }


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


<style>

      @media (max-width: 1024px){
      .form-control  {
        width: 100%;
        margin: 15px;
        height: 80px;
        padding: 10px;
        margin-top:30px;
        font-size:25px;
      }
      .btn-primary{
        width: 300px;
        height: 80px;
        margin-top:20px;
        font-size:35px;
        
      }
      .form-label {
          font-size:25px;
        }
      }


      @media (max-width: 768px){
      .form-control  {
        width: 100%;
        margin: 0px;
        height: 70px;
        padding: 10px;
        margin-top:0px;
        font-size:20px;
      }
      .btn-primary{
        width: 300px;
        height: 70px;
        margin-top:0px;
        font-size:35px;
        
      }
      .form-label {
          font-size:20px;
        }  
      }

      @media (max-width: 575px){
      .form-control  {
        width: 90%;
        margin: 0px;
        height: 55px;
        padding: 10px;
        margin-top:0px;
        font-size:17px;
      }
      .col-12{
        width: 91%;
        margin-left:4%;

      }
      .col-11{
        width: 100%;

      }
      .btn-primary{
        width: 100px;
        height: 55px;
        margin-top:0px;
        font-size:20px;
      }
      .form-label {
          font-size:17px;
        }  
      }
      
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  </head>
  <center>
  <body class="bg-light">
  <script src="funcion.js"></script>
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h2>registro</h2>
      </div>
      <div class="col-md-7 col-lg-8">
      <?php if(!$_GET): ?>
        <form action="registro.php" method="POST">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">nombre</label>
              <input type="text" class="form-control" name="nombre" placeholder="ej: pedro" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">apellido</label>
              <input type="text" class="form-control" name="apellido" placeholder="ej: ramires" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">usuario</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" name="usuario" value="" placeholder="ej: pedritoramires08" required>
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">contraseña</label>
              <input type="password" id="pass" class="form-control"  name="clave" placeholder="ej: Pedro1234" value="" required>
              <span id="passstrength"></span>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">repita la contraseña</label>
              <input type="password" id="pass" class="form-control"  name="clave" placeholder="ej: Pedro1234" value="" required>
              <span id="passstrength"></span>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-11">
              <label for="email" class="form-label">Email </label>
              <input type="email" class="form-control" name="email" value="" placeholder="you@example.com" required>
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">localidad</label>
              <input type="text" class="form-control" name="localidad" placeholder="ej: saladillo, buenos aires" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="address" class="form-label">estado</label>
              <input type="text" class="form-control" name="estado" value="" placeholder="activo/inactivo" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>



          <hr class="my-4">

          
          <button class="w-100 btn btn-primary btn-lg" type="submit" >registrarse</button>

        </form>
        <?php endif ?>
      </div>
    </div>
  </main>
      </center>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
   
    <script src="js/forte.js"></script>

    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

      <script src="form-validation.js"></script>
  </body>
</html>