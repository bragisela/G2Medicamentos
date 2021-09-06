<?php
include_once 'conexion2.php';
session_start();
$usuarioRegister = $_SESSION ['usuarioRegister'];
$claveRegister = $_SESSION ['claveRegister'];


//verificacion

$sql ='SELECT usuario,clave FROM usuarios where usuario =?';
$sentencia= $pdo->prepare($sql);
$sentencia->execute(array($usuarioRegister));
$resultado=$sentencia->fetch();

if(!$resultado['usuario']){
  echo "usuario inexistente";
  header("Location: ../index.php");
  die();
  }
  if(password_verify($claveRegister, $resultado['clave']))
  {
  echo "Usuario: ";
  echo $usuarioRegister;echo('<br>');
  echo "Clave: ";
  echo $claveRegister;echo('<br>');
  echo "Clave Hash: ";
  echo $resultado['clave'];echo('<br>');
  }else{
      header("Location: ../index.php");
      die();
  }

$sql_leer = 'SELECT * FROM crud';
$gsent = $pdo->prepare($sql_leer);
$gsent->execute();
$resultado = $gsent->fetchAll();


if($_POST){
    
    $nombre = $_POST['nombre'];
    $apellido = $_GET['apellido'];
    $clave = $_GET['clave'];

    $sql_agregar = 'INSERT INTO crud (nombre,apellido,clave) VALUES (?,?,?,?)';
    $sentencia_agregar = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($nombre,$apellido,$clave));
    $sentencia_agregar = null;
    $pdo = null;
    header('location:php/editarfuncionalidad.php');
}

if($_GET){
    $id = $_GET['id'];
    $sql_unico = 'SELECT * FROM crud WHERE id=?';
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

        <form method="GET" action="editarfuncionalidad.php">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre" placeholder="" value="<?php echo $resultado_unico['nombre'] ?>" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-sm-6">
              <label for="apellido" class="form-label">Apellido</label>
              <input type="" class="form-control"  name="apellido" placeholder="" value="<?php echo $resultado_unico['apellido'] ?>" required>
              <span id="alerta"></span>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div><br><br><br>
            <span id="passstrength"></span>
            <div class="col-12">
              <label for="clave" class="form-label">Clave </label>
              <input type="" class="form-control" name="clave" value="<?php echo $resultado_unico['clave'] ?>" required >
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            <input type="hidden" name="id" value="<?php echo $resultado_unico['id'] ?>"><br><br><br><br>
          <hr class="my-4">
              <button class="w-100 btn btn-primary btn-lg">Actualizar</button>
              <h3><a href="login.php" >Volver a la Tabla</a>
        </form>
                <?php endif ?>
            </div>
        </div>
    </body>
</html>
