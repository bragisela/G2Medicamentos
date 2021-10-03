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
  echo "numero de registro con eleccionregister: ";
  echo $eleccionRegister;echo('<br>');

  $_SESSION ["rolregister"] = $resultado['Idrol'];
  $rolregister = $_SESSION ["rolregister"];
  
  if($rolregister==1){
    $idregister=$eleccionRegister;
    echo "id de registro con idregister: ";
    echo $idregister;echo('<br>');
  }

  $eleccionmes = $_SESSION ['eleccionmes'];
  echo "id mes seleccionado: ";
  echo $eleccionmes;echo('<br>');
  
  $_SESSION ["mes"] = date("F");
  $mes = $_SESSION ['mes'];
  echo "mes actual: ";
  echo $mes;echo('<br>');

  $_SESSION ["idmes"] = date("m");
  $idmes = $_SESSION ["idmes"];
  
  echo "id mes actual: ";
  echo $idmes;echo('<br>');

/*    if ($mes=="January"){
      $idmes=1;
    }else{
    if ($mes=="February"){
      $idmes=2;
    }else{
    if ($mes=="March"){
      $idmes=3;
    }else{
    if ($mes=="April"){
      $idmes=4;
    }else{
    if ($mes=="May"){
      $idmes=5;
    }else{
    if ($mes=="June"){
      $idmes=6;
    }else{
    if ($mes=="July"){
      $idmes=7;
    }else{
    if ($mes=="August"){
      $idmes=8;
    }else{
    if ($mes=="September"){
      $idmes=9;
    }else{
    if ($mes=="October"){
      $idmes=10;
    }else{
    if ($mes=="November"){
      $idmes=11;
    }else{
    if ($mes=="December"){
      $idmes=12;
    }}}}}}}}}}}} */


  ?>
