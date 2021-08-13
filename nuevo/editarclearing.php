<?php
include_once 'php/conexion.php';

$sql_leer = 'SELECT * FROM clearing';
$gsent = $pdo->prepare($sql_leer);
$gsent->execute();
$resultado = $gsent->fetchAll();

if($_POST){
    
    $id = $_GET['id'];
    $fecha = $_GET['Fecha'];
    $caps = $_GET['Caps'];
    $codmedic = $_GET['Cod. Medic.'];
    $cantidad = $_GET['Cantidad'];

    $sql_agregar = 'INSERT INTO clearing (Fecha,Caps,Cod. Medic.,Cantidad) VALUES (?,?,?,?)';
    $sentencia_agregar = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($fecha,$caps,$codmedic,$cantidad));
    $sentencia_agregar = null;
    $pdo = null;
    header('location:editarfclearing.php');
}

if($_GET){
    $id = $_GET['id'];
    $sql_unico = 'SELECT * FROM clearing WHERE id=?';
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

        <form method="GET" action="editarfclearing.php">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="Fecha" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="Fecha" placeholder="" value="<?php echo $resultado_unico['Fecha'] ?>" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-sm-6">
              <label for="Caps" class="form-label">Apellido</label>
              <input type="" class="form-control"  name="Caps" placeholder="" value="<?php echo $resultado_unico['Caps'] ?>" required>
              <span id="alerta"></span>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div><br><br><br>
            <div class="col-12">
              <label for="Cod. Medic." class="form-label">Clave </label>
              <input type="" class="form-control" name="Cod. Medic." value="<?php echo $resultado_unico['Cod. Medic.'] ?>" required >
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            </div><br><br><br>
            <div class="col-12">
              <label for="Cantidad" class="form-label">Clave </label>
              <input type="" class="form-control" name="Cantidad" value="<?php echo $resultado_unico['Cantidad'] ?>" required >
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