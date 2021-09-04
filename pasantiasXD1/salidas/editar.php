<?php

include_once '../php/conexion.php';
include_once '../verificacion.php';
$sql_leer = 'SELECT * FROM salidas';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();

//var_dump($resultado);

//Agregar
if($_POST){

    $fecha = $_POST['Fecha'];
    $cantidad = $_POST['Cantidad'];
    $motivo = $_GET['Motivo'];
    $Cod_Medic = $_POST['Cod_medico'];
    $Idusuario = $_POST['Idusuario'];

    $sql_agregar = 'INSERT INTO salidas (Fecha,Cantidad,Caps,Cod_medico,Idusuario) VALUES (?,?,?,?,?)';
    $sentencia_agregar = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($cantidad,$fecha,$motivo,$Cod_Medic,$Idusuario));


    $sentencia_agregar = null;
    $pdo = null;
    header('location: ../salidas.php');
}

if($_GET){
    $id = $_GET['Idsalidas'];
    $sql_unico = 'SELECT * FROM salidas WHERE Idsalidas=?';
    $gsent_unico = $pdo->prepare($sql_unico);
    $gsent_unico->execute(array($id));
    $resultado_unico = $gsent_unico->fetch();
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


<Center>
    <title>Editar</title>
    </head>
    <body>
    <link rel="stylesheet" href="../bocs/style.css" type="text/css">
        <div class="form-signin">
            <div class="col-md-12">
                <?php if($_GET): ?>
                    <h2>EDITAR USUARIOS</h2>
                    <form method="GET" action="editarf.php">
                        <h5>Ingresar fecha</h5>
                        <input type="text" class="form-control" name="Fecha"  value="<?php echo $resultado_unico['Fecha'] ?>">

                        <h5>Ingresar Codigo Del Medicamento</h5>
                        <input type="text" class="form-control" name="Cod_medico" value="<?php echo $resultado_unico['Cod_medico'] ?>">

                        <h5> Ingresar Cantidad</h5>
                        <input type="text" class="form-control" name="Cantidad" value="<?php echo $resultado_unico['Cantidad'] ?>">



                        <h5>Ingresar Motivo</h5>
                        <input type="text" class="form-control" name="Motivo" value="<?php echo $resultado_unico['Motivo'] ?>">




                        <input type="hidden" name="Idsalidas" value="<?php echo $resultado_unico['Idsalidas'] ?>">
                        <button class="btn btn-outline-primary">Editar</button><br>
                        <br>
                        <center><a class="btn btn-outline-success" href="../salidas.php" >Volver al Datatable</a></center>
                    </form>
                <?php endif ?>
            </div>
        </div>
    </body>
    </Center>
</html>
