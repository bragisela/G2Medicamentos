<?php

include_once '../php/conexion.php';
include_once '../verificacion.php';


$sql_leer = 'SELECT * FROM clearing';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();
$resultado = $gsent->fetchAll();


$messias = 'SELECT Idusuario, Nombre FROM usuarios where Idrol=2';
  $gsento = $pdo->prepare($messias);
  $gsento->execute();
  $resultado1 = $gsento->fetchAll();


//Agregar
if($_POST){
    $fecha = $_POST['Fecha'];
    $caps = $_POST['Caps'];
    $codigo = $_POST['Cod_medico'];
    $cantidad = $_POST['Cantidad'];
    $tipo = 'salida';
    $tipe = 'entrada';
    $Otrocaps = $_POST['Otrocaps'];
    $Idusuario = $_POST['Idusuario'];

    $direccionregister=0;

    $sql ="SELECT Nombre,Clave FROM usuarios where Idusuario=$Otrocaps";
    $sentencia= $pdo->prepare($sql);
    $sentencia->execute(array($direccionregister));
    $resultado=$sentencia->fetch();

    $_SESSION ["direccionregister"] = $resultado['Nombre'];
    $direccionregister = $_SESSION ["direccionregister"];

    $cant1=0;
    if($rolregister==1){
    $sql ="SELECT cantidad FROM medicamentos where Codigo=$codigo and Idusuario=$eleccionRegister and mes=$eleccionmes";
    }else{
    $sql ="SELECT cantidad FROM medicamentos where Codigo=$codigo and Idusuario=$idregister and mes=$eleccionmes";
    }
    $sentencia= $pdo->prepare($sql);
    $sentencia->execute(array($cant1));
    $resultado=$sentencia->fetch();
    $cant1 = $resultado['cantidad'];
    $total1 = $cant1 - $cantidad;

    if($total1<0){

    echo '<script language="javascript">alert("no hay stock");window.location.href="../clearing.php"</script>';
    die();

    }else{

    $sql_agregar = 'INSERT INTO clearing (Fecha,Codigo,Cantidad,Tipo,Otrocaps,Idusuario,mes) VALUES (?,?,?,?,?,?,?)';
    $agregar = $pdo->prepare($sql_agregar);
    if($rolregister==1){
    $agregar->execute(array($fecha,$codigo,$cantidad,$tipo,$direccionregister,$eleccionRegister,$eleccionmes));
    }else{
      $agregar->execute(array($fecha,$codigo,$cantidad,$tipo,$direccionregister,$idregister,$eleccionmes));
    }

    $sas="messi";

    $sql ="SELECT Nombre,Clave FROM usuarios where Idusuario=$idregister";
    $sentencia= $pdo->prepare($sql);
    $sentencia->execute(array($sas));
    $resultado=$sentencia->fetch();

    $_SESSION ["sas"] = $resultado['Nombre'];
    $sas = $_SESSION ["sas"];


    $sql_agregar = 'INSERT INTO clearing (Fecha,Codigo,Cantidad,Tipo,Otrocaps,Idusuario,mes) VALUES (?,?,?,?,?,?,?)';
    $agregar = $pdo->prepare($sql_agregar);
    if($rolregister==1){
    $agregar->execute(array($fecha,$codigo,$cantidad,$tipe,$sas,$Otrocaps,$eleccionmes));
    }else{
      $agregar->execute(array($fecha,$codigo,$cantidad,$tipe,$sas,$Otrocaps,$eleccionmes));
    }
    
     /* ----------------------------------------------------------------------------------- */

     $cod=0;
     if($rolregister==1){
     $sql ="SELECT Codigo FROM medicamentos where Codigo=$codigo and Idusuario=$eleccionregister and mes=$eleccionmes";
     }else{
     $sql ="SELECT Codigo FROM medicamentos where Codigo=$codigo and Idusuario=$idregister and mes=$eleccionmes";
     }
     $sentencia= $pdo->prepare($sql);
     $sentencia->execute(array($cod));
     $resultado=$sentencia->fetch();
     $cod = $resultado['Codigo'];
     echo $cod;
     echo"<br>";

     $cant=0;
     $total=0;
     if($rolregister==1){
     $sql ="SELECT cantidad FROM medicamentos where Codigo=$codigo and Idusuario=$eleccionregister and mes=$eleccionmes";
     }else{
     $sql ="SELECT cantidad FROM medicamentos where Codigo=$codigo and Idusuario=$idregister and mes=$eleccionmes";
     }
     $sentencia= $pdo->prepare($sql);
     $sentencia->execute(array($cant));
     $resultado=$sentencia->fetch();
     $cant = $resultado['cantidad'];
     $total = $cant - $cantidad;
     echo $total;
     echo"<br>";

     $cantsalidas=0;
     if($rolregister==1){
     $sql ="SELECT salidasclearing,Medicamento FROM medicamentos where Codigo=$codigo and Idusuario=$eleccionregister and mes=$eleccionmes";
     }else{
     $sql ="SELECT salidasclearing,Medicamento FROM medicamentos where Codigo=$codigo and Idusuario=$idregister and mes=$eleccionmes";
     }
     $sentencia= $pdo->prepare($sql);
     $sentencia->execute(array($cantsalidas));
     $resultado=$sentencia->fetch();
     $cantsalidas = $resultado['salidasclearing'];
     $totalsalidas = $cantsalidas + $cantidad;
     echo $totalsalidas;
     echo"<br>";
     $medicamento = $resultado['Medicamento'];
 
     if($cod==$codigo)
     {
       if($rolregister==1){
       $sql = "UPDATE medicamentos set cantidad=?,salidasclearing=? where Codigo=$cod and Idusuario=$eleccionregister and mes=$eleccionmes";
       }else{
       $sql = "UPDATE medicamentos set cantidad=?,salidasclearing=? where Codigo=$cod and Idusuario=$idregister and mes=$eleccionmes";
       }
       $sentencia_editar = $pdo->prepare($sql);
       $sentencia_editar->execute(array($total,$totalsalidas));
       }
 
     /* ----------------------------------------------------------------------------------- */
 
     $cod=0;
     $sql ="SELECT Codigo FROM medicamentos where Codigo=$codigo and Idusuario=$Otrocaps and mes=$eleccionmes";
     $sentencia= $pdo->prepare($sql);
     $sentencia->execute(array($cod));
     $resultado=$sentencia->fetch();
     $cod = $resultado['Codigo'];
 
     $cant=0;
     $sql ="SELECT cantidad FROM medicamentos where Codigo=$codigo and Idusuario=$Otrocaps and mes=$eleccionmes";
     $sentencia= $pdo->prepare($sql);
     $sentencia->execute(array($cant));
     $resultado=$sentencia->fetch();
     $cant = $resultado['cantidad'];
     $total = $cant + $cantidad;
     
     $cantrecibidas=0;
     $sql ="SELECT recibidasclearing FROM medicamentos where Codigo=$codigo and Idusuario=$Otrocaps and mes=$eleccionmes";
     $sentencia= $pdo->prepare($sql);
     $sentencia->execute(array($cantrecibidas));
     $resultado=$sentencia->fetch();
     $cantrecibidas = $resultado['recibidasclearing'];
     $totalrecibidas = $cantrecibidas + $cantidad;
 
 
     if($cod==$codigo)
     {
      echo"<br>";
      echo"saaaaaaas";
     $sql = "UPDATE medicamentos set cantidad=?,recibidasclearing=? where Codigo=$cod and Idusuario=$Otrocaps and mes=$eleccionmes";
     $sentencia_editar = $pdo->prepare($sql);
     $sentencia_editar->execute(array($total,$totalrecibidas));
     }else{
      echo"<br>";
      echo"soooooooooooos";
     $sql_agregar = 'INSERT INTO medicamentos (Codigo,Medicamento,cantidad,recibidasclearing,Idusuario,mes) VALUES (?,?,?,?,?,?)';
     $agregar = $pdo->prepare($sql_agregar);
     $agregar->execute(array($codigo,$medicamento,$cantidad,$cantidad,$Otrocaps,$eleccionmes));
     }

     
     /* ----------------------------------------------------------------------------------- */
    
  //cerrar
    $agregar = null;
    $pdo = null;
    header('location:../clearing.php');

  }

  
  if($_GET){
    $UsID=$_GET['Idclearing'];
    $sql_unico='SELECT * FROM clearing WHERE Idclearing=?';
    $gsent_unico=$pdo->prepare($sql_unico);
    $gsent_unico->execute(array($UsID));
    $resultado_unico=$gsent_unico->fetch();
  }

}
  ?>

