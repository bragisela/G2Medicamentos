<?php

include_once 'conexion.php';

$id = $_GET['id'];
$nombre = $_GET['Nombre'];
$genero = $_GET['Genero'];
$apellido = $_GET['Apellido'];
$nick = $_GET['Nick'];

$sql_editar = 'UPDATE usuarios SET Nick=?,Nombre=?,Apellido=?,Genero=? WHERE id=?';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($nick,$nombre,$apellido,$genero,$id));

$pdo = null;
$sentencia_editar = null;
header("location:index.php");