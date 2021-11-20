<?php
include_once '../php/conexion.php';
include_once '../verificacion.php';

$datos=$_GET['datos'];

echo $datos;echo('<br>');

$sql_leer="SELECT * FROM clsbotiquin where Idclsbotiquin=$datos";
$gsent=$pdo->prepare($sql_leer);
$gsent->execute();
$clearing=$gsent->fetch();
echo $clearing['Codigo'];
echo $clearing['Stock_inicial'];

$codigo=$clearing['Codigo'];
$cantidad=$clearing['cantidad'];

$sql_leer="SELECT * FROM medicamentos where Codigo=$codigo and Idusuario=$idregister and mes=$eleccionmes";
$gsent=$pdo->prepare($sql_leer);
$gsent->execute();
$medicamento=$gsent->fetch();
$total=$medicamento['cantidad'];
$totalbotiquin=$medicamento['clsbotiquin'];


$total1=$total-$cantidad;
$totalbotiquin1=$totalbotiquin-$cantidad;

$total2=$total+$cantidad;
$totalbotiquin2=$totalbotiquin+$cantidad;

if ($estado==0){
$sql = "UPDATE medicamentos set cantidad=?,clsbotiquin=? where Codigo=$codigo and Idusuario=$idregister and mes=$eleccionmes";
$sentencia_editar = $pdo->prepare($sql);
$sentencia_editar->execute(array($total1,$totalbotiquin1));

$estado=1;

$sql = "UPDATE clsbotiquin set estado=? where Idclsbotiquin=$datos";
$sentencia_editar = $pdo->prepare($sql);
$sentencia_editar->execute(array($estado));

}else{
$sql = "UPDATE medicamentos set cantidad=?,clsbotiquin=? where Codigo=$codigo and Idusuario=$idregister and mes=$eleccionmes";
$sentencia_editar = $pdo->prepare($sql);
$sentencia_editar->execute(array($total2,$totalbotiquin2));

$estado=0;

$sql = "UPDATE clsbotiquin set estado=? where Idclsbotiquin=$datos";
$sentencia_editar = $pdo->prepare($sql);
$sentencia_editar->execute(array($estado));

}




/* $sql_eliminar='UPDATE FROM clsbotiquin WHERE Idclsbotiquin=?';
$eliminar=$pdo->prepare($sql_eliminar);
$eliminar->execute(array($UsID)); */





$agregar=null;
$pdo=null;
header('location:../clearing.php');
