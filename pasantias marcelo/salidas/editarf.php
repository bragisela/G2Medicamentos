<?php

include_once '../php/conexion.php';
include_once '../verificacion.php';
$Cod_Medic = $_GET['Cod_medico'];
$motivo = $_GET['Motivo'];
$fecha = $_GET['Fecha'];
$cantidad = $_GET['Cantidad'];
$Idusuario = $_GET['Idusuario'];
$id =$_GET['Idsalidas'];

$sql_editar = 'UPDATE salidas SET  Cod_medico=?,motivo=?,Fecha=?,Cantidad=?,Idusuario=? WHERE Idsalidas=?';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($Cod_Medic,$motivo,$fecha,$cantidad,$Idusuario,$id));

$pdo = null;
$sentencia_editar = null;
header("location:../salidas.php");
