<?php


$RazonSocial=$_POST['RSProve'];
$cuitProve=$_POST['cuitProve'];
$direccionProve=$_POST['direccionProve'];
$telefonoprove=$_POST['telefonoProve'];

include('conexion.php');

$sqlProve ="INSERT INTO proveedores (idProveedor, RazonSocial, Cuit, direccion,telefono) VALUES (NULL,'$RazonSocial','$cuitProve','$direccionProve','$telefonoprove')";

    $queryProve = mysqli_query($con,$sqlProve);


    if(!$queryProve){
		die("fallo");

	}

	header("Location: proveedores.php");
