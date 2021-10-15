<?php

include_once '../php/conexion.php';
include_once '../verificacion.php';
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
    $Idusuario = $_POST['Idusuario'];
    $cant2 = $_GET['Cantidad2'];

    $sql_agregar = 'INSERT INTO recetas (Fecha,Apellido,Nombres,Tipo_DNI,Nro_DNI,Fecha_nacimiento,
    Sexo,Diagnostico1,Diagnostico2,1Cod_medico,Cantidad1,2Cod_medico,Cantidad2)
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
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

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css" type="text/css">

<title>Editar</title>
    </head>

    <center>
    <body class="sb-nav-fixed" style="background-color: #1a4378;">
        <div class="form-signin">
            <div class="col-md-12">
                <?php if($_GET): ?>
                    <h2>EDITAR USUARIOS</h2>
                    <form method="GET" action="editarf.php">
                    <div class="row g-3">

                        <div class="col-12">
                            <label for="date" class="form-label">Fecha</label>
                            <input type="date" class="form-control bg-light text-dark"  name="Fecha" value="<?php echo $resultado_unico['Fecha'] ?>" required>
                        </div>

                        <div class="col-12">
                            <label for="text" class="form-label">Apellido</label>
                            <input type="text" class="form-control bg-light text-dark"  name="Apellido" value="<?php echo $resultado_unico['Apellido'] ?>" required>
                        </div>

                        <div class="col-12">
                            <label for="text" class="form-label">Nombres</label>
                            <input type="text" class="form-control bg-light text-dark"  name="Nombres" value="<?php echo $resultado_unico['Nombres'] ?>" required>
                        </div>

                        <div class="col-12">
                            <label for="text" class="form-label">Tipo DNI</label>
                            <input type="text" class="form-control bg-light text-dark"  name="Tipo_DNI" value="<?php echo $resultado_unico['Tipo_DNI'] ?>" required>
                        </div>

                        <div class="col-12">
                            <label for="text" class="form-label">Nro. DNI</label>
                            <input type="text" class="form-control bg-light text-dark"  name="Nro_DNI" value="<?php echo $resultado_unico['Nro_DNI'] ?>" required>
                        </div>

                        <div class="col-12">
                            <label for="date" class="form-label">Fecha de nacimiento</label>
                            <input type="date" class="form-control bg-light text-dark"  name="Fecha_nacimiento" value="<?php echo $resultado_unico['Fecha_nacimiento'] ?>" required>
                        </div>

                        <div class="col-12">
                            <label for="text" class="form-label">Sexo</label>
                            <input type="text" class="form-control bg-light text-dark"  name="Sexo" value="<?php echo $resultado_unico['Sexo'] ?>" required>
                        </div>

                        <div class="col-12">
                            <label for="text" class="form-label">Diagnostico 1</label>
                            <input type="text" class="form-control bg-light text-dark"  name="Diagnostico1" value="<?php echo $resultado_unico['Diagnostico1'] ?>" required>
                        </div>

                        <div class="col-12">
                            <label for="text" class="form-label">Diagnostico 2</label>
                            <input type="text" class="form-control bg-light text-dark"  name="Diagnostico2" value="<?php echo $resultado_unico['Diagnostico2'] ?>" required>
                        </div>

                        <div class="col-12">
                            <label for="text" class="form-label">Codigo medico</label>
                            <input type="text" class="form-control bg-light text-dark"  name="1Cod_medico" value="<?php echo $resultado_unico['1Cod_medico'] ?>" required>
                        </div>

                        <div class="col-12">
                            <label for="text" class="form-label">Cantidad 1</label>
                            <input type="text" class="form-control bg-light text-dark"  name="Cantidad1" value="<?php echo $resultado_unico['Cantidad1'] ?>" required>
                        </div>

                        <div class="col-12">
                            <label for="text" class="form-label">Codigo medico 2</label>
                            <input type="text" class="form-control bg-light text-dark"  name="2Cod_medico" value="<?php echo $resultado_unico['2Cod_medico'] ?>" required>
                        </div>

                        <div class="col-12">
                            <label for="text" class="form-label">Cantidad 2</label>
                            <input type="text" class="form-control bg-light text-dark"  name="Cantidad2" value="<?php echo $resultado_unico['Cantidad2'] ?>" required>
                        </div>

                        <input type="hidden" name="Idrecetas" value="<?php echo $resultado_unico['Idrecetas'] ?>">
                        <button class="btn btn-primary col-sm-5">Editar</button>
                        <a class="btn btn-primary col-sm-5" href="../recetas.php" >Volver al Datatable</a></center>
                    </form>
                <?php endif ?>
            </div>
        </div>
    </body>
    </Center>
</html>
