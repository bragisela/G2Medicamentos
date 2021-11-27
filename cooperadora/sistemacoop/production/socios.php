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
                <h3> Administración <a href="Agregar.php" class="btn btn-primary" calss="text-center">Nuevo Socio</button></a>
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
                          <th>NroSocio</th>
                          <th>Padre</th>
                          <th>Direccion</th>
                          <th>TelPadre</th>
                          <th>Acciones</th>
                          <th>Hijos</th>

                        </tr>
                      </thead>


                      <tbody>
                        <?php
                        $canth=1;

                        $sql="SELECT * FROM socios where estado=1";
                        $result=mysqli_query($con,$sql);

                        while ($row = mysqli_fetch_array($result)) { ?>
                          <tr>
                            <td><?php echo $row['NroSocio']?></td>
                            <td><?php echo $row['nombreP']?></td>

                            <td><?php echo $row['direccion']?></td>

                            <td><?php echo $row['telefonoP']?></td>
                            <td>


                           <a href="editarsocio.php?id=<?php echo $row['idsocio']?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                              </a>

                           <a href="eliminarsocio.php?id=<?php echo $row['idsocio']?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>

                             </a>
                            </td>
                            <td><a href="hijos.php?ids=<?php echo $row['idsocio']?>&hijos=1"  class="btn btn-success btn-xs"><i title="Agregar Hijos">Agregar</i>
                              </a></td>
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
