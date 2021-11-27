<?php
include ("conexion.php");

$idsoc=$_POST['idsoc']; 

$alumno=$_POST['alumno']; 

$dni=$_POST['dni']; 

$curso=$_POST['idcurso'];

$cadenad= "INSERT INTO alumnos (idsocio,nombre,dni,idcurso) VALUES ";
   
for ($var=0; $var< count($alumno); $var++){
$cadenad.="('".$idsoc[$var]."', '".$alumno[$var]."', '".$dni[$var]."','".$curso[$var]."'),";
}

$cadena_finald =substr($cadenad, 0, -1);
$cadena_finald.=";";

$qb = mysqli_query($con,$cadena_finald);

if(!$qb){
		die("fallo");

	}

	header("Location: socios.php");
?>