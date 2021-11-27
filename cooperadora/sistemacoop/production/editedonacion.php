<?php
include("conexion.php");


$idDonacion=$_GET['id'];

$sql09=mysqli_query($con, "SELECT * FROM donacion WHERE iddonacion=$idDonacion");
$result_sql09=mysqli_num_rows($sql09);
if($result_sql09==0){
  header('Location: RegistroMov.php');
}else{
  while($data09 = mysqli_fetch_array($sql09)){
    $edit_fechaE = $data09['FechaRegistro'];
    $edit_cuentaE = $data09['idsocio'];
    $edit_descripcionE= $data09['descripcion'];
    $edit_importeE= $data09['montodonado']; 
  } 
}

if(isset($_POST['editarDonacion'])){
  $idDonacion=$_GET['id'];
  $fechanE = $_POST['edit_fechaE'];
  $CuentaEdit = $_POST['CuentaEdit'];
  $descripcionnE = $_POST['edit_descripE'];
  $importenE = $_POST['edit_importeinE'];
  

  $sql095 = "UPDATE donacion SET FechaRegistro='". $fechanE ."',
  idsocio='". $CuentaEdit ."',
  descripcion='".$descripcionnE ."', 
  montodonado='".$importenE."'
  WHERE iddonacion='".$idDonacion."' ";
    $query095 = mysqli_query($con,$sql095);

    if($importenE>$edit_importeE){

  $sql049 = "UPDATE saldoActual SET 
  saldoActual=saldoActual-$importenE+$edit_importeE";
   $query049 = mysqli_query($con,$sql049);
}else{
  $sql089 ="UPDATE saldoActual SET 
  saldoActual=saldoActual+$edit_importeE-$importenE";
    $query089 = mysqli_query($con,$sql089);
}

  if(!$query095){
    die("fallo");

  }

  header('Location: RegistroMov.php');
}


include("menus.php");
include("Navegacion.php");

?>



        <!-- page content -->
          <div class="right_col" role="main">
             <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Editar</h3>
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
                    <h2>Se estan editanto los datos</h2>
                    
                      
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="" method="POST"data-parsley-validate class="form-horizontal form-label-left">

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Fecha
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="date" name="edit_fechaE" class="form-control col-md-7 col-xs-12" value="<?php echo  $edit_fechaE ?>" required>
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


                            <div class="form-group">
                  
                        <div class="col-md-6 col-sm-6 col-xs-12">

                    </select>

        
                    </div>
                    </div>



                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Descripción
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="edit_descripE" class="form-control col-md-7 col-xs-12" value="<?php echo  $edit_descripcionE ?>" required>
                        </div>
                      </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Importe
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="edit_importeinE" class="form-control col-md-7 col-xs-12" value="<?php echo  $edit_importeE ?>" required>
                        </div>
                      </div>


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-xs-4 col-md-offset-4">
                          
              <input type="submit" class="btn btn-info" calss="text-center" name="editarEgreso" value="Guardar Cambios">
                          <a href="RegistroMov.php" button type="reset" class="btn btn-default" calss="text-center">Cancelar</button></a>
                        </div>
                      </div>

                    </form>
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