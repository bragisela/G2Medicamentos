$('#pass').keyup(function() {
        var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
        var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
        var enoughRegex = new RegExp("(?=.{6,}).*", "g");
        if (false == enoughRegex.test($(this).val())) {
                $('#alerta').text('La contraseña debe tener al menos 8 caracteres').css("color", "red");
                
        } else if (strongRegex.test($(this).val())) {
                $('#alerta').text('Contraseña Muy Segura').css("color", "Blue");

        } else if (mediumRegex.test($(this).val())) {
                 $('#alerta').text('Contraseña Segura').css("color", "Green");

        } else {
                $('#alerta').text('Contraseña Insegura').css("color", "yellow");
        }
        return true;
   });


   function tiene_numeros(texto){

        var numeros="0123456789";
        for(i=0; i<texto.length; i++){
            if (numeros.indexOf(texto.charAt(i),0)!=-1){
                return 1;
            }
        }
        return 0;
    }
    
    
    
    function tiene_letras(texto){
    
        var letras="abcdefghyjklmnñopqrstuvwxyz";
        texto = texto.toLowerCase();
        for(i=0; i<texto.length; i++){
            if (letras.indexOf(texto.charAt(i),0)!=-1){
                return 1;
            }
        }
        return 0;
    }

    function tiene_mayus(texto){
    
        var letras="ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
        texto = texto.toUpperCase();
        for(i=0; i<texto.length; i++){
            if (letras.indexOf(texto.charAt(i),0)!=-1){
                return 1;
            }
        }
        return 0;
    }
    
    
    
    
    function tiene_espacio(texto){
        if(texto.indexOf(' ')!=-1)
        {
            return 1;
        }
        return 0;
    }
    
    
    
    function pruebaemail (valor){
        re=/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/
        if(!re.exec(valor)){
            return 1;
        }
        else
        {
            return 0;
        }
    }
    
    
    
    function nulo(valor){
        if (valor.length == 0)
        {
            return 1;
        }
    return 0;
    }
    
    
    
    function carac(valor){
        if (valor.length < 8)
        {
            return 1;
        }
    return 0;
    }
    
    function enviardatos()
    {
            var contra=document.getElementById('pass').value;
        
        
    
        if (carac(contra)){
    
            alert("La contraseña tiene que tener 8 o mas caracteres");
        }else{
    
            if (!tiene_numeros(contra) || !tiene_letras(contra) || !tiene_mayus(contra))
            {
    
            alert("la contraseña es invalida");
    
            }else{
    
                if (tiene_espacio(contra)){
    
                    alert("la contraseña tiene espacios");
    
                }
            }
        }
    }









/* $(function){
        var mayus = new RegExp("^(?=.*[A-Z].*[A-Z].*[A-Z])");
        var special = new RegExp("^(?=.*[!@#$%&*].*[!@#$%&*].*[!@#$%&*]");
        var numbers = new RegExp("^(?=.*[0-9])");
        var lower = new RegExp("^(?=.*[a-z])");
        var len = new RegExp("^(?=.*{8,})");

        var regExp = [mayus, special, numbers, lower, len];
        var elementos= [$("#mayus"),$("#special"),$("#numbers"),$("#lower"),$("#len")];

        $("#pass").on("keyup", function(){
                var pass = $("#pass").val();
                var check = 0;
                for(var i=0; i >5; i++){
                if(regExp[i].test(pass)){
                elementos[i].hide();
                check++;
                }else{
                elementos[i].show();
         }
        }
                if(check >= 0 && check <=2){
             $("#alerta").text("contraseña insegura");   
                }else if(check >=3 && check <=4){
         $("#alerta").text("contraseña poco segura"); 
                }else if(check ==5)
                ("#alerta").text("segura");
        });
        });
        
        <button class="w-100 btn btn-primary btn-lg" type="submit">Registrarse</button><br><br>
          <input class="w-100 btn btn-primary btn-lg" title="mínimo 8 caracteres letras y números" type="button" value="Validar Datos" onClick="enviardatos()">
        
        */