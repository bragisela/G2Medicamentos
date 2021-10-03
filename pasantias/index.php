<?php
include_once 'php/conexion.php';
include_once 'navbar/navbar.php';

session_start();


$sql_leer='SELECT * FROM usuarios';
$gsent=$pdo->prepare($sql_leer);
$gsent->execute();
$usuarios=$gsent->fetchAll();

if($_POST){
$_SESSION ["nombreRegister"] = $_POST["Nombre"];
$_SESSION ["claveRegister"] = $_POST["Clave"];

$_SESSION ["eleccionRegister"] = 0;
$eleccionRegister = $_SESSION ['eleccionRegister'];
}

$nombreRegister = $_SESSION ['nombreRegister'];
$claveRegister = $_SESSION ['claveRegister'];




//verificacion

$sql ='SELECT Nombre,Clave,Idrol,Idusuario FROM usuarios where Nombre =?';
$sentencia= $pdo->prepare($sql);
$sentencia->execute(array($nombreRegister));
$resultado=$sentencia->fetch();

if(!$resultado['Nombre']){
  echo "usuario inexistente";
  header("Location:login.php");
  die();
  }
  if(password_verify($claveRegister, $resultado['Clave']))
  {
  echo "Nombre: ";
  echo $nombreRegister;echo('<br>');
  echo "Clave: ";
  echo $claveRegister;echo('<br>');
  echo "Clave Hash: ";
  echo $resultado['Clave'];echo('<br>');
  echo "numero de rol: ";
  echo $resultado['Idrol'];echo('<br>');
/*   echo "numero de sas: ";
  echo $resultado['Idusuario'];echo('<br>'); */
  }else{
      header("Location:login.php");
  }

  $_SESSION ["rolregister"] = $resultado['Idrol'];
  $rolregister = $_SESSION ["rolregister"];

  $_SESSION ["idregister"] = $resultado['Idusuario'];
  $idregister = $_SESSION ["idregister"];

  $eleccionRegister = $_SESSION ['eleccionRegister'];
  echo "numero de registro admin: ";
  echo $eleccionRegister;echo('<br>');

  if($rolregister==1){
    $idregister=$eleccionRegister;
    echo "id de registro con idregister: ";
    echo $idregister;echo('<br>');
  }

  $eleccionmes = $_SESSION ['eleccionmes'];
  echo "id mes seleccionado: ";
  echo $eleccionmes;echo('<br>');

$sql_leer="SELECT * FROM medicamentos where Idusuario=$idregister and mes=$eleccionmes";
$gsent=$pdo->prepare($sql_leer);
$gsent->execute();
$usuarios=$gsent->fetchAll();

if(($rolregister==1) && ($eleccionRegister==0)){
    header("Location:index1.php");
}




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
   <!--  </head><h1>Resumen mensual</h1> -->
    <body class="sb-nav-fixed" style="background-image: url('images/cover4.jpg');">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">

                    <div class="container">
       <div class="row">
           <div class="col-lg-12">
           <div class="table-responsive">
                <table id="usuarios" class="table table-hover table-dark" style="width:100%">
                     <thead>
                     <th class="table-dark">Codigo<br> &nbsp</th>
                     <th class="table-dark">Medicamento<br> &nbsp</th>
                     <th class="table-dark">Stock Actual<br>(Fisico)</th>
                     <th class="table-dark">Entradas<br>(ClsBotiquin)</th>
                     <th class="table-dark">Recibidas<br>(Clearing)</th>
                     <th class="table-dark">Salidas<br>(Clearing)</th>
                     <th class="table-dark">Otras Salidas /<br>Salidas no apto</th>
                     </thead>
                 <tbody>
                    <?php
                        foreach($usuarios as $usuario){
                    ?>
                    <tr>
                    <td><?php echo $usuario['Codigo']?></td>
                    <td><?php echo $usuario['Medicamento']?></td>
                    <td><?php echo $usuario['cantidad']?></td>
                    <td><?php echo $usuario['clsbotiquin']?></td>
                    <td><?php echo $usuario['recibidasclearing']?></td>
                    <td><?php echo $usuario['salidasclearing']?></td>
                    <td><?php echo $usuario['salidas']?></td>
                    <?php
                        }
                    ?>
                    </tr>
                    
                 </tbody>
                </table>
           </div>
       </div>
    </div>
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
