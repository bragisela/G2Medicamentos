<?php
require_once 'lib/pdf/autoload.inc.php';
  ob_start();



$desde=$_POST['desde'];
$hasta=$_POST['hasta'];



?>

<?php
  $link = mysqli_connect('localhost', 'root', '', 'sistemacop');
  //Paso 3 es hacer la sentencia sql y ejecutarla
      $sql="SELECT * FROM ingresos WHERE FechaRegistro BETWEEN '$desde' and '$hasta'";

      $ejecuta_sentencia = mysqli_query($link, $sql);
      if(!$ejecuta_sentencia){
        echo'hay un error en la sentencia de sql: '.$sql; 
      }else{
  //Paso 4 es traer los resultados como un array para imprirlos en pantalla
        $pagodecuotas = mysqli_fetch_array($ejecuta_sentencia);
      }



?>




      <html>

        <?php

        echo "<img src='images/indu.png' border='0' width='100' height='100'>"; 
        echo 'Asociacion Cooperadora E.E.ST. N°1 ' . '<br />';
        echo '<br />';

        for($i=0; $i<$pagodecuotas; $i++){
           
            echo 'gano : ' . $pagodecuotas['Importe'] .' el ( ' . $pagodecuotas['FechaRegistro'].')' .'<br />';

            $pagodecuotas = mysqli_fetch_array($ejecuta_sentencia); 
          }
        ?>



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
