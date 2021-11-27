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
      <div class="col-md-12 col-sm-6 col-xs-3 col-md-offset-6">
              <div class="x_panel">
                <div class="x_title">
                  <h2><i class="fa fa-bar-chart-o"></i> Saldo Actual</h2>
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

             <div class="col-md-12 col-sm-6 col-xs-4 col-md-offset-1">
                
                           <?php
                  $sqlsald="SELECT * FROM SaldoActual";
                  $resultsal=mysqli_query($con,$sqlsald);

                  while ($rowsal = mysqli_fetch_array($resultsal)) { ?>
                     <?php $rowsal['idsaldo']?>
                     <h2>El saldo actual es de 
                     $<?php echo $rowsal['SaldoActual']?></h2>
                  
                  <?php } ?>
                </div>



                  <div class="modal fade bs-example-modal-sm" tabindex="-10" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">


                        
            
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                        
                        </div>

                      </div>
                    </div>
                  </div>
                  <!-- /modals -->
                </div>
              </div>
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
              <h2>Ingresos 
                <a href="ingresos.php" class="btn btn-success xs" calss="text-center">Nuevo Ingreso</button></a>
              </h2>


              <div class="clearfix"></div>
            </div>



            <div class="table-responsive">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th class="text-center">FechaIngreso</th>
                    <th class="text-center">Cuenta</th>
                    <th class="text-center">Descrpción</th>
                    <th class="text-center">Importe</th>
                    <th class="text-center">Acciones</th>


                  </tr>
                </thead>


                <tbody>
                  <?php
                  $sqlk="SELECT i.idingreso, i.Fecha, c.descripcion, i.descripcion, i.Importe, i.FechaRegistro FROM ingresos i INNER JOIN cuentas c where c.idcuenta=i.idcuenta";
                  $resultk=mysqli_query($con,$sqlk);

                  while ($rowk = mysqli_fetch_array($resultk)) { ?>
                    <tr>
                      <td class="text-center"><?php echo $rowk[1]?></td>
                      <td class="text-center"><?php echo $rowk[2]?></td>
                      <td class="text-center"><?php echo $rowk[3]?></td>
                      <td class="text-center">$<?php echo $rowk [4]?></td>
                      <td class="text-center"><a href="editaringreso.php?id=<?php echo $rowk[0]?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                      </a></td>

                    </tr>

                  <?php } ?>
                </tbody>
              </table>
            </tbody>

          </div>
        </div>

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
              <h2>Egresos
              <a href="egresos.php" class="btn btn-success " calss="text-center">Nuevo Egreso</button></a>
              </h2>


              <div class="clearfix"></div>
            </div>

             <div class="table-responsive">
              <table id="examp" name="f" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th class="text-center">FechaEgreso</th>
                    <th class="text-center">Cuenta</th>
                    <th class="text-center">Descripción</th>
                    <th class="text-center">Importe</th>
                    <th class="text-center">Acciones</th>


                  </tr>
                </thead>


                <tbody>
                  <?php
                  $sqlt="SELECT e.idegreso, e.Fecha, c.descripcion, e.descripcion, e.ImporteE, e.FechaRegistro FROM egresos e INNER JOIN cuentas c where c.idcuenta=e.idcuenta";
                  $resultt=mysqli_query($con,$sqlt);

                  while ($rowt = mysqli_fetch_array($resultt)) { ?>
                    <tr>
                      <td class="text-center"><?php echo $rowt[1]?></td>
                      <td class="text-center"><?php echo $rowt[2]?></td>
                      <td class="text-center"><?php echo $rowt[3]?></td>
                      <td class="text-center">$<?php echo $rowt[4]?></td>
                      <td class="text-center"><a href="editegreso.php?id=<?php echo $rowt[0]?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                      </a></td>


                    </tr>

                  <?php } ?>
                </tbody>
              </table>
            </tbody>


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
              <h2>Donaciones
              <a href="donaciones.php" class="btn btn-success " calss="text-center">Donaciones</button></a>
              </h2>


              <div class="clearfix"></div>
            </div>

             <div class="table-responsive">
              <table id="examp" name="f" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th class="text-center">FechaDonacion</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Descripcion</th>
                    <th class="text-center">Monto</th>



                  </tr>
                </thead>


                <tbody>
                  <?php
                  $sqlt="SELECT d.idsocio, d.FechaRegistro, s.nombreP, d.descripcion, d.montodonado FROM donacion d INNER JOIN socios s where s.idsocio=d.idsocio";
                  $resultt=mysqli_query($con,$sqlt);

                  while ($rowt = mysqli_fetch_array($resultt)) { ?>
                    <tr>
                      <td class="text-center"><?php echo $rowt[1]?></td>
                      <td class="text-center"><?php echo $rowt[2]?></td>
                      <td class="text-center"><?php echo $rowt[3]?></td>
                      <td class="text-center">$<?php echo $rowt[4]?></td>
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

  <div class="clearfix"></div>


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
<script type="text/javascript">
$(function () {
    table= $('#examp').DataTable()
    });

</script>