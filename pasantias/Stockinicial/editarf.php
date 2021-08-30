<?php

include_once '../php/conexion.php';
include_once '../verificacion.php';
$codigo = $_GET['Codigo'];
$medicamento = $_GET['Medicamento'];
$stockinicial = $_GET['Stock_inicial'];
$Idusuario = $_GET['Idusuario'];
$id = $_GET['Idstockinicial'];

$sql_editar = 'UPDATE stockinicial SET  Codigo=?,Medicamento=?,Stock_inicial=?,Idusuario=? WHERE Idstockinicial=?';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($codigo,$medicamento,$stockinicial,$Idusuario,$id));

$pdo = null;
$sentencia_editar = null;
header("location:../stockinicial.php");
