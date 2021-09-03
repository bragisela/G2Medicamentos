<?php

include_once '../php/conexion.php';
include_once '../verificacion.php';
$sql_leer = 'SELECT * FROM clearing';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();


if($_GET){
    $id = $_GET['Idclearing'];
    $sql_unico = 'SELECT * FROM clearing WHERE Idclearing=?';
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
                    <h2>Editar clearing</h2>
                    <form method="GET" action="editarf.php">
                    <div class="row g-3">

                    <div class="col-12">
                        <label for="date" class="form-label">Fecha</label>
                        <input type="date" class="form-control bg-light text-dark"  name="Fecha" value="<?php echo $resultado_unico['Fecha'] ?>" required>
                    </div>

                    <div class="col-12">
                        <label for="text" class="form-label">Cantidad</label>
                        <input type="text" class="form-control bg-light text-dark"  name="Cantidad" value="<?php echo $resultado_unico['Cantidad'] ?>" required>
                    </div>

                    <div class="col-12">
                        <label for="text" class="form-label">Caps</label>
                        <input type="text" class="form-control bg-light text-dark"  name="Caps" value="<?php echo $resultado_unico['Caps'] ?>" required>
                    </div>

                    <div class="col-12">
                        <label for="text" class="form-label">Codigo Del Medicamento</label>
                        <input type="text" class="form-control bg-light text-dark"  name="Cod_medico" value="<?php echo $resultado_unico['Cod_medico'] ?>" required>
                    </div>
                    
                    <div class="col-12">
                    <label for="Tipo" class="form-label">Salida/Entrada</label>
                        <select class="form-control bg-light text-dark" aria-label="form-control bg-light text-dark" name="Tipo" value="<?php echo $resultado_unico['Tipo'] ?>" required>
                            <option value="Entrada">Entrada</option>
                            <option value="Salida">Salida</option>
                        </select>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>

                    <div class="col-12">
                    <label for="Otrocaps" class="form-label">Recibido/enviado</label>
                        <select class="form-control bg-light text-dark" aria-label="form-control bg-light text-dark" name="Otrocaps" value="<?php echo $resultado_unico['Otrocaps'] ?>" required>
                            <option value="Recibido">Recibido</option>
                            <option value="Enviado">Enviado</option>
                        </select>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <label for="text" class="form-label">Ingresar Codigo Del CAPS</label>
                        <input type="text" class="form-control bg-light text-dark"  name="Idusuario" value="<?php echo $resultado_unico['Idusuario'] ?>" required>
                    </div>

                        <input type="hidden" name="Idclearing" value="<?php echo $resultado_unico['Idclearing'] ?>">
                        <button class="btn btn-primary col-sm-5">Editar</button>
                        <a class="btn btn-primary col-sm-5" href="../clearing.php" >Volver al Datatable</a></center>
                    </form>
                <?php endif ?>
            </div>
        </div>
    </body>
    </Center>
</html>
