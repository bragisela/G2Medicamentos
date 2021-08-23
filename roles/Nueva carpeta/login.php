<?php
include("sesion.php");
include("db.php");
$usuario = $pass = "";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Log-in</title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <div id="page-wrapper">
    <div class="container-fluid">
      <form method="post">
        <div class="login-page">
          <div class="form">
            <!--form class="login-form" method="post"-->
            <div class="login-form">
              <input type="text" placeholder="usuario" name="usuario"/>
              <input type="password" placeholder="contraseña" name="pass"/>
              <button type= "submit" name="logeo">Iniciar Sesión</button>
              <p class="message">No está registrado?	<a href="" onclick='alert("Contáctese con el administrador del sistema")'>• Registrarse •</a></p>
              <?php
              if (isset($_POST['logeo']) and $_POST['usuario'] != "")
              {
                $usuario = test_input($_POST["usuario"]);
                $pass = test_input($_POST["pass"]);
                if
                ($result=mysqli_query($conexion,"SELECT usuario, nombreUsuario, codUsuario, claveUsuario, codRol
                  FROM usuarios WHERE usuario like '$usuario' and claveUsuario like '$pass' and inhabilitado='NO'"))
                  {
                    $row_cnt = mysqli_num_rows($result);
                    if ($row_cnt==1){
                      while($busqueda = mysqli_fetch_array($result))
                      {
                        $codUsuario = $busqueda['codUsuario'];
                        $usuario = $busqueda['usuario'];
                        $clave = $busqueda['claveUsuario'];
                        $codRol = $busqueda['codRol'];
                        $nombreUsuario = $busqueda['nombreUsuario'];
                      }
                      /* cerrar el resulset */
                      mysqli_free_result($result);
                      $_SESSION['usuario']=$usuario;
                      $_SESSION['clave']=$clave;
                      $_SESSION['nombreUsuario']=$nombreUsuario;
                      $_SESSION['codRol']=$codRol;

                      if($codRol==1)
                      {
                        echo "<script languaje= 'javascript'>";
                        echo "window.location='inicioAdmin.php';";
                        echo "</script>";
                      }
                      else {
                        if($codRol==2)
                        {
                          echo "<script languaje= 'javascript'>";
                          echo "window.location='inicioUsuario.php';";
                          echo "</script>";
                        }
                      }
                    }  else
                    {
                      echo "<script languaje= 'javascript'>";
                      echo "window.location='index.php';";
                      echo "alert ('Datos incorrectos')";
                      echo "</script>";
                    }
                  }
                }
                mysqli_close($conexion);
                ?>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
  </html>
