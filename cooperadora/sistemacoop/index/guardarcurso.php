<?php

$curs=$_POST['curs'];

include('conexion.php');

$sqlinsert ="INSERT INTO cursos (idcurso, curso) VALUES (NULL,'$curs')";

    $queryinsert = mysqli_query($con,$sqlinsert);

  
    if(!$queryinsert){
		die("fallo");
	
	}else{

	header("Location: Cursos.php");
}