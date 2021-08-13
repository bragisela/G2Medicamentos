<?php
include_once 'php/conexion.php';

$sql_leer = 'SELECT * FROM clsbotiquin';
$gsent = $pdo->prepare($sql_leer);
$gsent->execute();
$resultado = $gsent->fetchAll();

if($_POST){
    
    $id = $_GET['id'];
    $codigoclsbotiquin = $_GET['Codigo'];
    $medicamentoclsbotiquin = $_GET['Medicamento'];
    $stockinicialclsbotiquin = $_GET['Stock inicial'];

    $sql_agregar = 'INSERT INTO clsbotiquin (Codigo,Medicamento,Stock inicial) VALUES (?,?,?)';
    $sentencia_agregar = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($codigoclsbotiquin,$medicamentoclsbotiquin,$stockinicialclsbotiquin));
    $sentencia_agregar = null;
    $pdo = null;
    header('location:editarfclsbotiquin.php');
}

if($_GET){
    $id = $_GET['id'];
    $sql_unico = 'SELECT * FROM clsbotiquin WHERE id=?';
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
    </head>
    <body>
        <div class="container">
            <div class="col-md-12">    
                <?php if($_GET): ?>

                    <center><h1>Editar Usuario Existente</h1></center><br>

        <form method="GET" action="editarfclsbotiquin.php">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="Codigo" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="Codigo" placeholder="" value="<?php echo $resultado_unico['Codigo'] ?>" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-sm-6">
              <label for="Medicamento" class="form-label">Apellido</label>
              <input type="" class="form-control"  name="Medicamento" placeholder="" value="<?php echo $resultado_unico['Medicamento'] ?>" required>
              <span id="alerta"></span>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div><br><br><br>
            <div class="col-12">
              <label for="Stock inicial" class="form-label">Clave </label>
              <input type="" class="form-control" name="Stock inicial" value="<?php echo $resultado_unico['Stock inicial'] ?>" required >
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            <input type="hidden" name="id" value="<?php echo $resultado_unico['id'] ?>"><br><br><br><br>
          <hr class="my-4">
              <button class="w-100 btn btn-primary btn-lg">Actualizar</button>
              <h3><a href="index.php" >Volver a la Tabla</a>
        </form>
                <?php endif ?>
            </div>
        </div>
    </body>
</html>