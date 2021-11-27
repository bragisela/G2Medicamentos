<?php


include("conexion.php");

if(!empty($_REQUEST['id']))
 {
 
  $idcurso = $_REQUEST['id'];

  $query70cur= mysqli_query($con,"SELECT * FROM cursos WHERE idcurso=$idcurso");
  $result70cur=mysqli_num_rows($query70cur); 

  if($result70cur > 0){
    while($data70cur=mysqli_fetch_array($query70cur)){
     $idcurso = $data70cur['idcurso'];
    }

  }
 }


if(!empty($_POST))
{
   $idcurso=$_GET['id'];

  $sql70cur="UPDATE cursos SET estado=0 where idcurso='$idcurso'";
  $result70cur=mysqli_query($con,$sql70cur);
   if($result70cur){
   header('location: Cursos.php');
   }else{
    echo'error';
   }

 }


?>
<?php 
include("menus.php");
include("Navegacion.php");

?>




<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                
              </div>

              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                    <br />
                 
                    <form method="POST" action=""> 
                    
                    <h1 class="text-center">¿Está seguro de eliminar este registro?</h1>


                      <div class="ln_solid"></div>
                      <div class="form-group">
                      
                        
                      <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-xs-4 col-md-offset-4">

                          
              <button name="eliminar" class="btn btn-danger" type="submit">Aceptar</button>
                          <a href="ListaAlumnos.php" button type="reset" class="btn btn-default" calss="text-center">Cancelar</button></a>
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