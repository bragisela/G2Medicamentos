<?php
    define('DB_HOST','localhost');
	define('DB_USER','root');
	define('DB_PASS','');
	define('DB_NAME','mascotas');
	# conectare la base de datos
    $con=mysqli_connect('localhost', 'root', '', 'sistemacop');
    
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    } 
?>