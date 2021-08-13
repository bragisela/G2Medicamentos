<?php

include_once 'php/conexion.php';

$id = $_GET['id'];
$fechasalidas = $_GET['Fecha'];
$codmedicsalidas = $_GET['Cod. Medic.'];
$cantidadsalidas = $_GET['Cantidad'];
$motivosalidas = $_GET['Motivo'];

$sql_editar = 'UPDATE salidas SET Fecha=?,Cod. Medic.=?,Cantidad=?,Motivo=? WHERE id=?';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($fechasalidas,$codmedicsalidas,$cantidadsalidas,$motivosalidas,$id));

$pdo = null;
$sentencia_editar = null;
header("location:index.php");