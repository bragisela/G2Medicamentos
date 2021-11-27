<?php


$fechaa=$_POST['fechaa'];
$cuentaE=$_POST['cuentaE'];
$descripE=$_POST['descripE'];
$egresoim=$_POST['egresoim'];



include('conexion.php');

 $sqlim ="INSERT INTO egresos (idegreso, Fecha, idcuenta, descripcion, ImporteE) VALUES (NULL,'$fechaa','$cuentaE','$descripE','$egresoim')";

    $egreso = mysqli_query($con,$sqlim);
   

if(!$egreso){
echo "<scrip lenguage='javascript'>";
echo "alert('eror');";
echo "wndow.location='egresos.php';";
echo "</javascript>";
	}else{

$restar = "UPDATE saldoactual SET SaldoActual=SaldoActual-$egresoim";
	$resultresta = mysqli_query($con,$restar);

	header('Location: RegistroMov.php');
}