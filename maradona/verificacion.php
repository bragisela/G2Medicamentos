<?php
session_start();
$nombreRegister = $_SESSION ['nombreRegister'];
$claveRegister = $_SESSION ['claveRegister'];
$eleccionRegister = $_SESSION ['eleccionRegister'];




//verificacion

$sql ='SELECT Nombre,Clave,Idrol,Idusuario FROM usuarios where Nombre =?';
$sentencia= $pdo->prepare($sql);
$sentencia->execute(array($nombreRegister));
$resultado=$sentencia->fetch();

if(!$resultado['Nombre']){
  echo "usuario inexistente";
  header("Location:login.php");
  die();
  }
  if(password_verify($claveRegister, $resultado['Clave']))
  {
  echo "Nombre: ";
  echo $nombreRegister;echo('<br>');
  echo "Clave: ";
  echo $claveRegister;echo('<br>');
  echo "Clave Hash: ";
  echo $resultado['Clave'];echo('<br>');
  echo "numero de rol: ";
  echo $resultado['Idrol'];echo('<br>');
/*   echo "numero registro sin variable: ";
  echo $resultado['Idusuario'];echo('<br>'); */
  }else{
      header("Location:login.php");
  }

  $_SESSION ["idregister"] = $resultado['Idusuario'];
  $idregister = $_SESSION ["idregister"];
  echo "id de registro: ";
  echo $idregister;echo('<br>');

  $eleccionRegister = $_SESSION ['eleccionRegister'];
  echo "numero de registro por parte del admin: ";
  echo $eleccionRegister;echo('<br>');

  $_SESSION ["rolregister"] = $resultado['Idrol'];
  $rolregister = $_SESSION ["rolregister"];
  
  $eleccionmes = $_SESSION ['eleccionmes'];
  echo "mes seleccionado: ";
  echo $eleccionmes;echo('<br>');

  
  $_SESSION ["mes"] = date("F");
  $mes = $_SESSION ['mes'];
  echo "mes actual: ";
  echo $mes;echo('<br>');



  ?>
