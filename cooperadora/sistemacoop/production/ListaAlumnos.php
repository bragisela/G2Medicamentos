<?php
include("conexion.php");




?>



<?php
include("menus.php");
include("Navegacion.php");
?>

        <!-- page content -->
  <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Alumnos</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    
                  
                  </div>
                </div>
              </div>
            </div>


<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Listado de Alumnos</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link">Minimizar<i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable" class="table table-striped jambo_table bulk_action" >
                      <thead>
                        <tr>
                          <th>Padre</th>
                          <th>Alumno</th>
                          <th>Documento</th>
                          <th>Curso</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php 
                  $sql="SELECT A.idalumno,S.nombreP,A.nombre,A.dni,C.curso FROM alumnos A INNER JOIN socios S ON S.idsocio=A.idsocio
                        INNER JOIN cursos C ON C.idcurso=A.idcurso
                        where A.estado=1";
                        $result_alumnos=mysqli_query($con,$sql);

                        while ($row = mysqli_fetch_array($result_alumnos)) { ?>
                        
                          <tr>
                            <td><?php echo $row[1]?></td>
                            <td><?php echo $row[2]?></td>
                            <td><?php echo $row[3]?></td>
                            <td><?php echo $row[4]?></td>
                            <td>
                          <a href="editaralumno.php?id=<?php echo $row['idalumno']?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Editar</a>
                              </a>
                          <a href="ElimAlum.php?id=<?php echo $row['idalumno']?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Eliminar</a>
                              </a>
                            </td>
      
                          
                          </tr>
         
                        <?php } ?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>






        <!-- /page content -->
</div>
      
</div>
    <?php
    include("footer.php");
    ?>

  
    <?php
    include("scrip.php");
    ?>
  
  </body>
</html>