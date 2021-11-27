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
                <h3>Donaciones</h3>
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
                    <form action="guardardonaciones.php" method=POST target="_blank" data-parsley-validate class="form-horizontal form-label-left">
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Fecha
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="date" name="fechaRegistro" id="Nro"class="form-control col-md-7 col-xs-12" required>
                        </div>
                      </div>



                       <div class="form-group">
                  <label for="idsocio" class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">¿Quien Desea Relizar el pago?
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                  <?php
                  $query_socio = mysqli_query($con,"SELECT * FROM socios");
                  $resul_socio= mysqli_num_rows($query_socio);
                  ?>
                  <select name="idsocio" id="idsocio" class="form-control" required>
                    <div id="codig"></div>
                  

              
            
                    <option value="" selected disabled>Seleccione Socio</option>
                 <?php
                 if($query_socio > 0)
                 {
                  while ($socio = mysqli_fetch_array($query_socio)) {
                 ?>
                 <option value="<?php echo $socio["idsocio"]; ?>"><?php echo $socio["nombreP"]?></option>
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
                          <input type="text" name="descripcion" id="Nro"class="form-control col-md-7 col-xs-12" Nom="" required>
                        </div>
                      </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Monto donado
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">


                          <input type="text" name="montodonado" id="Nro"class="form-control col-md-7 col-xs-12" required>
                        </div>
                      </div>


                                              <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre del responsable
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">


                          <input type="text" name="nombre" id="Nro"class="form-control col-md-7 col-xs-12" required>
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