<?php

include_once '../php/conexion.php';

$stockinicial = $_POST['Stock_inicial'];
$medicamento = $_POST['Medicamento'];
$codigo = $_POST['Codigo'];
$id = $_GET['Idclsbotiquin'];

$sql_editar = 'UPDATE clsbotiquin SET  Stock_inicial=?,Medicamento=?,Codigo=? WHERE Idclsbotiquin=?';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($stockinicial,$codigo,$medicamento,$id));

$pdo = null;
$sentencia_editar = null;
header("location:clsbotiquin.php");
