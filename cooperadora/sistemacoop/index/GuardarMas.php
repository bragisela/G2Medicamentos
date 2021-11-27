<?php

include('conexion.php');


$Nro=$_POST['Nro'];
$nombre=$_POST['nomb'];
$documento=$_POST['do'];
$direccion=$_POST['d'];
$telefono=$_POST['t'];
$hijos=$_POST['hijos'];


 $sql ="INSERT INTO socios (idsocio, NroSocio, nombre, dni, direccion, telefono,estado,cantihijos) VALUES ('$Nro','$nombre','$documento','$direccion','$telefono','$hijos')";

    $query9 = mysqli_query($con,$sql);

    if(!$query9){
		die("fallo");

	}

	header("Location: hijos.php");

?>