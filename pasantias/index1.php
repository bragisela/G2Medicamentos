<?php
include_once 'php/conexion.php';
include_once 'verificacion.php';
if($_POST){
$_SESSION ["eleccionRegister"] = $_POST["eleccion1"];
$eleccionRegister = $_SESSION ['eleccionRegister'];
header("Location:index.php");
}

$sql_leer = 'SELECT Idusuario, Nombre FROM usuarios where Idrol=2';
  $gsent = $pdo->prepare($sql_leer);
  $gsent->execute();
  $resultado = $gsent->fetchAll();




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


<body style="background-image: url('images/cover4.jpg');">
<style>
    .form-select{
    font-size: 20px;
    width: 100%;
  }
</style>
    
<main class="form-signin">
  
    <h1 class="">Seleccionar Caps</h1>
    <div class=" w3l-login-form" style="background: #292b2c;">
        <h2 style="color: white;">Ingrese el nombre del Caps</h2>
    <form action="index1.php" method="POST">

    <div class=" w3l-form-group">
                
              <div class="col-sm-12">                    
              <label for="usuario" class="form-label">Caps:</label>
              <select type="text" id="usuarios" class="form-select" name="eleccion1" onchange="Caps()">
              <option value="0">Seleccione:</option>

                <?php foreach($resultado as $dato): ?>
                    
                    <option value="<?php echo $dato['Idusuario'] ?>"> <?php echo $dato['Nombre'] ?></option>
                    

                <?php endforeach ?>
                </select>
              
            </div>           
           <!--  Referencia: <input type="text" id="eleccion" name=""> -->     
                <br>
       <!--  Nombre: <input type="text" id="name" disabled> -->
                <br>
                <button type="submit" name="submit" style="background: #0275d8;">Ingresar</button>
        </form>
        <p class=" w3l-register-p"><a href="data/index.php" class="register"> Registrar Caps</a></p>
    </div>
    </main>
    <footer>
        <p class="copyright-agileinfo"> &copy; 2021. All Rights Reserved <a href=""></a></p>
    </footer>

</body>
<script src="Datatable/javascripts/js.js"></script>
</html>