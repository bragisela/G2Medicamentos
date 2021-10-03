    $('#usuarios').DataTable( {
        createdRow:function(row,data){
            if (data[3] == 1){

              $("td",row).css({
                'background-color':'green'
              });
            }
          },
        });