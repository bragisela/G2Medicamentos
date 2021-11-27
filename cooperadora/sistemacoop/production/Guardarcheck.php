<?php
include("conexion.php");
if(isset($_POST['Guardarp']));
$idss=$_GET['idsocio'];
          if($_POST['che'] != "")
{
  if(is_array($_POST['che']))
  {
    while(list($key, $value) = each($_POST['che']))
  {
  	$sql="SELECT * FROM registrocuotas where idcuota=$value";
    $result=mysqli_query($con,$sql);

    while ($row = mysqli_fetch_array($result)) {
    	$importe= $row['importe'];
    }

    $consulta ="INSERT INTO pagodecuotas (idsocio, idcuota, montopagado, recibo) VALUES ('$idss','$value', $importe, 0)";
    $query = mysqli_query($con,$consulta);
  }
}
}

$donacion=$_POST['donacion'];

if($donacion != "")
	$consulta2 ="INSERT INTO donacion (idsocio, montodonado) VALUES ('$idss','$donacion')";
    $query2 = mysqli_query($con,$consulta2);


    if(!$query and $query2){
    die("fallo");

  }


  header ("Location: reporte.php?idss=".urlencode($idss));

?>





