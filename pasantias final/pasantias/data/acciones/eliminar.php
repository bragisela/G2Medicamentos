<?php
include_once '../../php/conexion.php';
include_once '../../verificacion.php';
$UsID=$_GET['Idusuario'];

$sql_eliminar='DELETE FROM usuarios WHERE Idusuario=?';
$eliminar=$pdo->prepare($sql_eliminar);
$eliminar->execute(array($UsID));

$agregar=null;
$pdo=null;
header('location:../index.php');
