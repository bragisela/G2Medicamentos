<?php
include("conexion.php");
include("menus.php");
include("Navegacion.php");
?>
        <!-- page content -->
       <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Administración <a href="nuevoProveedor.php" class="btn btn-warning" calss="text-center">Agregar Nuevo</button></a>
              </div> </h3>

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
                    <h2>Socios<small></small> 
                    </h2>
                   

                     <div class="clearfix"></div>
                  </div>
                
                  

              <div class="table-responsive">
                       <table id="datatable" class="table table-striped jambo_table bulk_action" >
                      <thead>
                        <tr>
                          <th>Razon Social</th>
                          <th>Cuit</th>
                          <th>direccion</th>
                          <th>telefono</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php 
                        $canth=1;

                        $sql="SELECT * FROM proveedores where estado=1";
                        $result=mysqli_query($con,$sql);

                        while ($row = mysqli_fetch_array($result)) { ?>
                          <tr>
                            <td><?php echo $row['RazonSocial']?></td>
                            <td><?php echo $row['Cuit']?></td>
                            <td><?php echo $row['direccion']?></td>
                            <td><?php echo $row['telefono']?></td>
                            <td>
                             

                           <a href="editarproveedor.php?id=<?php echo $row['idProveedor']?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                              </a>

                           <a href="eliminarproveedor.php?id=<?php echo $row['idProveedor']?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>

                             </a>
                            </td>
                           
                          </tr>
                          
         
                        <?php } ?>
                      </tbody>
                    </table>
                    </tbody>
                  

                    
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>




          </div>
        <!-- /page content -->

      
    <?php
    include("footer.php");
    ?>

  
    <?php
    include("scrip.php");
    ?>

    
	
  </body>
</html>
