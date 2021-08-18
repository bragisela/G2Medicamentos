<?php

include_once '../php/conexion.php';

$codigo = $_GET['Codigo'];
$medicamento = $_GET['Medicamento'];
$stockinicial = $_GET['Stock_inicial'];
$id =$_GET['Idstockinicial'];

$sql_editar = 'UPDATE clearing SET  Codigo=?,Medicamento=?,Stock_inicial=? WHERE Idstockinicial=?';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($codigo,$medicamento,$stockinicial,$id));

$pdo = null;
$sentencia_editar = null;
header("location:stockinicial.php");
