<?php
include_once 'conexion.php';
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
  header("Location:../index.php");
  die();
  }
  if(password_verify($claveRegister, $resultado['clave']))
  {
  echo "usuario: ";
  echo $usuarioRegister;echo('<br>');
  echo "clave: ";
  echo $claveRegister;echo('<br>');
  echo "Clave Hash: ";
  echo $resultado['clave'];echo('<br>');
  }else{
      header("Location:../index.php");
  }
  ?>