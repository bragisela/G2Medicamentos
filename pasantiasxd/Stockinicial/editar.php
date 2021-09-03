<?php

include_once '../php/conexion.php';
include_once '../verificacion.php';
$sql_leer = 'SELECT * FROM stockinicial';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();


if($_GET){
    $id = $_GET['Idstockinicial'];
    $sql_unico = 'SELECT * FROM stockinicial WHERE Idstockinicial=?';
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
                        <input type="text" class="form-control" name="Codigo"  value="<?php echo $resultado_unico['Codigo'] ?>">


                        <h5> Ingresar Cantidad</h5>
                        <input type="text" class="form-control" name="Medicamento" value="<?php echo $resultado_unico['Medicamento'] ?>">

                        <h5>Ingresar caps</h5>
                        <input type="text" class="form-control" name="Stock_inicial" value="<?php echo $resultado_unico['Stock_inicial'] ?>">


                        <input type="hidden" name="Idstockinicial" value="<?php echo $resultado_unico['Idstockinicial'] ?>">
                        <button class="btn btn-outline-primary" >Editar</button><br>
                        <br>
                        <center><a class="btn btn-outline-success" href="../stockinicial.php" >Volver al Datatable</a></center>
                    </form>
                <?php endif ?>
            </div>
        </div>
    </body>
    </Center>
</html>
