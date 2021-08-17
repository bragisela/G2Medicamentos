<?php
include_once 'php/conexion.php';
session_start();
/* 
$_SESSION ["usuario_login"] = $_POST["Nombre"];
$_SESSION ["clave_login"] = $_POST["Clave"];

$usuario_login = $_SESSION ['usuario_login'];
$clave_login = $_SESSION ['clave_login'];

//verificacion

$sql ='SELECT Nombre,Clave FROM usuarios where Nombre =?';
$sentencia= $pdo->prepare($sql);
$sentencia->execute(array($usuario_login));
$resultado=$sentencia->fetch();



if(!$resultado['Nombre']){
echo "usuario inexistente";
header("Location: logueo.php");
die();
}
if(password_verify($clave_login, $resultado['Clave']))
{

}else{ 
  header("Location: logueo.php");
  
} */

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<frameset rows="50%,500%" frameborder="no" scrolling="no">
	<frame src="header.php" name="superior"></frame>
	<frame src="" name="framecentro"></frame>
</frameset>
<body>
</body>
</html>