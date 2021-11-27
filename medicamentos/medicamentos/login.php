<?php
include_once 'php/conexion.php';
session_start();
session_destroy();
session_start();
$sql_leer='SELECT * FROM usuarios';
$gsent=$pdo->prepare($sql_leer);
$gsent->execute();
$usuarios=$gsent->fetchAll();

$_SESSION ["eleccionmes"] = date("m");
$eleccionmes = $_SESSION ['eleccionmes'];



if($_POST){
    $nombre = $_POST['Nombre'];

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
    $sql_agregar = 'INSERT INTO usuarios (Nombre,Idrol,Clave) VALUES (?,?,?)';
    $sentencia_agregar = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($nombre,$idrol,$clave));
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
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pagina principal</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, 
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <link rel="shortcut icon" href="images/icon.png">
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

</head>


<body style="background-color: #1a4378;">

<main class="form-signin">
    <h1>Iniciar Sesion</h1>
    <div class=" w3l-login-form" style="background: #292b2c;">
        <h2 style="color: white;">Ingrese</h2>
        <form id="form" action="index.php" method="POST">

            <div class=" w3l-form-group">
                <label for="usuario">Nombre del Caps/Usuario Admin:</label>
                <div class="group">
                    <i class="fas fa-user" style="color: #0275d8;"></i>
                    <input type="text" class="form-control" placeholder="Nombre del Caps/Usuario Admin:" name="Nombre"/>
                </div>
            </div>
            <div class=" w3l-form-group">
                <label for="usuario">Contraseña:</label>
                <div class="group">
                    <i class="fas fa-unlock" style="color: #0275d8;"></i>
                    <input type="password" class="form-control" placeholder="Contraseña" name="Clave"/>
                </div>
            </div>
            <div class="forgot">
                
            </div>
            <button type="submit" name="submit" value="login" style="background: #0275d8;">Ingresar</button>
        </form>
        
    </div>
    </main>
    <footer>
        <p class="copyright-agileinfo"> &copy; 2021. All Rights Reserved <a href=""></a></p>
    </footer>

</body>

</html>