<?php
include("conexion.php");


$idIngreso=$_GET['id'];

$sql0=mysqli_query($con, "SELECT * FROM ingresos WHERE idingreso=$idIngreso");
$result_sql0=mysqli_num_rows($sql0);
if($result_sql0==0){
  header('Location: RegistroMov.php');
}else{
  while($data0 = mysqli_fetch_array($sql0)){
    $edit_fecha = $data0['Fecha'];
    $edit_cuenta = $data0['idcuenta'];
    $edit_descripcion= $data0['descripcion'];
    $edit_importe= $data0['Importe'];
  } 
}

if(isset($_POST['editaringreso'])){
  $idIngreso=$_GET['id'];
  $fechan = $_POST['edit_fecha'];
  $cuentan = $_POST['cuentan'];
  $descripcionn = $_POST['edit_descrip'];
  $importen = $_POST['edit_importein'];
  

  $sql05 = "UPDATE ingresos SET Fecha='". $fechan ."',
  idcuenta='". $cuentan ."',
  descripcion='".$descripcionn ."', 
  importe='".$importen."'
  WHERE idingreso='".$idIngreso."' ";
    $query05 = mysqli_query($con,$sql05);

    if($importen>$edit_importe){

  $sql04 = "UPDATE saldoActual SET 
  saldoActual=saldoActual+$importen-$edit_importe";
   $query04 = mysqli_query($con,$sql04);
}else{
  $sql08 ="UPDATE saldoActual SET 
  saldoActual=saldoActual-$edit_importe+$importen";
    $query08 = mysqli_query($con,$sql08);
}

  if(!$query05){
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
                          <input type="date" name="edit_fecha" class="form-control col-md-7 col-xs-12" value="<?php echo  $edit_fecha ?>" required>
                        </div>
                      </div>

                      <div class="form-group">
                  <label for="idcurso" class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Cuenta
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                      <?php
                  $query_cur = mysqli_query($con,"SELECT * from cuentas WHERE idcuenta not in (SELECT DISTINCT idcuentapadre FROM cuentas) AND tipo='I'");
                  ?>

                   <select  data-size="5" data-hide-disabled="true" class="form-control" data-live-search="true" title="Seleccione Partido" name="cuentan" >
                  <?php while ($fila = $query_cur->fetch_assoc()): ?>
                                      
                  <?php $atributo = ($fila['idcuenta'] == $edit_cuenta) ? 'selected' : '' ?>
      
                  <?php echo "<option value='".$fila['idcuenta']."'".$atributo.">".$fila['descripcion']. "</option>" ?>
                                    
                   <?php endwhile; ?>

                    </select>

        
                    </div>
                    </div>


                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Descripción
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="edit_descrip" class="form-control col-md-7 col-xs-12" value="<?php echo  $edit_descripcion ?>" required>
                        </div>
                      </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Importe
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="edit_importein" class="form-control col-md-7 col-xs-12" value="<?php echo  $edit_importe ?>" required>
                        </div>
                      </div>


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-xs-4 col-md-offset-4">
                          
              <input type="submit" class="btn btn-info" calss="text-center" name="editaringreso" value="Guardar Cambios">
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