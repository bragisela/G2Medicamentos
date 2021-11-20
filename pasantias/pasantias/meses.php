<?php
// conexion con la base
include_once 'php/conexion.php';
include_once 'verificacion.php';
// llamado a la tabla

if($_POST){
  $_SESSION ["eleccionmes"] = $_POST["mes"];
  $eleccionmes = $_SESSION ['eleccionmes'];
  header('location:stockinicial.php');
  }
?>
