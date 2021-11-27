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
                <h3>Registrar Nuevo Proveedor</h3>
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
                    <form action="guardarProveedor.php" method="POST"data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Razon Social
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="RSProve" id="Nro"class="form-control col-md-7 col-xs-12" Nom="" required>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cuit
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="cuitProve" id="hijos"class="form-control col-md-7 col-xs-12" Nom="" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Dirección
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="direccionProve" id="Nro"class="form-control col-md-7 col-xs-12" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefono
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="telefonoProve" id="Nro"class="form-control col-md-7 col-xs-12" required>
                        </div>
                      </div>

                    

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-xs-4 col-md-offset-4">
                          
              
              <input type="submit" class="btn btn-warning" calss="text-center" name="insertarV" value="Aceptar">
                          <a href="proveedores.php" button type="reset" class="btn btn-default" calss="text-center">Cancelar</button></a>
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