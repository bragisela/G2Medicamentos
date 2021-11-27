<?php


$fechaRegistro=$_POST['fechaRegistro'];
$descripcion=$_POST['descripcion'];
$montodonado=$_POST['montodonado'];
$idsocio=$_POST['idsocio'];
$nombre=$_POST['nombre'];

print $fechaRegistro;
print $descripcion;
print $montodonado;
print $idsocio;
print $nombre;



include('conexion.php');

 $sqlin ="INSERT INTO donacion (idsocio, montodonado, fechaRegistro, nombre, descripcion) VALUES ('$idsocio','$montodonado','$fechaRegistro','$nombre','$descripcion')";

    $donaciones = mysqli_query($con,$sqlin);
   

if(!$donaciones){
echo "<scrip lenguage='javascript'>";
echo "alert('eror');";
echo "wndow.location='donaciones.php';";
echo "</javascript>";
	}else{

$sumar = "UPDATE saldoactual SET SaldoActual=SaldoActual+$montodonado";
	$resultsuma = mysqli_query($con,$sumar);

	header ("Location: reportedonacion.php?idsocio=".urlencode($idsocio));
}