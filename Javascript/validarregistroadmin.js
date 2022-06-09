function validarregistroadmin()
{

     // Despejar Puntos
     var valor = document.form2.rut.value.replace('.','');
     // Despejar Guión
     valor = valor.replace('-','');
     
     // Aislar Cuerpo y Dígito Verificador
     cuerpo = valor.slice(0,-1);
     dv = valor.slice(-1).toUpperCase();
     
     // Formatear RUN
     document.form2.rut.value = cuerpo + '-'+ dv
     
     // Si no cumple con el mínimo ej. (n.nnn.nnn)
     if(cuerpo.length < 7) { alert("Debe ingresar un RUT valido"); return false;}
     
     // Calcular Dígito Verificador
     suma = 0;
     multiplo = 2;
     
     // Para cada dígito del Cuerpo
     for(i=1;i<=cuerpo.length;i++) {
     
         // Obtener su Producto con el Múltiplo Correspondiente
         index = multiplo * valor.charAt(cuerpo.length - i);
         
         // Sumar al Contador General
         suma = suma + index;
         
         // Consolidar Múltiplo dentro del rango [2,7]
         if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }
   
     }
     
     
     
 

 if(document.form2.rut.value=="")
 {
     alert("Debe ingresar un RUT");
     document.form2.rut.focus();
     return false;
 }
 

    if(document.form2.nombres.value=="")
    {
        alert("Debe ingresar los nombres");
        document.form2.nombres.focus();
        return false;
    }
    var m = document.form2.nombres.value;
    var expreg = /^[A-Za-z0-9_ -]{1,1000}$/;
    
    if(!expreg.test(m)){

        alert("Debe ingresar un nombre valido");
        document.form2.nombres.focus();
        return false;
      
    }
    

    if(document.form2.apellidos.value=="")
    {
        alert("Debe ingresar los apellidos");
        document.form2.apellidos.focus();
        return false;
    }
    var m = document.form2.apellidos.value;
    var expreg = /^[A-Za-z0-9_ -]{1,1000}$/;
    
    if(!expreg.test(m)){

        alert("Debe ingresar un apellido valido");
        document.form2.apellidos.focus();
        return false;
      
    }
   
   

    if(document.form2.user.value=="")
    {
        alert("Debe ingresar un usuario");
        document.form2.user.focus();
        return false;
    }
    
    if(document.form2.pass.value=="")
    {
        alert("Debe ingresar una clave");
        document.form2.pass.focus();
        return false;
    }
    

    if(document.form2.fechanac.value=="")
    {
        alert("Debe ingresar la fecha de nacimiento");
        document.form2.fechanac.focus();
        return false;
    }
    
    if(document.form2.tipo.value=="")
    {
        alert("Debe ingresar el tipo de usuario");
        document.form2.tipo.focus();
        return false;
    }
    if(document.form2.estado.value=="")
    {
        alert("Debe ingresar el estado del usuario");
        document.form2.estado.focus();
        return false;
    }
    if(document.form2.telefono.value=="")
    {
        alert("Debe ingresar un telefono");
        document.form2.telefono.focus();
        return false;
    }

    var t = document.form2.telefono.value;
    var expreg = /^[0-9]{8,9}$/;

    if(!expreg.test(t)){

        alert("Debe ingresar solo numeros en el telefono (9 digitos)");
        document.form2.telefono.focus();
        return false;
      
    }


    if(document.form2.correo.value=="")
    {
        alert("Debe ingresar un correo electronico");
        document.form2.correo.focus();
        return false;
    }


    var m = document.form2.correo.value;
    
    emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
   
    if (!emailRegex.test(m)) {
      
        alert("Debe Ingresar un correo valido");
        document.form2.frmmail.focus();
        return false;
    
    }


   

    

      

    document.form2.submit();
}