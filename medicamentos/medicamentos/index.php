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
  echo "&nbsp&nbsp&nbsp&nbspNombre del Caps: ";
  echo $nombreRegister;echo('<br>');
/*   echo "Clave: ";
  echo $claveRegister;echo('<br>');
  echo "Clave Hash: ";
  echo $resultado['Clave'];echo('<br>'); */
/*   echo "numero de rol: ";
  echo $resultado['Idrol'];echo('<br>'); */
/*   echo "numero de sas: ";
  echo $resultado['Idusuario'];echo('<br>'); */
  }else{
      header("Location:login.php");
  }
  error_reporting(0);
  $_SESSION ["rolregister"] = $resultado['Idrol'];
  $rolregister = $_SESSION ["rolregister"];

  $_SESSION ["idregister"] = $resultado['Idusuario'];
  $idregister = $_SESSION ["idregister"];

  $eleccionRegister = $_SESSION ['eleccionRegister'];
/*   echo "numero de registro admin: ";
  echo $eleccionRegister;echo('<br>'); */

  if($rolregister==1){
    $idregister=$eleccionRegister;
/*     echo "id de registro con idregister: ";
    echo $idregister;echo('<br>'); */
  }

  $eleccionmes = $_SESSION ['eleccionmes'];
  echo "&nbsp&nbsp&nbsp&nbspNumero mes seleccionado: ";
  echo $eleccionmes;echo('<br>');

  $idmes = $_SESSION ["idmes"];
  
  echo "&nbsp&nbsp&nbsp&nbspNumero mes actual: ";
  echo $idmes;echo('<br>');

$sql_leer="SELECT * FROM medicamentos where Idusuario=$idregister and mes=11";
$gsent=$pdo->prepare($sql_leer);
$gsent->execute();
$usuarios=$gsent->fetchAll();

if(($rolregister==1) && ($eleccionRegister==0)){
    header("Location:index1.php");
}



$meses1 = "SELECT * FROM medicamentos where Idusuario=$idregister and mes=$eleccionmes";
$gsentas = $pdo->prepare($meses1);
$gsentas->execute();
$mesresultado = $gsentas->fetchAll();


foreach($mesresultado as $dato):

    $cantidad=$dato['cantidad'];
    $codigo=$dato['Codigo'];
/* 
    echo $codigo;
    echo ":";
    echo $cantidad;
    echo ":";
    echo $dato['Medicamento'];
    echo "<br>"; */

    $cod=0;
    $sql ="SELECT * FROM medicamentos where Codigo=$codigo and Idusuario=$idregister and mes=$idmes+1";
    $sentencia= $pdo->prepare($sql);
    $sentencia->execute(array($cod));
    $resultado=$sentencia->fetch();
    $cod=$resultado['Codigo'];
    

     if($cod==$codigo){
        $sql = "UPDATE medicamentos set cantidad=? where Codigo=$cod and Idusuario=$idregister and mes=$idmes+1";
        $sentencia_editar = $pdo->prepare($sql);
        $sentencia_editar->execute(array($cantidad));
    }else{
        $sql_agregar = "INSERT INTO medicamentos (Codigo,cantidad,Medicamento,mes,Idusuario) VALUES (?,?,?,?,?)";
        $agregar = $pdo->prepare($sql_agregar);
        $agregar->execute(array($dato['Codigo'],$dato['cantidad'],$dato['Medicamento'],$idmes+1,$idregister));
    }
endforeach


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
        <link rel="stylesheet"href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet"/>
   <!--  </head><h1>Resumen mensual</h1> -->
    <body class="sb-nav-fixed" style="background-color: #1a4378; color: white;">
    <br>
    <style>    
  #sas6{
    color: #e6e6e6;
    text-shadow: 1px 1px 10px #e6e6e6;
    }
    </style>
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
        <script src="clearing/js.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- datatables -->
        <script src="DataTables/datatables.min.js"></script>
        <!-- Botones -->
        <script src="DataTables/Butons-1.7.1/js/dataTables.buttons.min.js"></script>
        <script src="DataTables/JSZip-2.5.0/jszip.min.js"></script>
        <script src="DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
        <script src="DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
        <script src="DataTables/Butons-1.7.1/js/buttons.html5.min.js"></script>
    </body>
</html>
