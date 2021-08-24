<?php
include_once 'php/conexion.php';
include_once 'navbar/navbar.php';
// session_start();
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
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Gestion</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">


                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
