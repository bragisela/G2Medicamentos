<?php

include_once 'php/conexion.php';

$id = $_GET['id'];
$fecha = $_GET['Fecha'];
$caps = $_GET['Caps'];
$codmedic = $_GET['Cod. Medic.'];
$cantidad = $_GET['Cantidad'];

$sql_editar = 'UPDATE clearing SET Fecha=?,Caps=?,Cod. Medic.=?,Cantidad=? WHERE id=?';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($fecha,$caps,$codmedic,$cantidad,$id));

$pdo = null;
$sentencia_editar = null;
header("location:index.php");
