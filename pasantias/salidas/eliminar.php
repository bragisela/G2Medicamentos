<?php
include_once '../php/conexion.php';
include_once '../verificacion.php';

$datos=$_GET['datos'];

echo $datos;echo('<br>');

$sql_leer="SELECT * FROM salidas where Idsalidas=$datos";
$gsent=$pdo->prepare($sql_leer);
$gsent->execute();
$salidas=$gsent->fetch();
echo $salidas['Codigo'];


$codigo=$salidas['Codigo'];
$cantidad=$salidas['Cantidad'];
$estado=$salidas["estado"];

$sql_leer="SELECT * FROM medicamentos where Codigo=$codigo and Idusuario=$idregister and mes=$eleccionmes";
$gsent=$pdo->prepare($sql_leer);
$gsent->execute();
$medicamento=$gsent->fetch();
$total=$medicamento['cantidad'];
$totalsalidas=$medicamento['salidas'];


$total1=$total+$cantidad;
$totalsalidas1=$totalsalidas-$cantidad;

$total2=$total-$cantidad;
$totalsalidas2=$totalsalidas+$cantidad;

if ($estado==0){
$sql = "UPDATE medicamentos set cantidad=?,salidas=? where Codigo=$codigo and Idusuario=$idregister and mes=$eleccionmes";
$sentencia_editar = $pdo->prepare($sql);
$sentencia_editar->execute(array($total1,$totalsalidas1));

$estado=1;

$sql = "UPDATE salidas set estado=? where Idsalidas=$datos";
$sentencia_editar = $pdo->prepare($sql);
$sentencia_editar->execute(array($estado));

}else{

$sql = "UPDATE medicamentos set cantidad=?,salidas=? where Codigo=$codigo and Idusuario=$idregister and mes=$eleccionmes";
$sentencia_editar = $pdo->prepare($sql);
$sentencia_editar->execute(array($total2,$totalsalidas2));

$estado=0;

$sql = "UPDATE salidas set estado=? where Idsalidas=$datos";
$sentencia_editar = $pdo->prepare($sql);
$sentencia_editar->execute(array($estado));

}




/* $sql_eliminar='UPDATE FROM clsbotiquin WHERE Idclsbotiquin=?';
$eliminar=$pdo->prepare($sql_eliminar);
$eliminar->execute(array($UsID)); */





$agregar=null;
$pdo=null;
header('location:../salidas.php');
