<?php
include_once '../php/conexion.php';


$UsID=$_GET['Idstockinicial'];
$sql_eliminar='DELETE FROM stockinicial WHERE Idstockinicial=?';
$eliminar=$pdo->prepare($sql_eliminar);
$eliminar->execute(array($UsID));



$agregar=null;
$pdo=null;
header('location:stockinicial.php');
