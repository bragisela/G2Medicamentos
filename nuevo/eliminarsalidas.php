<?php
include_once 'php/conexion.php';

$UsID=$_GET['id'];
$sql_eliminar='DELETE FROM salidas WHERE id=?';
$eliminar=$pdo->prepare($sql_eliminar);
$eliminar->execute(array($UsID));
$agregar=null;
$pdo=null;
header('location:index.php');