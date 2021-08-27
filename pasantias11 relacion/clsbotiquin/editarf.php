<?php

include_once '../php/conexion.php';

$codigo = $_GET['Codigo'];
$medicamento = $_GET['Medicamento'];
$stockinicial = $_GET['Stock_inicial'];
$id = $_GET['Idclsbotiquin'];

$sql_editar = 'UPDATE clsbotiquin SET Codigo=?,Medicamento=?,Stock_inicial=? WHERE Idclsbotiquin=?';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($codigo,$medicamento,$stockinicial,$id));

$pdo = null;
$sentencia_editar = null;
header("location:../clsbotiquin.php");
