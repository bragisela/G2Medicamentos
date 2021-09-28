<?php 
include_once 'verificacion.php';


$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];

if(!file_exists('../archivos')){
	mkdir('../archivos',0777,true);
	if(file_exists('../archivos')){
		if(move_uploaded_file($guardado, '../archivos/'.$nombre)){
			echo "Archivo guardado con exito";
		}else{
			echo "Archivo no se pudo guardar";
		}
	}
}else{
	if(move_uploaded_file($guardado, '../archivos/'.$nombre)){
		echo "Archivo guardado con exito";
	}else{
		echo "Archivo no se pudo guardar";
	}
}


?>
<body>
<br>
<form action="login.php">
<button class="w-50 btn btn-lg btn-primary" type="submit" >Volver</button>