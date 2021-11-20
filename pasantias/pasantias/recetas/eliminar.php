<?php
include_once '../php/conexion.php';
include_once '../verificacion.php';
$UsID=$_GET['Idrecetas'];
$sql_eliminar='DELETE FROM recetas WHERE Idrecetas=?';
$eliminar=$pdo->prepare($sql_eliminar);
$eliminar->execute(array($UsID));



$agregar=null;
$pdo=null;
header('location:../recetas.php');
