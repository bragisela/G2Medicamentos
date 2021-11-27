<?php


$fecha=$_POST['fecha'];
$cuenta=$_POST['cuenta'];
$descrip=$_POST['descrip'];
$importein=$_POST['importein'];



include('conexion.php');

 $sqlin ="INSERT INTO ingresos (idingreso, Fecha, idcuenta, descripcion, Importe) VALUES (NULL,'$fecha','$cuenta','$descrip','$importein')";

    $ingreso = mysqli_query($con,$sqlin);
   

if(!$ingreso){
echo "<scrip lenguage='javascript'>";
echo "alert('eror');";
echo "wndow.location='ingresos.php';";
echo "</javascript>";
	}else{

$sumar = "UPDATE saldoactual SET SaldoActual=SaldoActual+$importein";
	$resultsuma = mysqli_query($con,$sumar);

	header('Location: RegistroMov.php');
}