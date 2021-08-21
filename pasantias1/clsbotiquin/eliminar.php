<?php
include_once '../php/conexion.php';


$UsID=$_GET['Idclsbotiquin'];
$sql_eliminar='DELETE FROM clsbotiquin WHERE Idclsbotiquin=?';
$eliminar=$pdo->prepare($sql_eliminar);
$eliminar->execute(array($UsID));



$agregar=null;
$pdo=null;
header('location:../clsbotiquin.php');
