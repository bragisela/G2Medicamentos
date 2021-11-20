<?php
include_once '../php/conexion.php';
include_once '../verificacion.php';

$datos=$_GET['datos'];

$sql_leer="SELECT * FROM stockinicial where Idstockinicial=$datos";
$gsent=$pdo->prepare($sql_leer);
$gsent->execute();
$botiquin=$gsent->fetch();


$codigo=$botiquin['Codigo'];
$cantidad=$botiquin['Stock_inicial'];
$estado=$botiquin["estado"];

echo $codigo;echo "<br>";
echo $cantidad;echo "<br>";
echo $estado;echo "<br>";


$sql_leer="SELECT * FROM medicamentos where Codigo=$codigo and Idusuario=$idregister and mes=$eleccionmes";
$gsent=$pdo->prepare($sql_leer);
$gsent->execute();
$medicamento=$gsent->fetch();

$total=$medicamento['cantidad'];
$total1=$total-$cantidad;
$total2=$total+$cantidad;

echo $total;echo "a<br>";
echo $total1;echo "b<br>";
echo $total2;echo "c<br>";

if ($estado==0){
$sql = "UPDATE medicamentos set cantidad=? where Codigo=$codigo and Idusuario=$idregister and mes=$eleccionmes";
$sentencia_editar = $pdo->prepare($sql);
$sentencia_editar->execute(array($total1));

$estado=1;

$sql = "UPDATE stockinicial set estado=? where Idstockinicial=$datos";
$sentencia_editar = $pdo->prepare($sql);
$sentencia_editar->execute(array($estado));

}else{
$sql = "UPDATE medicamentos set cantidad=? where Codigo=$codigo and Idusuario=$idregister and mes=$eleccionmes";
$sentencia_editar = $pdo->prepare($sql);
$sentencia_editar->execute(array($total2));

$estado=0;

$sql = "UPDATE stockinicial set estado=? where Idstockinicial=$datos";
$sentencia_editar = $pdo->prepare($sql);
$sentencia_editar->execute(array($estado));

}
$agregar=null;
$pdo=null;
header('location:../stockinicial.php');
