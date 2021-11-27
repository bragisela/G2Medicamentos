
<?php
include("conexion.php");
$result="SELECT * from socios where estado=1";
    $pp=mysqli_query($con,$result);
?>
<?php

include("menus.php");
include("Navegacion.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <title>Tabla</title>
  
  
  
  
 
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">
  
  

  <script src="librerias/select2/js/select2.js"></script>
  
 



  
  
 
  
  
</head>
        <!-- page content -->
  <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Pagar Cuotas</h3>
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
                    <h2>Seleccionar Socio</h2>

                      
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="h.php" method="GET"data-parsley-validate class="form-horizontal form-label-left">

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




                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-xs-4 col-md-offset-4">
                          
              <button name="" class="btn btn-warning" type="submit">Aceptar</button>
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
<script type="text/javascript">
  $(document).ready(function(){
    $('#codig').load('PagarCuota.php');
  });
</script>
      
</div>
    <?php
    include("footer.php");
    ?>

  
    <?php
    include("scrip.php");
    ?>
  
  </body>
</html>

