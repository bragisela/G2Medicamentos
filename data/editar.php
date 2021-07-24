<?php

include_once 'conexion.php';

$sql_leer = 'SELECT * FROM usuarios';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();

//var_dump($resultado);

//Agregar
if($_POST){
    
    $nombre = $_POST['Nombre'];
    $genero = $_POST['Genero'];
    $apellido = $_GET['Apellido'];
    $nick = $_GET['Nick'];

    $sql_agregar = 'INSERT INTO usuarios (Nick,Apellido,Nombre,Genero) VALUES (?,?,?,?)';
    $sentencia_agregar = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($nombre,$genero,$nick,$apellido));


    $sentencia_agregar = null;
    $pdo = null;
    header('location:editarf.php');
}

if($_GET){
    $id = $_GET['id'];
    $sql_unico = 'SELECT * FROM usuarios WHERE id=?';
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
    <link rel="stylesheet" href="css/styleedit.css" type="text/css">
        <div class="form-signin">
            <div class="col-md-12">    
                <?php if($_GET): ?>
                    <h2>EDITAR USUARIOS</h2>
                    <form method="GET" action="editarf.php">
                        <h5>Ingresar Nick</h5>
                        <input type="text" class="form-control" name="Nick"  value="<?php echo $resultado_unico['Nick'] ?>">
                        <h5> Ingresar Nombre</h5>
                        <input type="text" class="form-control" name="Nombre" value="<?php echo $resultado_unico['Nombre'] ?>">
                        <h5>Ingresar Apellido</h5>
                        <input type="text" class="form-control" name="Apellido" value="<?php echo $resultado_unico['Apellido'] ?>">
                        <h5>Ingresar Genero</h5>
                        <input type="text" class="form-control" name="Genero" value="<?php echo $resultado_unico['Genero'] ?>">
                        <input type="hidden" name="id" value="<?php echo $resultado_unico['id'] ?>">
                        <button class="btn btn-outline-success" >Editar</button><br>
                        <br>
                        <center><a class="btn btn-outline-success" href="index.php" >Volver al Datatable</a></center>
                    </form>
                <?php endif ?>
            </div>
        </div>
    </body>
    </Center>
</html>