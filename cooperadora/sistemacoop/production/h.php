<?php
include("conexion.php");
?>
<?php


include("menus.php");
include("Navegacion.php");
?>
<!-- page content -->
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
              <h2>Datos Del socio<small></small>
              </h2>


              <div class="clearfix"></div>
            </div>



            <div class="table-responsive">
              <table id="datatable" class="table table-striped jambo_table bulk_action">
                <thead>
                  <tr>
                    <th>NroSocio</th>
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th>Direccion</th>
                    <th>Telefeno</th>


                  </tr>
                </thead>


                <tbody>
                  <?php
                  $idss=$_GET['idsocio'];
                  $sql="SELECT * FROM socios where idsocio=$idss";
                  $result=mysqli_query($con,$sql);

                  while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                      <td><?php echo $row['NroSocio']?></td>
                      <td><?php echo $row['nombreP']?></td>
                      <td><?php echo $row['dniP']?></td>
                      <td><?php echo $row['direccion']?></td>
                      <td><?php echo $row['telefonoP']?></td>


                    </tr>

                  <?php } ?>
                </tbody>
              </table>
            </tbody>

          </div>
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
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Hijos<small></small>
          </h2>


          <div class="clearfix"></div>
        </div>



        <div class="table-responsive">
          <table id="datatable" class="table table-striped jambo_table bulk_action">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>DNI</th>
                <th>Curso</th>



              </tr>
            </thead>


            <tbody>
              <?php
              $idss=$_GET['idsocio'];
              $sql2="SELECT * FROM alumnos a where a.idsocio=$idss";
              $result2=mysqli_query($con,$sql2);

              while ($row2 = mysqli_fetch_array($result2)) { ?>
                <tr>
                  <td><?php echo $row2['nombre']?></td>
                  <td><?php echo $row2['dni']?></td>
                  <td><?php echo $row2['idcurso']?></td>


                </tr>

              <?php } ?>
            </tbody>
          </table>
        </tbody>
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
  <div class="col-md-8 col-sm-7 col-xs-6 col-md-offset-2">
    <div class="x_panel">
      <div class="x_title">
        <h2>Seleccionar cuota a pagar año <?php echo date("Y") ?>
          <br>
          <br>
          <?php
          $sql="SELECT * FROM registrocuotas";
          $result=mysqli_query($con,$sql);

          while ($row = mysqli_fetch_array($result)) {
            $importe= $row['importe'];
          }
          ?>
          Monto Mensual $<?php echo $importe ?>
        </h1>




        <div class="clearfix"></div>
      </div>

      <form action="Guardarcheck.php?idsocio=<?php echo $idss?>" method=POST target="_blank">

        <select type="hidden" name="idcuota[]" id="idcuota[]" class="hidden">


          <?php
          $query_cuotas = mysqli_query($con,"SELECT idcuota, anio, mes FROM registrocuotas");
          $resul_cuotas= mysqli_num_rows($query_cuotas);

          while ($cuotas = mysqli_fetch_array($query_cuotas)) {

            $query_cuotasp = mysqli_query($con,"SELECT * FROM pagodecuotas p, registrocuotas r where p.idcuota=r.idcuota and p.idcuota=".$cuotas['idcuota']." and p.idsocio=$idss");
            $resul_cuotasp= mysqli_num_rows($query_cuotasp);
            $cuotasp = mysqli_fetch_array($query_cuotasp);
                if ($cuotasp["idcuota"]!=$cuotas["idcuota"]){
                  
                  echo '<br><br><input name="che[]" type="checkbox"  id="checkbox" class="flat"
                  value='.$cuotas['idcuota'].' ">'. $cuotas["mes"];


              }

          }

          ?>
          <br>
          <br>
          <h2>Donación (no es obligatorio)</h2>
          <div class="x_content">

            <div class="form-horizontal form-label-left">

              <input type="hidden" name="idsoc[]" id="idsoc"class="form-control col-md-7 col-xs-12" value="<?php echo $idss; ?>" required>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Importe
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  <input type="number" name="donacion" id="donacion"class="form-control col-md-7 col-xs-12">
                </div>
              </div>

             <form action="reporte.php" method="post"> 

      
      <input name="id" type="hidden" value=<?=htmlspecialchars($idss);?>>

            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 col-md-offset-4">
              <button name="Guardarp" class="btn btn-primary" type="submit " >Guardar Pago</button>
            </form>
          </div>



        </div>
      </div>
    </form>
  </div>






  <div class="clearfix"></div>


</div>


</div>
</div>
</div>






<!-- /page content -->


<?php
include("footer.php");
?>


<?php
include("scrip.php");
?>



</body>
</html>
