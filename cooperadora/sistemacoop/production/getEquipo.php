<?php 
	$nombre = $_GET['alumnoss'];
	$conexion = new mysqli("localhost","root","","sistemacop");
	mysqli_set_charset($conexion,"utf8");
	$result=mysqli_query($conexion,"SELECT * FROM alumnos t1 INNER JOIN cursos t2 ON t1.idcurso=t2.idcurso WHERE nombre LIKE '$nombre' LIMIT 1");
	if (mysqli_num_rows($result) > 0) {
		$alumnoss = mysqli_fetch_object($result);
		$alumnoss->status = 200;
		echo json_encode($alumnoss);
	}else{
		$error = array('status' => 400);
		echo json_encode((object)$error);
	}