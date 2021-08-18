<?php

include_once '../php/conexion.php';

$Cod_Medic = $_GET['Cod_medico'];
$caps = $_GET['Caps'];
$fecha = $_GET['Fecha'];
$cantidad = $_GET['Cantidad'];
$id =$_GET['Idclearing'];

$sql_editar = 'UPDATE clearing SET  Cod_medico=?,Caps=?,Fecha=?,Cantidad=? WHERE Idclearing=?';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($Cod_Medic,$caps,$fecha,$cantidad,$id));

$pdo = null;
$sentencia_editar = null;
header("location:clearing.php");
