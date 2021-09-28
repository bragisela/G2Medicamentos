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

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css" type="text/css">

<title>Editar</title>
    </head>

    <center>
    <body class="sb-nav-fixed" style="background-image: url('../images/cover4.jpg');">
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
                            <label for="text" class="form-label">Codigo Del Medicamento</label>
                            <input type="text" class="form-control bg-light text-dark" name="Cod_medico"  value="<?php echo $resultado_unico['Cod_medico'] ?>" required>
                        </div>

                        <div class="col-12">
                            <label for="text" class="form-label">Cantidad</label>
                            <input type="text" class="form-control bg-light text-dark" name="Cantidad"  value="<?php echo $resultado_unico['Cantidad'] ?>" required>
                        </div>

                        <div class="col-12">
                            <label for="Otrocaps" class="form-label">Motivo</label>
                            <select class="form-control bg-light text-dark" aria-label="form-control bg-light text-dark" name="Motivo" value="<?php echo $resultado_unico['Motivo'] ?>" required>
                                <option value="Salidas no apta">Salidas no apta</option>
                                <option value="Otras salidas">Otras salidas</option>
                            </select>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>

                    <input type="hidden" name="Idsalidas" value="<?php echo $resultado_unico['Idsalidas'] ?>">
                        <button class="btn btn-primary col-sm-5">Editar</button>
                        <a class="btn btn-primary col-sm-5" href="../salidas.php" >Volver al Datatable</a></center>
                    </form>
                <?php endif ?>
            </div>
        </div>
    </body>
    </Center>
</html>

