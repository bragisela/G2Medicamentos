<?php
// conexion con la base
include_once '../php/conexion.php';

// llamado a la tabla
$sql_leer='SELECT * FROM stockinicial';
$gsent=$pdo->prepare($sql_leer);
$gsent->execute();
$usuarios=$gsent->fetchAll();
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link rel="text/css"href="style.css">
    <link rel="stylesheet"href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet"/>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-6">
                <div class="card">
                    <div class="card-body d-flex">
                        Desea agregar un nuevo medicamento
                        <a href="agregar.php" class="btn btn-outline-success btn-lg ml-auto">Agregar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </head>
  <body>
      <div class="container">
       <div class="row">
           <div class="col-lg-12">
           <div class="table-responsive">
                <table id="usuarios" class="table table-striped table-bordered" style="width:100%">
                     <thead>
                     <th>Codigo</th>
                     <th>Medicamento</th>
                     <th>Stock inicial</th>
                     </thead>
                <tbody>
                    <?php
                        foreach($usuarios as $usuario){
                    ?>
                    <tr>
                    <td><?php echo $usuario['Codigo']?></td>
                    <td><?php echo $usuario['Medicamento']?></td>
                    <td><?php echo $usuario['Stock_inicial']?></td>
                        <a href="editar.php?Idstockinicial=<?php echo $usuario['Idstockinicial']?>" class="float-right"> <i class="fas fa-pencil-alt"></i></a>
                        <a href="eliminar.php?Idstockinicial=<?php echo $usuario['Idstockinicial']?>" class="float-right ml-3">
                      <i class="fas fa-trash-alt"></i></a>
                  </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
           </div>
       </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>
    <script src="../Datatables/js.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- datatables -->
    <script src="../DataTables/datatables.min.js"></script>
    <!-- Botones -->
    <script src="../DataTables/Butons-1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="../DataTables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="../DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="../DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="../DataTables/Butons-1.7.1/js/buttons.html5.min.js"></script>
  </body>

</html>
