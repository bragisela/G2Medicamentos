<?php
include("conexion.php");
include("menus.php");
include("Navegacion.php");
?>

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Registrar precios de las cuotas</h3>
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
                    <form action="Guardarcuota.php" method="POST"data-parsley-validate class="form-horizontal form-label-left">
                     
                       
                      <div class="form-group">
                  <label for="idcurso" class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Año
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                  <select name="año[]" id="año[]" class="form-control" required>
                    <option value="" selected disabled>Seleccionar Año</option>
                 <option value="2019">2019</option>
                 <option value="2020">2020</option>
             </select>
                  <?php
                  for($i=0; $i<10;$i++){
                  $array = ["Marzo","Abril", "Mayo","Junio","Julio","Agosto", "Septiembre","Octubre","Noviembre","Diciembre"];
              }
                  ?>
             </div>
           </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo $array[0]?>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="cuota[]" id="cuota[]" value='$Texting[$i]' class="form-control col-md-7 col-xs-12" placeholder="Ingresar Monto" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo $array[1]?>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="cuota[]" id="cuota[]"class="form-control col-md-7 col-xs-12" placeholder="Ingresar Monto"value='$Texting[$i]' required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo $array[2]?>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="cuota[]" id="cuota[]"class="form-control col-md-7 col-xs-12" placeholder="Ingresar Monto"value='$Texting[$i]' required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo $array[3]?>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="cuota[]" id="cuota[]"class="form-control col-md-7 col-xs-12" placeholder="Ingresar Monto"value='$Texting[$i]' required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo $array[4]?>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="cuota[]" id="cuota[]"class="form-control col-md-7 col-xs-12" placeholder="Ingresar Monto" value='$Texting[$i]'required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo $array[5]?>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="cuota[]" id="cuota[]"class="form-control col-md-7 col-xs-12" placeholder="Ingresar Monto"value='$Texting[$i]' required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo $array[6]?>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="cuota[]" id="cuota[]"class="form-control col-md-7 col-xs-12" placeholder="Ingresar Monto"value='$Texting[$i]' required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo $array[7]?>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="cuota[]" id="cuota[]"class="form-control col-md-7 col-xs-12" placeholder="Ingresar Monto"value='$Texting[$i]' required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo $array[8]?>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="cuota[]" id="cuota[]" class="form-control col-md-7 col-xs-12" placeholder="Ingresar Monto"value='$Texting[$i]' required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo $array[9]?>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="cuota[]" id="cuota[]"class="form-control col-md-7 col-xs-12" placeholder="Ingresar Monto"value='$Texting[$i]' required>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-xs-4 col-md-offset-4">
                          
              <button name="insertar" class="btn btn-warning" type="submit">Guardar</button>
                           <a href="socios.php" button type="" class="btn btn-default">Cancelar</button></a>
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
    <?php
    include("footer.php");
    ?>

  
    <?php
    include("scrip.php");
    ?>
  
  </body>
</html>