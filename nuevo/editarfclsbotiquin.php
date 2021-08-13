<?php

include_once 'php/conexion.php';

$id = $_GET['id'];
$codigoclsbotiquin = $_GET['Codigo'];
$medicamentoclsbotiquin = $_GET['Medicamento'];
$stockinicialclsbotiquin = $_GET['Stock inicial'];

$sql_editar = 'UPDATE clsbotiquin SET Codigo=?,Medicamento=?,Stock inicial=? WHERE id=?';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($codigoclsbotiquin,$medicamentoclsbotiquin,$stockinicialclsbotiquin,$id));

$pdo = null;
$sentencia_editar = null;
header("location:index.php");