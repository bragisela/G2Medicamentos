<?php
include_once '../php/conexion.php';
include_once '../verificacion.php';

$UsID=$_GET['Idclearing'];
$sql_eliminar='DELETE FROM clearing WHERE Idclearing=?';
$eliminar=$pdo->prepare($sql_eliminar);
$eliminar->execute(array($UsID));



$agregar=null;
$pdo=null;
header('location:../clearing.php');
