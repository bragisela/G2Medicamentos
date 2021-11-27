<?php
include("conexion.php");


$id=$_GET['id'];

$sql12=mysqli_query($con, "SELECT * FROM alumnos WHERE idalumno=$id");
$result_sql12=mysqli_num_rows($sql12);
if($result_sql12==0){
  header('Location: hijos.php');
}else{
  while($data12 = mysqli_fetch_array($sql12)){
    $alu = $data12['nombre'];
    $cod = $data12['dni'];
    $idcursoE = $data12['idcurso'];
  } 
}


if(isset($_POST['editaralum'])){
  $id=$_GET['id'];
  $alumnoN = $_POST['edit_alumno'];
  $DocumentoN = $_POST['edit_doc'];
  $Curso = $_POST['cursolect'];
  

  $sql25 = "UPDATE alumnos SET nombre='".$alumnoN ."',
  nombre='".$alumnoN ."', 
  idcurso='".$Curso."'
  WHERE idalumno='".$id."' ";
    $query25 = mysqli_query($con,$sql25);

  if(!$query25){
    die("fallo");

  }


  header('Location: ListaAlumnos.php');
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="edit_alumno" id="edit_alumno"class="form-control col-md-7 col-xs-12" value="<?php echo $alu; ?>" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Documento
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="edit_doc" id="edit_doc"class="form-control col-md-7 col-xs-12" value="<?php echo $cod; ?>" required>
                        </div>
                      </div>

                      <div class="form-group">
                  <label for="idcurso" class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Curso
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                      <?php
                  $query_cur = mysqli_query($con,"SELECT * FROM cursos");
                  ?>

    <select id="partido" data-size="5" data-hide-disabled="true" class="form-control" data-live-search="true" title="Seleccione Partido" name="cursolect" >
    <?php while ($fila = $query_cur->fetch_assoc()): ?>
                                      
     <?php $atributo = ($fila['idcurso'] == $idcursoE) ? 'selected' : '' ?>
      
   <?php echo "<option value='".$fila['idcurso']."'".$atributo.">".$fila['curso']. "</option>" ?>
                                    
     <?php endwhile; ?>
    </select>

        
</div>
</div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-xs-4 col-md-offset-4">
                          
              <input type="submit" class="btn btn-info" calss="text-center" name="editaralum" value="Guardar Cambios">
                          <a href="ListaAlumnos.php" button type="reset" class="btn btn-default" calss="text-center">Cancelar</button></a>
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