<?php

include_once '../php/conexion.php';

$Cod_Medic = $_GET['Cod_medico'];
$motivo = $_GET['Motivo'];
$fecha = $_GET['Fecha'];
$cantidad = $_GET['Cantidad'];
$id =$_GET['Idsalidas'];

$sql_editar = 'UPDATE salidas SET  Cod_medico=?,motivo=?,Fecha=?,Cantidad=? WHERE Idsalidas=?';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($Cod_Medic,$motivo,$fecha,$cantidad,$id));

$pdo = null;
$sentencia_editar = null;
header("location:../salidas.php");
