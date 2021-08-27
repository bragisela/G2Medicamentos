<?php
include_once '../php/conexion.php';


$UsID=$_GET['Idsalidas'];
$sql_eliminar='DELETE FROM salidas WHERE Idsalidas=?';
$eliminar=$pdo->prepare($sql_eliminar);
$eliminar->execute(array($UsID));



$agregar=null;
$pdo=null;
header('location:../salidas.php');
