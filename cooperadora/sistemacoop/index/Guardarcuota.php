<?php
include ("conexion.php");

$anio=$_POST['anio']; 

$mes=$_POST['mes']; 

$importe=$_POST['importe']; 

$cadena= "INSERT INTO registrocuotas (anio,mes,importe) VALUES ";
   
for ($i=0; $i< count($anio); $i++){
$cadena.="('".$anio[$i]."', '".$mes[$i]."', '".$importe[$i]."'),";
}

$cadena_final =substr($cadena, 0, -1);
$cadena_final.=";";

$q = mysqli_query($con,$cadena_final);
if(!$q){
		die("fallo");

	}

	header("Location: ValoresCuotas.php");
?>