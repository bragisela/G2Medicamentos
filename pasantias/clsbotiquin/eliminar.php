<?php
include_once '../php/conexion.php';
include_once '../verificacion.php';

$datos=$_GET['datos'];

echo $datos;echo('<br>');

$sql_leer="SELECT * FROM clsbotiquin where Idclsbotiquin=$datos";
$gsent=$pdo->prepare($sql_leer);
$gsent->execute();
$botiquin=$gsent->fetch();
echo $botiquin['Codigo'];
echo $botiquin['Stock_inicial'];

$codigo=$botiquin['Codigo'];
$cantidad=$botiquin['Stock_inicial'];

$_SESSION ["estado"] = $botiquin["estado"];
$estado=$_SESSION ["estado"];

$sql_leer="SELECT * FROM medicamentos where Codigo=$codigo and Idusuario=$idregister and mes=$eleccionmes";
$gsent=$pdo->prepare($sql_leer);
$gsent->execute();
$medicamento=$gsent->fetch();
$total1=$medicamento['cantidad'];
$totalbotiquin1=$medicamento['clsbotiquin'];


$total=$total1-$cantidad;
$totalbotiquin=$totalbotiquin1-$cantidad;

$total2=$total1+$cantidad;
$totalbotiquin2=$totalbotiquin1+$cantidad;

if ($estado==0){
$sql = "UPDATE medicamentos set cantidad=?,clsbotiquin=? where Codigo=$codigo and Idusuario=$idregister and mes=$eleccionmes";
$sentencia_editar = $pdo->prepare($sql);
$sentencia_editar->execute(array($total,$totalbotiquin));

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
header('location:../clsbotiquin.php');
