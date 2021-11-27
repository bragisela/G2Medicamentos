<?php
include("conexion.php");
include("menus.php");
include("Navegacion.php");
?>
        <!-- page content -->
          <div class="right_col" role="main">
             <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Administración de Cursos</h3>
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
              <div class="row" class="center">
        <div class="col-md-8 col-sm-8 col-xs-8 col-md-offset-2">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Completar Formulario</h2>
                    
                      
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="guardarcurso.php" method="POST"data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Curso
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" name="curs" id="curs"class="form-control col-md-7 col-xs-12" Nom="" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-xs-4 col-md-offset-5">
                          
              
              <input type="submit" class="btn btn-info" calss="text-center" name="insertarV" value="Aceptar">
                         
                        </div>
                      </div>
                  </form>
                    
              </div>
          </div>
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
              <div class="col-md-12 col-sm-4 col-xs-4">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Cursos<small></small> 
                    </h2>
                   

                     <div class="clearfix"></div>
                  </div>
                
                  

              <div class="table-responsive">
                       <table id="datatable" class="table table-striped jambo_table bulk_action" >
                      <thead>
                        <tr>
                          <th>Curso</th>

                          <th>Acciones</th>
                        
                          
                        </tr>
                      </thead>


                      <tbody>
                        <?php 
                        $canth=1;
                        
                        $sqlcur="SELECT * FROM cursos where estado=1 ORDER BY idcurso asc";
                        $resultcur=mysqli_query($con,$sqlcur);

                        while ($rowcur = mysqli_fetch_array($resultcur)) { ?>
                          <tr>
                            <td><?php echo $rowcur['curso']?></td>
                         
                         
                            <td>
                             

                           <a href="editarcurso.php?id=<?php echo $rowcur['idcurso']?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                              </a>

                           <a href="elimcurso.php?id=<?php echo $rowcur['idcurso']?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>

                             </a>
                            </td>
                          </tr>
                          
         
                        <?php } ?>
                      </tbody>
                    </table>
                    </tbody>
                  

                    
          </div>
        </div>
      </div>
    </div>
                    
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