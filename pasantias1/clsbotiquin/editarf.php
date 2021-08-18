<?php

include_once '../php/conexion.php';

$stockinicial = $_POST['Stockinicial'];
$medicamento = $_POST['Medicamento'];
$codigo = $_POST['Codigo'];
$id =$_GET['id'];

$sql_editar = 'UPDATE clsbotiquin SET  Stockinicial=?,Medicamento=?,Codigo=? WHERE id=?';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($stockinicial,$Medicamento,$codigo,$id));

$pdo = null;
$sentencia_editar = null;
header("location:clsbotiquin.php");
