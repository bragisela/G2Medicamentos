<?php
require_once 'lib/pdf/autoload.inc.php';
  ob_start();


?>
<?php 

 include 'conexion.php';


?>
      <html>
  <head>
    <title>Mostrar Datos</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
  </head>
  <body>
    <center><h1>Meses adeudados</h1></center>
    <br>
   
    <center><table class="table table-bordered text-Gray" id="dataTable" width="100%" cellspacing="0"></center>
       <thead>
          <tr>
            <th class="text-center">Nombre de Socio</th>
            <th class="text-center">Mes Impago</th>
          </tr>
        </thead>
        <tbody>
            <?php
                        $sql="SELECT * FROM socios where estado=1";


                          $result=mysqli_query($con,$sql);
                       

                        while ($row = mysqli_fetch_array($result)) { 

          $idsociok=$row['idsocio'];
                        $Reporte="SELECT s.nombreM,r.mes FROM registrocuotas r, socios s WHERE (r.idcuota not in (SELECT p.idcuota from pagodecuotas p where p.idsocio=$idsociok)) and s.idsocio=$idsociok";
                        $resultadop=mysqli_query($con,$Reporte);

                        while ($rowrp= mysqli_fetch_array($resultadop)){ 

                         ?>  

                         <tr>
                            <td><?php echo $rowrp[0]?></td>
                            
                            <td><?php echo $rowrp[1]?></td>
                          </tr>
         
                        <?php }} ?>
                     
             
                  
                </tr>
                </tbody>
    </table>
  </body>
</html>
      
   

<?php
  //buffering of html code
  $output = ob_get_clean();

  // reference the Dompdf namespace
  use Dompdf\Dompdf;

  // instantiate and use the dompdf class
  $dompdf = new Dompdf();
  $dompdf->loadHtml($output);

  // (Optional) Setup the paper size and orientation
  $dompdf->setPaper('A4', 'portrait');

  // Render the HTML as PDF
  $dompdf->render();

  // Output the generated PDF to Browser
  $filename = "PDFcedulaPH-2.pdf";
  $dompdf->stream($filename, array("Attachment" => 0));
?>

