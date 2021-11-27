<?php


$Nro=$_POST['Nro'];
$hijos=$_POST['hijos'];
$direccion=$_POST['direccion'];

//Datosdelamadre
$nombreM=$_POST['nombreM'];
$dniM=$_POST['dniM'];
$telefonoM=$_POST['teleM'];

//Datosdelpadre
$nombreP=$_POST['nombreP'];
$dniP=$_POST['dniP'];
$telefonoP=$_POST['teleP'];






include('conexion.php');

$sql ="INSERT INTO socios (idsocio, NroSocio, nombreM, nombreP, dniM, dniP, direccion, telefonoM, telefonoP, cantihijos) VALUES (NULL,'$Nro','$nombreM','$nombreP','$dniM','$dniP','$direccion','$telefonoM','$telefonoP','$hijos')";

    $query = mysqli_query($con,$sql);

    $idr = mysqli_insert_id($con);



    if(!$query){
		die("fallo");

	}else if (isset($query) and ($hijos>0)){

	header("Location: hijos.php?ids=$idr&hijos=$hijos");
	
	}else{

	header("Location: socios.php");
}