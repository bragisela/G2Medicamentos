<?php
include_once 'php/conexion.php';
include_once 'verificacion.php';
if($_POST){
$_SESSION ["eleccionRegister"] = $_POST["eleccion"];
$eleccionRegister = $_SESSION ['eleccionRegister'];
header("Location:index.php");
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


<body style="background-image: url('images/cover4.jpg');">
    
<main class="form-signin">
  
    <h1 class="">maradona</h1>
    <div class=" w3l-login-form" style="background: #292b2c;">
        <h2 style="color: white;">Ingrese</h2>
    <form action="index1.php" method="POST">

    <div class=" w3l-form-group">
                <label for="usuario">Caps:</label>
                <div class="group">
                    <i class="fas fa-user" style="color: #0275d8;"></i>
                    <input type="text" class="form-control" placeholder="Caps" name="eleccion"/>
                </div>
                <br>
                <br>
                <button type="submit" name="submit" style="background: #0275d8;">Ingresar</button>
        </form>
       
    </div>
    </main>
    <footer>
        <p class="copyright-agileinfo"> &copy; 2021. All Rights Reserved <a href=""></a></p>
    </footer>

</body>

</html>