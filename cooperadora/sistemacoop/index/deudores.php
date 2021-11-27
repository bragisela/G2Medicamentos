<?php 
include("conexion.php");
include("menus.php");
include("Navegacion.php");
?>
       <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
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
                    <h2>Socios<small></small> 
                    </h2>
                   

                     <div class="clearfix"></div>
                  </div>
                
                  <form action="deudoresRep.php" method="POST">
<div class="table-responsive">
                       <table id="datatable" class="table table-striped jambo_table bulk_action" >
                      <thead>
                        <tr>
                          <th>Nombre Socio</th>
                          <th>Mes Impago</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php

                        $sql="SELECT * FROM socios where estado=1";


                          $result=mysqli_query($con,$sql);
                       

                        while ($row = mysqli_fetch_array($result)) { 

					$idsocio=$row['idsocio'];
					 $sql2="SELECT s.nombreM,r.mes FROM registrocuotas r, socios s WHERE (r.idcuota not in (SELECT p.idcuota from pagodecuotas p where p.idsocio=$idsocio)) and s.idsocio=$idsocio";
					 $result1=mysqli_query($con,$sql2);

                      while ($row1 = mysqli_fetch_array($result1)) {
                        	?>
                          <tr>
                            <td><?php echo $row1['nombreM']?></td>
                            <td><?php echo $row1['mes']?></td>
                          </tr>
                          
         
                        <?php }} ?>
                      </tbody>
                    </table>
                    
                    <input type="hidden" name="kk" value="4">
                   <input type="submit" class="d-none d-sm-inline-block btn btn-sm btn-warning" name="exportar" value="Generar PDF"/></center></a>
                    
                    </tbody>
                  

                    </form>
          </div>
  
    <?php
    include("scrip.php");
    ?>
