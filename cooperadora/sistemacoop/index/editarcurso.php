<?php
include("conexion.php");


$idcur=$_GET['id'];

$sqledit=mysqli_query($con, "SELECT * FROM cursos WHERE idcurso=$idcur");
$result_sqledit=mysqli_num_rows($sqledit);
if($result_sqledit==0){
  header('Location: cursos.php');
}else{
  while($dataedit = mysqli_fetch_array($sqledit)){
    $ecurso = $dataedit['curso'];
  } 
}


if(isset($_POST['editcurs'])){
  $idcur=$_GET['id'];
  $editcurso = $_POST['editcurso'];
  
  $sql2edit = "UPDATE cursos SET curso='".$editcurso ."'
  WHERE idcurso='".$idcur."' ";
    $query2editR = mysqli_query($con,$sql2edit);

  if(!$query2editR){
    die("fallo");

  }


  header('Location: Cursos.php');
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Curso
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="editcurso" id="editcurso"class="form-control col-md-7 col-xs-12" value="<?php echo $ecurso; ?>" required>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-xs-4 col-md-offset-4">
                          
              <input type="submit" class="btn btn-info" calss="text-center" name="editcurs" value="Guardar Cambios">
                          <a href="Cursos.php" button type="reset" class="btn btn-default" calss="text-center">Cancelar</button></a>
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