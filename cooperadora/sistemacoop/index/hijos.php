<?php
include("conexion.php");


$ids=$_GET['ids'];
$var=$_GET['hijos'];


?>


<?php
include("menus.php");
include("Navegacion.php");
?>


  <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Registrar Alumnos</h3>
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
                 
                    <form action="GuardarAlumno.php" method="POST"data-parsley-validate class="form-horizontal form-label-left">

                      <?php
                
                      for ($i=0; $i < $var ; $i++) { 
                      ?>
                       
                        <div class="form-group">
                          <H2> Datos del hijo <?php echo $i+1; ?> </H2>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="hidden" name="idsoc[]" id="idsoc"class="form-control col-md-7 col-xs-12" value="<?php echo $ids; ?>" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="alumno[]" id="alumno[]"class="form-control col-md-7 col-xs-12" Nom="" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">DNI
                        </label>
                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="dni[]" id="dni[]" class="date-picker form-control col-md-7 col-xs-12" type="text" required>
                        </div>
                      </div>

                     <div class="form-group">
                  <label for="idcurso" class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Curso
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                  <?php
                  $query_curso = mysqli_query($con,"SELECT * FROM cursos");
                  $resul_curso = mysqli_num_rows($query_curso);
                  ?>
                  <select name="idcurso[]" id="idcurso[]" class="form-control" required>
                    <option value="" selected disabled>Seleccione Curso</option>
                 <?php
                 if($query_curso > 0)
                 {
                  while ($curso = mysqli_fetch_array($query_curso)) {
                 ?>
                 <option value="<?php echo $curso["idcurso"]; ?>"><?php echo $curso["curso"]?></option>
                 <?php 
             }
         }
         ?>
             </select>
                  
             </div>
           </div>

          <?php 
        }  ?>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-xs-4 col-md-offset-4">
                          
              <button name="insertarH" class="btn btn-warning" type="submit">Guardar</button>
                           <a href="socios.php" button type="" class="btn btn-default">Cancelar</button></a>
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