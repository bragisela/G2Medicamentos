$(document).ready(function() {
    $('#usuarios').DataTable( {
        language: {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
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
		text:      '<img src="https://img.icons8.com/color/40/000000/ms-excel.png"/>',
		titleAttr: 'Exportar a Excel',
			
		},
		{
		extend:    'pdfHtml5',
		text:     '<img src="https://img.icons8.com/office/40/000000/pdf.png"/>',
		titleAttr: 'Exportar a PDF',
		},
		{
			extend:    'print',
			text:      '<img src="https://img.icons8.com/color/40/000000/print.png"/>',
			titleAttr: 'Imprimir',
		},
	 ] /* '<img src="https://img.icons8.com/color/48/000000/pdf.png"/>'  */
     } );
} );