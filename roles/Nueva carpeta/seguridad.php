<?php
include("sesion.php");
if(!isset($_SESSION['usuario']))
{
  echo "<script languaje= 'javascript'>";
  echo "alert ('Debe ingresar nuevamente. Su sesión ha caducado.');";
  echo "window.location='index.php';";
  echo "</script>";
}
else
{
  $codRol=$_SESSION['codRol'];
  $result=mysqli_query($conexion,"SELECT pagina FROM permisos WHERE codRol='$codRol' and pagina like '$pagina'");
  $row_cnt = mysqli_num_rows($result);
  if ($row_cnt==0)   {
    echo "<script languaje= 'javascript'>";
    echo "alert ('No posee acceso a esta sección.');";
    echo "</script>";

    if($codRol==1){
      echo "<script languaje= 'javascript'>";
      echo "window.location='inicioAdmin.php';";
      echo "</script>";
    }
    else {
      if($codRol==2)	{
      echo "<script languaje= 'javascript'>";
      echo "window.location='inicioUsuario.php';";
      echo "</script>";
    }	}
  }
  else
  {	if ($row_cnt==1)
    {
      mysqli_free_result($result);
      if($codRol==1)
      {
        include("menuAdmin.php");
      }
      else {
        if($codRol==2)
        {
          include("menuUsuario.php");
        }
      }
    }
  }
}
?>