<?php

include_once 'conexion.php';

$id = $_GET['id'];
$fecharecetas = $_GET['Fecha'];
$apellidorecetas = $_GET['Apellido'];
$nombresrecetas = $_GET['Nombres'];
$tipodnirecetas = $_GET['Tipo DNI'];
$nrodnirecetas = $_GET['Nro. DNI'];
$fechanacimientorecetas = $_GET['Fecha nacimiento'];
$sexorecetas= $_GET['Sexo'];
$diagnosticounorecetas = $_GET['Diagnostico 1'];
$diagnosticodosrecetas = $_GET['Diagnostico 2'];
$codmedicunorecetas = $_GET['1. Cod. Medic.'];
$cantidadunorecetas = $_GET['Cantidad 1'];
$codmedicdosrecetas = $_GET['2. Cod. Medic.'];
$cantidaddosrecetas = $_GET['Cantidad 2'];

$sql_editar = 'UPDATE recetas SET Fecha=?,Apellido=?,Nombres=?,Tipo DNI=?,Nro. DNI=?,Fecha nacimiento=?,Sexo=?,
Diagnostico 1=?,Diagnostico 2=?,1. Cod. Medic.=?,Cantidad 1=?,2. Cod. Medic.=?,Cantidad 2=? WHERE id=?';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($fecharecetas,$apellidorecetas,$nombresrecetas,$tipodnirecetas,$nrodnirecetas,$fechanacimientorecetas,
$sexorecetas,$diagnosticounorecetas,$diagnosticodosrecetas,$codmedicunorecetas,$cantidadunorecetas,$codmedicdosrecetas,$cantidaddosrecetas,$id));

$pdo = null;
$sentencia_editar = null;
header("location:index.php");