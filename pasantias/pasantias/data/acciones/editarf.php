<?php
include_once '../../php/conexion.php';
include_once '../../verificacion.php';

$idrol = $_GET['Idrol'];
$nombre = $_GET['Nombre'];
$clave =  $_GET['Clave'];
$idusuario = $_GET['Idusuario'];

$clave=password_hash($clave, PASSWORD_DEFAULT);
$sql_editar = 'UPDATE usuarios SET Idrol=?,Nombre=?,Clave=? WHERE Idusuario=?';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($idrol,$nombre,$clave,$idusuario));

$pdo = null;
$sentencia_editar = null;
header("location:../index.php");
