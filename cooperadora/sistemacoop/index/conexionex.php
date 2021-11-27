<?php

	$conexion = new mysqli("localhost","root","","tutorial");
	
	if($conexion){
		echo "Conexion exitosa";
	}
	else{
		echo "Conexion no exitosa";
	}

?>
