<?php

include_once '../php/conexion.php';
include_once '../verificacion.php';
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
                        <label for="text" class="form-label">Codigo</label>
                        <input type="text" class="form-control bg-light text-dark"  name="Codigo" value="<?php echo $resultado_unico['Codigo'] ?>" required>
                    </div>

                    <div class="col-12">
                        <label for="text" class="form-label">Medicamento</label>
                        <input type="text" class="form-control bg-light text-dark"  name="Medicamento" value="<?php echo $resultado_unico['Medicamento'] ?>" required>
                    </div>

                    <div class="col-12">
                        <label for="text" class="form-label">stock inicial</label>
                        <input type="text" class="form-control bg-light text-dark"  name="Stock_inicial" value="<?php echo $resultado_unico['Stock_inicial'] ?>" required>
                    </div>
                     
                        <input type="hidden" name="Idclsbotiquin" value="<?php echo $resultado_unico['Idclsbotiquin'] ?>">
                        <button class="btn btn-primary col-sm-5">Editar</button>
                        <a class="btn btn-primary col-sm-5" href="../clsbotiquin.php" >Volver al Datatable</a></center>
                    </form>
                <?php endif ?>
            </div>
        </div>
    </body>
    </Center>
</html>
