<?php

include_once 'php/conexion.php';

$id = $_GET['id'];
$codigostockinicial = $_GET['Codigo'];
$medicamentostockinicial = $_GET['Medicamento'];
$stockinicialstockinicial = $_GET['Stock inicial'];

$sql_editar = 'UPDATE stockinicial SET Codigo=?,Medicamento=?,Stock inicial=? WHERE id=?';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($codigostockinicial,$medicamentostockinicial,$stockinicialstockinicial,$id));

$pdo = null;
$sentencia_editar = null;
header("location:index.php");