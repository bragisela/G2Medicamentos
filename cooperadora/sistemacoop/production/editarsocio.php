<?php
include("conexion.php");


if(empty($_GET['id']))
{
  header("Location: socios.php");
}

$id=$_GET['id'];
$sql5=mysqli_query($con, "SELECT * FROM socios WHERE idsocio=$id");
$result_sql5=mysqli_num_rows($sql5);
if($result_sql5==0){
  header('Location: socios.php');
}else{
  while($data5 = mysqli_fetch_array($sql5)){
    $idsocioe = $data5['idsocio'];
    $nrosocioe = $data5['NroSocio'];
    $direccione= $data5['direccion'];

    $nombreMe= $data5['nombreM'];
    $nombrePe= $data5['nombreP'];

    $dniMe= $data5['dniM'];
    $dniPe= $data5['dniP'];

    $teleMe= $data5['telefonoM'];
    $telePe= $data5['telefonoP'];
  } 
}


if(isset($_POST['editar'])){
  $id=$_GET['id'];
  $nrosocio = $_POST['edit_nro'];
  $edit_direccion = $_POST['edit_direccion'];

  $edit_nombreM = $_POST['edit_nombreM'];
  $edit_nombreP = $_POST['edit_nombreP'];

  $edit_dniM = $_POST['edit_dniM'];
  $edit_dniP = $_POST['edit_dniP'];
  
  $edit_telM= $_POST['edit_telM'];
  $edit_telP = $_POST['edit_telP'];
  

  $sql10 = "UPDATE socios SET NroSocio='".$nrosocio."', 
  nombreM='".$edit_nombreM."', 
  nombreP='".$edit_nombreP."', 

  dniM='".$edit_dniM."', 
  dniP='".$edit_dniP."', 

  direccion='".$edit_direccion."',

  telefonoM='".$edit_telM."',
  telefonoP='".$edit_telP."'

  WHERE idsocio='".$id."' ";
    $query10 = mysqli_query($con,$sql10);

  if(!$query10){
    die("fallo");

  }


  header('Location: socios.php');
}

include("menus.php");
include("Navegacion.php");

?>



        <!-- page content -->
          <div class="right_col" role="main">
             <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Editar Alumnos</h3>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NroSocio
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="edit_nro" id="edit_nro"class="form-control col-md-7 col-xs-12" value="<?php echo $nrosocioe; ?>" required>
                        </div>
                      </div>

                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Dirección
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="edit_direccion" id="Nro"class="form-control col-md-7 col-xs-12" value="<?php echo $direccione; ?>" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <H2 class="text-center">Datos de Madre</H2>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre Y Apellido
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="edit_nombreM" id="nomb"class="form-control col-md-7 col-xs-12" value="<?php echo $nombreMe; ?>" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">DNI
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="edit_dniM" id="do"class="form-control col-md-7 col-xs-12" value="<?php echo $dniMe; ?>" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefono
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                         <input type="text" name="edit_telM" id="d"class="form-control col-md-7 col-xs-12" value="<?php echo $teleMe; ?>" required>
                        </div>
                      </div>

                       <div class="form-group">
                        <H2 class="text-center">Datos del Padre</H2>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre Y Apellido
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="edit_nombreP" id="nomb"class="form-control col-md-7 col-xs-12" value="<?php echo $nombrePe; ?>" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">DNI
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="edit_dniP" id="do"class="form-control col-md-7 col-xs-12" value="<?php echo $dniPe; ?>" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefono
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                         <input type="text" name="edit_telP" id="d"class="form-control col-md-7 col-xs-12" value="<?php echo $telePe; ?>" required>
                        </div>
                      </div>

                  

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-xs-4 col-md-offset-4">
                          
              <input type="submit" class="btn btn-primary" calss="text-center" name="editar" value="Guardar Cambios">
                          <a href="socios.php" button type="reset" class="btn btn-default" calss="text-center">Cancelar</button></a>
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