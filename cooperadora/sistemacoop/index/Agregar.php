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
                <h3>Registrar Nuevo Socio</h3>
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
                    <form action="guardarsocio.php" method="POST"data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NroSocio
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="Nro" id="Nro"class="form-control col-md-7 col-xs-12" Nom="" required>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cantidad de hijos
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="number" name="hijos" id="hijos"class="form-control col-md-7 col-xs-12" Nom="" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Dirección
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="direccion" id="Nro"class="form-control col-md-7 col-xs-12" Nom="" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <H2 class="text-center">Datos de Madre</H2>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre Y Apellido
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="nombreM" id="nomb"class="form-control col-md-7 col-xs-12" Nom="" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">DNI
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="dniM" id="do"class="form-control col-md-7 col-xs-12" Nom="" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefono
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                         <input type="text" name="teleM" id="d"class="form-control col-md-7 col-xs-12" required>
                        </div>
                      </div>

                       <div class="form-group">
                        <H2 class="text-center">Datos del Padre</H2>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre Y Apellido
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="nombreP" id="nomb"class="form-control col-md-7 col-xs-12" Nom="" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">DNI
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="dniP" id="do"class="form-control col-md-7 col-xs-12" Nom="" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefono
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                         <input type="text" name="teleP" id="d"class="form-control col-md-7 col-xs-12" required>
                        </div>
                      </div>
                     


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-xs-4 col-md-offset-4">
                          
              
              <input type="submit" class="btn btn-primary" calss="text-center" name="insertarV" value="Aceptar">
                          <a href="socios.php" button type="reset" class="btn btn-default" calss="text-center">Cancelar</button></a>
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