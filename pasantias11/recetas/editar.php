<?php

include_once '../php/conexion.php';

$sql_leer = 'SELECT * FROM recetas';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();

//var_dump($resultado);

//Agregar
if($_POST){

    $fecha = $_GET['Fecha'];
    $apellido = $_GET['Apellido'];
    $nombres = $_GET['Nombres'];
    $tipo_dni = $_GET['Tipo_DNI'];
    $nro_dni = $_GET['Nro_DNI'];
    $fecha_naci = $_GET['Fecha_nacimiento'];
    $sexo = $_GET['Sexo'];
    $diagnostico1 = $_GET['Diagnostico1'];
    $diagnostico2 = $_GET['Diagnostico2'];
    $cod_medico1 = $_GET['1Cod_medico'];
    $cant1 = $_GET['Cantidad1'];
    $cod_medico2 = $_GET['2Cod_medico'];
    $cant2 = $_GET['Cantidad2'];

    $sql_agregar = 'INSERT INTO recetas (Fecha,Apellido,Nombres,Tipo_DNI,Nro_DNI,Fecha_nacimiento,
    Sexo,Diagnostico1,Diagnostico2,1Cod_medico,Cantidad1,2Cod_medico,Cantidad2)
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)';
    $sentencia_agregar = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($fecha,$apellido,$nombres,$tipo_dni,$nro_dni,$fecha_naci,
        $sexo,$diagnostico1,$diagnostico2,$cod_medico1,$cant1,$cod_medico2,$cant2,$id));


    $sentencia_agregar = null;
    $pdo = null;
    header('location:../recetas.php');
}

if($_GET){
    $id = $_GET['Idrecetas'];
    $sql_unico = 'SELECT * FROM recetas WHERE Idrecetas=?';
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


                        <h5> Ingresar Apellido</h5>
                        <input type="text" class="form-control" name="Apellido" value="<?php echo $resultado_unico['Apellido'] ?>">

                        <h5> Ingresar Nombres</h5>
                        <input type="text" class="form-control" name="Nombres" value="<?php echo $resultado_unico['Nombres'] ?>">

                        <h5> Ingresar Tipo_DNI</h5>
                        <input type="text" class="form-control" name="Tipo_DNI" value="<?php echo $resultado_unico['Tipo_DNI'] ?>">


                        <h5> Ingresar Nro_DNI</h5>
                        <input type="text" class="form-control" name="Nro_DNI" value="<?php echo $resultado_unico['Nro_DNI'] ?>">

                        <h5> Ingresar Fecha_nacimiento</h5>
                        <input type="text" class="form-control" name="Fecha_nacimiento" value="<?php echo $resultado_unico['Fecha_nacimiento'] ?>">

                        <h5> Ingresar Sexo</h5>
                        <input type="text" class="form-control" name="Sexo" value="<?php echo $resultado_unico['Sexo'] ?>">

                        <h5> Ingresar Diagnostico1</h5>
                        <input type="text" class="form-control" name="Diagnostico1" value="<?php echo $resultado_unico['Diagnostico1'] ?>">

                        <h5> Ingresar Diagnostico2</h5>
                        <input type="text" class="form-control" name="Diagnostico2" value="<?php echo $resultado_unico['Diagnostico2'] ?>">

                        <h5> Ingresar 1Cod_medico</h5>
                        <input type="text" class="form-control" name="1Cod_medico" value="<?php echo $resultado_unico['1Cod_medico'] ?>">

                        <h5> Ingresar Cantidad1</h5>
                        <input type="text" class="form-control" name="Cantidad1" value="<?php echo $resultado_unico['Cantidad1'] ?>">

                        <h5> Ingresar 2Cod_medico</h5>
                        <input type="text" class="form-control" name="2Cod_medico" value="<?php echo $resultado_unico['2Cod_medico'] ?>">

                        <h5>Ingresar Cantidad2</h5>
                        <input type="text" class="form-control" name="Cantidad2" value="<?php echo $resultado_unico['Cantidad2'] ?>">


                        <input type="hidden" name="Idrecetas" value="<?php echo $resultado_unico['Idrecetas'] ?>">
                        <button class="btn btn-outline-primary" >Editar</button><br>
                        <br>
                        <center><a class="btn btn-outline-success" href="../recetas.php" >Volver al Datatable</a></center>
                    </form>
                <?php endif ?>
            </div>
        </div>
    </body>
    </Center>
</html>
