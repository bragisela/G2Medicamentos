<?php
include("conexion.php");


$id=$_GET['id'];

$sqlc=mysqli_query($con, "SELECT * FROM registrocuotas WHERE idcuota=$id");
$result_sqlc=mysqli_num_rows($sqlc);
if($result_sqlc==0){
  header('Location: cuotas.php');
}else{
  while($datac = mysqli_fetch_array($sqlc)){
    $mes = $datac['mes'];
    $valor = $datac['importe'];
  } 
}


if(isset($_POST['editacu'])){
  $id=$_GET['id'];
  $valorn = $_POST['valorn'];
  
  $sqlc = "UPDATE registrocuotas SET importe=$valorn WHERE idcuota=$id";
    $queryc = mysqli_query($con,$sqlc);

  if(!$queryc){
    die("fallo");

  }


  header('Location: ValoresCuotas.php');
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mes
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="edit_alumno" id="edit_alumno"class="form-control col-md-7 col-xs-12" value="<?php echo $mes; ?>" readonly>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Importe
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="valorn" id="valorn"class="form-control col-md-7 col-xs-12" value="<?php echo $valor; ?>" required>
                        </div>
                      </div>

                 

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-xs-4 col-md-offset-4">
                          
              <input type="submit" class="btn btn-primary" calss="text-center" name="editacu" value="Guardar Cambios">
                          <a href="ValoresCuotas.php" button type="reset" class="btn btn-default" calss="text-center">Cancelar</button></a>
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