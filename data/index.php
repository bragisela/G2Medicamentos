<?php
// conexion con la base
include_once 'conexion.php';

// llamado a la tabla
$sql_leer='SELECT * FROM usuarios';
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
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet"href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet"href="Datatables/DataTables-1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  </head>
  <body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<center></i></a></center>
<a href="agregar.php" ><img src="https://img.icons8.com/ios/50/000000/add--v1.png"></a>
<style>
  body {
          color: #566787;
    background: #f5f5f5;
    font-family: 'Varela Round', sans-serif;
    font-size: 13px;
  }
  .table-wrapper {
          background: #fff;
          padding: 20px 25px;
          margin: 30px 0;
    border-radius:1px;
          box-shadow: 0 1px 1px rgba(0, 0, 0, 0.247);
      }
  .table-title {        
    padding-bottom: 15px;
      background: linear-gradient(40deg, #2096ff, #05ffa3) !important;
    color: #fff;
    padding: 16px 30px;
    margin: -20px -25px 10px;
    border-radius: 1px 1px 0 0;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.247);
      }
      .table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
  }
  .table-title .btn-group {
    float: right;
  }
  .table-title .btn {
    color: #fff;
    float: right;
    font-size: 13px;
    border: none;
    min-width: 50px;
    border-radius: 1px;
    border: none;
    outline: none !important;
    margin-left: 10px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.247);
  }
  .table-title .btn i {
    float: left;
    font-size: 21px;
    margin-right: 5px;
  }
  .table-title .btn span {
    float: left;
    margin-top: 2px;
  }
      table.table tr th, table.table tr td {
          border-color: #e9e9e9;
    padding: 12px 15px;
    vertical-align: middle;
      }
  table.table tr th:first-child {
    width: 60px;
  }
  table.table tr th:last-child {
    width: 100px;
  }
      table.table-striped tbody tr:nth-of-type(odd) {
      background-color: #fcfcfc;
  }
  table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
  }
      table.table th i {
          font-size: 13px;
          margin: 0 5px;
          cursor: pointer;
      } 
      table.table td:last-child i {
    opacity: 0.9;
    font-size: 22px;
          margin: 0 5px;
      }
  table.table td a {
    font-weight: bold;
    color: #566787;
    display: inline-block;
    text-decoration: none;
    outline: none !important;
  }
  table.table td a:hover {
    color: #2196F3;
  }
  table.table td a.edit {
          color: #FFC107;
      }
      table.table td a.delete {
          color: #F44336;
      }
      table.table td i {
          font-size: 19px;
      }
  table.table .avatar {
    border-radius: 1px;
    vertical-align: middle;
    margin-right: 10px;
  }
      .pagination {
          float: right;
          margin: 0 0 5px;
      }
      .pagination li a {
          border: none;
          font-size: 13px;
          min-width: 20px;
          min-height: 20px;
          color: #999;
          margin: 0 2px;
          line-height: 30px;
          border-radius: 1px !important;
          text-align: center;
          padding: 0 6px;
      }
      .pagination li a:hover {
          color: #666;
      } 
      .pagination li.active a, .pagination li.active a.page-link {
          background: #03A9F4;
      }
      .pagination li.active a:hover {        
          background: #0397d6;
      }
  .pagination li.disabled i {
          color: #ccc;
      }
      .pagination li i {
          font-size: 16px;
          padding-top: 6px
      }
      .hint-text {
          float: left;
          margin-top: 10px;
          font-size: 13px;
      }    
  /* Custom checkbox */
  .custom-checkbox {
    position: relative;
  }
  .custom-checkbox input[type="checkbox"] {    
    opacity: 0;
    position: absolute;
    margin: 5px 0 0 3px;
    z-index: 9;
  }
  .custom-checkbox label:before{
    width: 18px;
    height: 18px;
  }
  .custom-checkbox label:before {
    content: '';
    margin-right: 10px;
    display: inline-block;
    vertical-align: text-top;
    background: white;
    border: 1px solid #bbb;
    border-radius: 1px;
    box-sizing: border-box;
    z-index: 2;
  }
  .custom-checkbox input[type="checkbox"]:checked + label:after {
    content: '';
    position: absolute;
    left: 6px;
    top: 3px;
    width: 6px;
    height: 11px;
    border: solid #000;
    border-width: 0 3px 3px 0;
    transform: inherit;
    z-index: 3;
    transform: rotateZ(45deg);
  }
  .custom-checkbox input[type="checkbox"]:checked + label:before {
    border-color: #03A9F4;
    background: #03A9F4;
  }
  .custom-checkbox input[type="checkbox"]:checked + label:after {
    border-color: #fff;
  }
  .custom-checkbox input[type="checkbox"]:disabled + label:before {
    color: #b8b8b8;
    cursor: auto;
    box-shadow: none;
    background: #ddd;
  }
  /* Modal styles */
  .modal .modal-dialog {
    max-width: 400px;
  }
  .modal .modal-header, .modal .modal-body, .modal .modal-footer {
    padding: 20px 30px;
  }
  .modal .modal-content {
    border-radius: 1px;
  }
  .modal .modal-footer {
    background: #ecf0f1;
    border-radius: 0 0 1px 1px;
  }
      .modal .modal-title {
          display: inline-block;
      }
  .modal .form-control {
    border-radius: 1px;
    box-shadow: none;
    border-color: #dddddd;
  }
  .modal textarea.form-control {
    resize: vertical;
  }
  .modal .btn {
    border-radius: 1px;
    min-width: 100px;
  } 
  .modal form label {
    font-weight: normal;
  } 
</style>
    <div class="container">
       <div class="row">
           <div class="col-lg-12">
           <div class="table-responsive">
                <table id="usuarios" class="table table-striped" style="width:100%">
                     <thead>
                    <th>ID</th>
                    <th>Nick</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Genero</th>
                    <th>Clave</th>
                    <th>Accion</th>
                </thead>
                <tbody>
                    <?php
                        foreach($usuarios as $usuario){
                    ?>
                    <tr>
                        <td><?php echo $usuario['id']?>
                       
                        <td><?php echo $usuario['Nick']?></td>
                        <td><?php echo $usuario['Nombre']?></td>
                        <td><?php echo $usuario['Apellido']?></td>
                        <td><?php echo $usuario['Genero']?></td>
                        <td><?php echo $usuario['Clave']?></td>
                        <td>
                        <a href="editar.php?id=<?php echo $usuario['id']?>" class="float-right"> <i class="fas fa-pencil-alt"></i></a>
                        <a href="eliminar.php?id=<?php echo $usuario['id']?>" class="float-right ml-3">
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
   
    

    <!--JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>   
    <!-- links js -->
    <script src="javascripts/js.js"></script>
    <!-- datatables -->
    <script src="Datatables/datatables.min.js"></script>
    <!-- Botones -->
    <script src="Datatables/Butons-1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="Datatables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="Datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="Datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="Datatables/Butons-1.7.0/js/buttons.html5.min.js"></script>
    

    
    
  </body>
</html>