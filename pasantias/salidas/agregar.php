<?php

include_once '../php/conexion.php';
include_once '../verificacion.php';
$sql_leer = 'SELECT * FROM salidas';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();

//Agregar
if($_POST){






    $fecha = $_POST['Fecha'];
    $motivo = $_POST['Motivo'];
    $cantidad = $_POST['Cantidad'];
    $codigo = $_POST['Cod_medico'];
    $Idusuario = $_POST['Idusuario'];

    $cod=0;
    $sql ="SELECT Codigo,cantidad,salidas FROM medicamentos where Codigo=$codigo and Idusuario=$idregister";
    $sentencia= $pdo->prepare($sql);
    $sentencia->execute(array($cod));
    $resultado=$sentencia->fetch();
    $cod = $resultado['Codigo'];
  
    $cant=0;
    $cant = $resultado['cantidad'];
    $total = $cant - $cantidad;
    
    $cantsalidas=0;
    $cantsalidas = $resultado['salidas'];
    $totalsalidas = $cantsalidas + $cantidad;
  
  
  
  
    if($total<0){
  
      echo '<script language="javascript">alert("no hay stock");window.location.href="../salidas.php"</script>';
      die();
  
      }else{


    $sql_agregar = 'INSERT INTO salidas (Fecha,Motivo,Cantidad,codigo,Idusuario,mes) VALUES (?,?,?,?,?,?)';
    $agregar = $pdo->prepare($sql_agregar);
    if($rolregister==1){
    $agregar->execute(array($fecha,$motivo,$cantidad,$codigo,$eleccionRegister,$eleccionmes));
    }else{
    $agregar->execute(array($fecha,$motivo,$cantidad,$codigo,$idregister,$eleccionmes));
    }
/* ------------------------------------------------------------------------------------------------------------- */


    if($cod==$codigo)
    {
    $sql = "UPDATE medicamentos set cantidad=?,salidas=? where Codigo=$cod and Idusuario=$idregister and mes=$eleccionmes";
    $sentencia_editar = $pdo->prepare($sql);
    $sentencia_editar->execute(array($total,$totalsalidas));
    }

/* ------------------------------------------------------------------------------------------------------------- */



  //cerrar
    $agregar = null;
    $pdo = null;
    header('location:../salidas.php');
  }
}
  if($_GET){
    $UsID=$_GET['Idsalidas'];
    $sql_unico='SELECT * FROM salidas WHERE Idsalidas=?';
    $gsent_unico=$pdo->prepare($sql_unico);
    $gsent_unico->execute(array($UsID));
    $resultado_unico=$gsent_unico->fetch();
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
    <body class="sb-nav-fixed" style="background-color: #1a4378;">
      <br>
        <div class="form-signin">
            <div class="col-md-12">
            <?php if(!$_GET): ?>
          <h1>Agregar</h1>
          <form method="POST">
          <div class="row g-3">

          <div class="col-12">
              <label for="date" class="form-label">Ingrese el Fecha</label>
              <input type="date" class="form-control bg-light text-dark"  name="Fecha" value="" required>
            </div>

            <div class="col-12">
              <label for="text" class="form-label">Ingrese el Codigo Medicamento</label>
              <input type="text" class="form-control bg-light text-dark"  name="Cod_medico" value="" required>
            </div>

            <div class="col-12">
              <label for="text" class="form-label">Ingrese el Cantidad</label>
              <input type="text" class="form-control bg-light text-dark"  name="Cantidad" value="" required>
            </div>

            
            <div class="col-12">
              <label for="Otrocaps" class="form-label">Motivo</label>
              <select class="form-control bg-light text-dark" aria-label="form-control bg-light text-dark" name="Motivo" value="<?php echo $resultado_unico['Motivo'] ?>" required>
                  <option value="Salidas no apta">Salidas no apta</option>
                  <option value="Otras salidas">Otras salidas</option>
              </select>

            </div>

            <br>
              <button class="btn btn-primary col-sm-5">Agregar</button>
              <a class="btn btn-primary col-sm-5" href="../salidas.php" >Volver al Datatable</a></center>
          </form>
<?php endif ?>
            </div>
            </div>
        </div>
    </body>
</html>
