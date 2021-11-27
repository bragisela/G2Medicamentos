<?php
include("menus.php");
include("Navegacion.php");
?>

        <!-- page content -->
  <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Registrar Valores de las cuotas</h3>
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
                    <h2>Ingresar Precios del año <?php echo date("Y") ?></h2>

                      
                    <div class="clearfix"></div>

                  </div>
                  <div class="x_content">

                    <br />
                    <form action="GuardarCuota.php" method="POST"data-parsley-validate class="form-horizontal form-label-left">
                      <?php 
                      
                      $array= array('Enero', 'Febrero','Marzo','Abril', 'Mayo','Junio','Julio', 'Agosto', 'Septiembre','Octubre','Noviembre','Diciembre');
                      
                      for ($i=0; $i<=11 ; $i++) { ?>

                      
                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="hidden" class="form-control col-md-7 col-xs-12" value="<?php echo date("Y")?>" onclick="enviar()" name="anio[]" id="anio[]" readonly> 
                        </div>
                   

                      <script type="text/javascript">
                        function enviar() {
                        var texto=document.getElementById("boton[]").value;
                        document.getElementById("input[]").value=texto;
                        }
                      </script>

                      

                     
                        
                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" name="mes[]" id="mes[]" class="date-picker form-control col-md-7 col-xs-12" type="text" value="<?php echo $array[$i]?>" readonly>
                        </div>
                    

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"><?php echo $array[$i]?>
                        </label>
                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="importe[]" id="botonn[]" class="date-picker form-control col-md-7 col-xs-12" type="number" placeholder="Ingresar Valor" required>
                        </div>
                      </div>
                    <?php $array = $array++ ; } ?>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-xs-4 col-md-offset-4">
                          
              <input type="submit" name="boton" class="btn btn-warning" value="Guardar">
                           <button type="reset" class="btn btn-default">Cancelar</button></a>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>


<div class="clearfix"></div>

            
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