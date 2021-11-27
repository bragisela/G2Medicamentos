<?php
include("conexion.php");
include("menus.php");
?>

<?php  

 	$conexion = new mysqli("localhost","root","","sistemacop");
	$result=mysqli_query($conexion,"SELECT * FROM alumnos");
	$array = array();
	if($result){
		while ($row = mysqli_fetch_array($result)) {
			$alumnoss = utf8_encode($row['nombre']);
			array_push($array, $alumnoss); // equipos
		}
	}
?>

<html>
<head>
	<title>Autocomplete</title>
	<script type="text/javascript" src="jquery-1.12.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="jquery-ui.css">
	<script type="text/javascript" src="jquery-ui.js"></script>
</head>
<body>

	<center><h>Ingrese Alumno</h></center>
	<center><input id="tag"></center>
	<br>
	<center><label>Alumno:</label></center>
	<center><h2 id="nombre"></h2></center>
	<center><label>DNI:</label></center>
	<center><h2 id="dni"></h2></center>
	<center><label>Curso-Año anterior:</label></center>
	<center><h2 id="curso"></h2></center>
	<center><label>Curso-Año siguiente:</label></center>
	<center><h2 id="*"></h2></center>

	<script type="text/javascript">
		$(document).ready(function () {
			var items = <?= json_encode($array) ?>

			$("#tag").autocomplete({
				source: items,
				select: function (event, item) {
					var params = {
						alumnoss: item.item.value
					};
					$.get("getEquipo.php", params, function (response) {
						var json = JSON.parse(response);
						if (json.status == 200){
							$("#nombre").html(json.nombre);
							$("#dni").html(json.dni);
							$("#curso").html(json.curso);
						}else{

						}
					}); // ajax
				}
			});
		});
	</script>

</body>
</html>