<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css" type="text/css">

<title>Agregar</title>
    </head>

    <center>
    <body class="sb-nav-fixed" style="background-image: url('../images/cover4.jpg');">
      <br>
        <div class="form-signin">
            <div class="col-md-12">
            <?php if(!$_GET): ?>
          <h1>Agregar</h1>
          <form method="POST">
          <div class="row g-3">

          <div class="col-12">
              <label for="date" class="form-label">Fecha</label>
              <input type="date" class="form-control bg-light text-dark"  name="Fecha" value="" required>
            </div>


            <div class="col-12">
              <label for="text" class="form-label">Codigo Medicicamento</label>
              <input type="text" class="form-control bg-light text-dark"  name="Cod_medico" value="" required>
            </div>

            <div class="col-12">
              <label for="text" class="form-label">Cantidad</label>
              <input type="text" class="form-control bg-light text-dark"  name="Cantidad" value="" required>
            </div>

            <div class="col-12">
              <label for="text" class="form-label">enviar a</label>
              <select type="text" id="usuarios" class="form-select" name="Otrocaps" onchange="Caps()">
              <option value="0">Seleccione:</option>

                <?php foreach($resultado1 as $dato): ?>
                    
                    <option value="<?php echo $dato['Idusuario'] ?>"> <?php echo $dato['Nombre'] ?></option>
                    

                <?php endforeach ?>
                </select>
              
            </div>
            
            <br>
              <button class="btn btn-primary col-sm-5">Agregar</button>
              <a class="btn btn-primary col-sm-5" href="../clearing.php" >Volver al Datatable</a></center>
          </form>
<?php endif ?>
            </div>
            </div>
        </div>
    </body>
    <script src="../Datatable/javascripts/js.js"></script>
</html>
