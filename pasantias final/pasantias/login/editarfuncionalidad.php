<?php

include_once 'conexion2.php';
session_start();
$usuarioRegister = $_SESSION ['usuarioRegister'];
$claveRegister = $_SESSION ['claveRegister'];


//verificacion

$sql ='SELECT usuario,clave FROM usuarios where usuario =?';
$sentencia= $pdo->prepare($sql);
$sentencia->execute(array($usuarioRegister));
$resultado=$sentencia->fetch();

if(!$resultado['usuario']){
  echo "usuario inexistente";
  header("Location: ../index.php");
  die();
  }
  if(password_verify($claveRegister, $resultado['clave']))
  {
  echo "Usuario: ";
  echo $usuarioRegister;echo('<br>');
  echo "Clave: ";
  echo $claveRegister;echo('<br>');
  echo "Clave Hash: ";
  echo $resultado['clave'];echo('<br>');
  }else{
      header("Location: ../index.php");
      die();
  }

$id = $_GET['id'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$clave = $_GET['clave'];

$sql_editar = 'UPDATE crud SET nombre=?,apellido=?,clave=? WHERE id=?';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($nombre,$apellido,$clave,$id));

$pdo = null;
$sentencia_editar = null;
header("location:login.php");