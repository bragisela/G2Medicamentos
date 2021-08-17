<?php

include_once '../php/conexion.php';

$Cod_Medic = $_GET['Cod_Medic'];
$caps = $_GET['Caps'];
$fecha = $_GET['Fecha'];
$cantidad = $_GET['Cantidad'];
$id =$_GET['id'];

$sql_editar = 'UPDATE clearing SET  Cod_Medic=?,Caps=?,Fecha=?,Cantidad=? WHERE id=?';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($Cod_Medic,$caps,$fecha,$cantidad,$id));

$pdo = null;
$sentencia_editar = null;
header("location:../index.php");
