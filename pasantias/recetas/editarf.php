<?php

include_once '../php/conexion.php';
include_once '../verificacion.php';
$fecha = $_GET['Fecha'];
$apellido = $_GET['Apellido'];
$nombres = $_GET['Nombres'];
$tipo_dni = $_GET['Tipo_DNI'];
$nro_dni = $_GET['Nro_DNI'];
$fecha_naci = $_GET['Fecha_nacimiento'];
$sexo = $_GET['Sexo'];
$diagnostico1 = $_GET['Diagnostico1'];
$diagnostico2 = $_GET['Diagnostico2'];
$cod_medico1 = $_GET['1Cod_medico'];
$cant1 = $_GET['Cantidad1'];
$cod_medico2 = $_GET['2Cod_medico'];
$cant2 = $_GET['Cantidad2'];
$Idusuario = $_GET['Idusuario'];
$id =$_GET['Idrecetas'];

$sql_editar = 'UPDATE recetas SET  Fecha=?,Apellido=?,Nombres=?,Tipo_DNI=?,Nro_DNI=?,Fecha_nacimiento=?,
    Sexo=?,Diagnostico1=?,Diagnostico2=?,1Cod_medico=?,Cantidad1=?,2Cod_medico=?,Cantidad2=?,Idusuario=? WHERE Idrecetas=?';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($fecha,$apellido,$nombres,$tipo_dni,$nro_dni,$fecha_naci,
    $sexo,$diagnostico1,$diagnostico2,$cod_medico1,$cant1,$cod_medico2,$cant2,$Idusuario,$id));

$pdo = null;
$sentencia_editar = null;
header("location:../recetas.php");
