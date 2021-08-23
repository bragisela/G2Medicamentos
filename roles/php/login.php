<?php
include_once 'conexion.php';
include_once 'conexion2.php';
session_start();


$sql_leer='SELECT * FROM crud';
$gsent=$pdo->prepare($sql_leer);
$gsent->execute();
$usuarios=$gsent->fetchAll();

if($_POST){
$_SESSION ["usuarioRegister"] = $_POST["usuario"];
$_SESSION ["claveRegister"] = $_POST["clave"];
}

$usuarioRegister = $_SESSION ['usuarioRegister'];
$claveRegister = $_SESSION ['claveRegister'];


//verificacion

$sql ='SELECT usuario,clave,messi FROM usuarios where usuario =?';
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
  echo "numero de messi: ";
  echo $resultado['messi'];echo('<br>');
  }else{
      header("Location: ../index.php");
  }
  ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Login</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"/> <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  
<center><div class="col-sm-6">
<br>
<form action="editar.php">
<button class="w-50 btn btn-lg btn-primary" type="submit" >Editar contraseña</button>
</form>
<form action="../index.php">
<button class="w-50 btn btn-lg btn-primary" type="submit" >Salir</button>
</form>
</div>
</center><div></div>
<script type="text/javascript">

  function confirmar()
  {
    var respuesta = confirm("Seguro que deseas eliminar al usuario?")
      if(respuesta==true){
        return true;
      } 
   else {
    return false;
        }
  }
</script>
  <body><h1><h2>
    <div class="container">
       <div class="row">
           <div class="col-lg-12">
           <div class="href">
                <table id="usuarios" class="hover row-border">
                    <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Clave</th>
                    <th>Edicion</th>
                    </thead>
                 <tbody>
                    <?php
                        foreach($usuarios as $usuario){
                    ?>
                    <tr>
                        <td><?php echo $usuario['id']?>
                        <td><?php echo $usuario['nombre']?></td>
                        <td><?php echo $usuario['apellido']?></td>
                        <td><?php echo $usuario['clave']?></td>
                        <td>
                        <a href="../php/editar2.php?id=<?php echo $usuario['id']?>"><i class="fas fa-pencil-alt"></i></a>
                        <a href="../php/eliminar2.php?id=<?php echo $usuario['id']?>" class="float-right" onclick="return confirmar()"><i class="fas fa-trash-alt"></i></a>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
               </table>
           </div>
       </div> 
    </div>
    <h1><a href="php/registro.php">Registrar nuevos usuarios a la tabla</a>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>
    <script src="../js/main2.js">

      function confirmar()
      {
        var respuesta = confirm("Seguro que deseas eliminhar al usuario?")
        if(respuesta==true){
          return true;
        } else {
          return false;
        }
      }
  </script>