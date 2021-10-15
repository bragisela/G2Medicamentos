$(document).ready(function() {
$('#usuarios').DataTable( {
      createdRow:function(row,data){
          if (data[3] =="Inactivo"){

            $("td",row).css({
              'background-color':'red'
            });
          }
        },
      language: {
              "lengthMenu": "Mostrar MENU registros",
              "zeroRecords": "No se encontraron resultados",
              "info": "Mostrando registros del START al END de un total de TOTAL registros",
              "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
              "infoFiltered": "(filtrado de un total de MAX registros)",
              "sSearch": "Buscar",
              "oPaginate": {
                  "sFirst": "Primero",
                  "sLast":"Último",
                  "sNext":"Siguiente",
                  "sPrevious": "Anterior"
               },
               "sProcessing":"Procesando Espere Por Favor",
          },
      dom: 'Bfrtip',
      responsive: 'true',
  buttons: [
  {
      extend:    'excelHtml5',
      text:      '<img src="https://img.icons8.com/color/40/000000/ms-excel.png%22/%3E',
      titleAttr: 'Exportar a Excel',

      },
      {
      extend:    'pdfHtml5',
      text:     '<img src="https://img.icons8.com/office/40/000000/pdf.png%22/%3E',
      titleAttr: 'Exportar a PDF',
      },
      {
          extend:    'print',
          text:      '<img src="https://img.icons8.com/color/40/000000/print.png%22/%3E',
          titleAttr: 'Imprimir',
      },
   ] /* '<img src="https://img.icons8.com/color/48/000000/pdf.png%22/%3E'  */
   } );
  });