<?php

include_once '../php/conexion.php';

$sql_leer = 'SELECT * FROM clsbotiquin';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();

if($_GET){
    $id = $_GET['Idclsbotiquin'];
    $sql_unico = 'SELECT * FROM clsbotiquin WHERE Idclsbotiquin=?';
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

                      <h6>Ingrese el codigo</h6><input type="number" class="form-control mt-3" name="Codigo"  value="<?php echo $resultado_unico['Codigo'] ?>">
                      <h6>Ingrese Medicamento</h6><input type="text" class="form-control mt-3" name="Medicamento" value="<?php echo $resultado_unico['Medicamento'] ?>">
                      <h6>Ingrese el stock inicial</h6><input type="number" class="form-control mt-3" name="Stock_inicial" value="<?php echo $resultado_unico['Stock_inicial'] ?>">


                        <input type="hidden" name="Idclsbotiquin" value="<?php echo $resultado_unico['Idclsbotiquin'] ?>">
                        <button class="btn btn-outline-primary" type="submit" >Editar</button><br>
                        <br>
                        <center><a class="btn btn-outline-success" href="../clsbotiquin.php" >Volver al Datatable</a></center>
                    </form>
                <?php endif ?>
            </div>
        </div>
    </body>
    </Center>
</html>
