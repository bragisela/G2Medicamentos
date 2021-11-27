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
                <h3>Cuotas</h3>
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
                    <h2>Listado de las cuotas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link">Minimizar<i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Año</th>
                          <th>Mes</th>
                          <th>Importe</th>
                          <th>Actualizar</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php 
                        $sqlc="SELECT * FROM registrocuotas";
                        $result_cuotas=mysqli_query($con,$sqlc);

                        while ($rowc = mysqli_fetch_array($result_cuotas)) { ?>
                          <tr>
                            
                            <td><?php echo $rowc['anio']?></td>
                            <td><?php echo $rowc['mes']?></td>
                            <td>$<?php echo $rowc['importe']?></td>
                            <td>
                          <a href="Actualizarvalor.php?id=<?php echo $rowc['idcuota']?>"class="btn btn-warning"><i class="fa fa-pencil"  class="center"> Editar</i></a>
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