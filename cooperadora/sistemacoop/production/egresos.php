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
                <h3>Registrar Egresos</h3>
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
                    <h2>Completar Formulario</h2>
                    
                      
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="guardaregreso.php" method="POST"data-parsley-validate class="form-horizontal form-label-left">

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Fecha
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="date" name="fechaa" class="form-control col-md-7 col-xs-12" required>
                        </div>
                      </div>


                   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cuenta
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">

                           <?php
                  $query_cuentas = mysqli_query($con,"SELECT * from cuentas WHERE idcuenta not in (SELECT DISTINCT idcuentapadre FROM cuentas) AND tipo='E'");
                  $resul_cuentas = mysqli_num_rows($query_cuentas);
                  ?> 
                         <select name="cuentaE" id="cuentaE" class="form-control" required>
                    <option value="" selected disabled>Seleccione Cuenta</option>
                 <?php
                 if($query_cuentas > 0)
                 {
                  while ($cuentas = mysqli_fetch_array($query_cuentas)) {
                 ?>
                 <option value="<?php echo $cuentas["idcuenta"]; ?>"><?php echo $cuentas["descripcion"]?></option>
                 <?php 
             }
         }
         ?>
             </select>
                  
             </div>
           </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Descripción
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="descripE" id="Nro"class="form-control col-md-7 col-xs-12" Nom="" required>
                        </div>
                      </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Importe
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="egresoim" id="Nro"class="form-control col-md-7 col-xs-12" required>
                        </div>
                      </div>


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-xs-4 col-md-offset-4">
                          
              
              <input type="submit" class="btn btn-success" calss="text-center" name="insertarV" value="Aceptar">
                    <button
                          type="reset" class="btn btn-default" calss="text-center">Limpiar Campos</button>
                        </div>
                      </div>
                  </form>
                    
              </div>
          </div>
         </div>


                      

                    
                  </div>
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