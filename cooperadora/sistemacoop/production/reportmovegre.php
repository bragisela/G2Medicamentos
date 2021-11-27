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
                <h3>reporte de egresos</h3>
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
                    <h2>desde y hasta cuando quiere saber el monto</h2>
                    
                      
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="reporteegre.php" method="POST"data-parsley-validate class="form-horizontal form-label-left">
                      
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">desde
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="date" name="desde" id="Nro"class="form-control col-md-7 col-xs-12" required>
                        </div>
                      </div>
                        

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">hasta
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="date" name="hasta" id="Nro"class="form-control col-md-7 col-xs-12" required>
                        </div>
                      </div>

                      

                      


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-xs-4 col-md-offset-4">
                          <button name="Guardarp" target="_blank" class="btn btn-primary" type="submit " >imprimir ingreso</button>
                          <button
                          type="reset" class="btn btn-default" calss="text-center">Limpiar Campos</button>
                        </div>
                      </div>
                  </form>
                    




            </form>
            </div>






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