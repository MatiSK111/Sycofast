function validarregistro()
{

     // Despejar Puntos
     var valor = document.form1.rut.value.replace('.','');
     // Despejar Guión
     valor = valor.replace('-','');
     
     // Aislar Cuerpo y Dígito Verificador
     cuerpo = valor.slice(0,-1);
     dv = valor.slice(-1).toUpperCase();
     
     // Formatear RUN
     document.form1.rut.value = cuerpo + '-'+ dv
     
     // Si no cumple con el mínimo ej. (n.nnn.nnn)
     if(cuerpo.length < 7) { alert("Debe Ingresar rut valido"); return false;}
     
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
     
     // Calcular Dígito Verificador en base al Módulo 11
     dvEsperado = 11 - (suma % 11);
     
     // Casos Especiales (0 y K)
     dv = (dv == 'K')?10:dv;
     dv = (dv == 0)?11:dv;
     
     // Validar que el Cuerpo coincide con su Dígito Verificador
     if(dvEsperado != dv) {alert("Debe Ingresar rut valido"); return false; }
     
 

 if(document.form1.rut.value=="")
 {
     alert("Debe ingresar un RUT");
     document.form1.rut.focus();
     return false;
 }
 var m = document.form1.rut.value;
 var expreg = /^[A-Za-z0-9_-]{1,1000}$/;
 
 if(!expreg.test(m)){

     alert("Debe ingresar RUT valido");
     document.form1.rut.focus();
     return false;
   
 }

    if(document.form1.nombres.value=="")
    {
        alert("Debe ingresar los nombres");
        document.form1.nombres.focus();
        return false;
    }
    var m = document.form1.nombres.value;
    var expreg = /^[A-Za-z0-9_ -]{1,1000}$/;
    
    if(!expreg.test(m)){

        alert("Debe ingresar un nombre valido");
        document.form1.nombres.focus();
        return false;
      
    }
    

    if(document.form1.apellidos.value=="")
    {
        alert("Debe ingresar los apellidos");
        document.form1.apellidos.focus();
        return false;
    }
    var m = document.form1.apellidos.value;
    var expreg = /^[A-Za-z0-9_ -]{1,1000}$/;
    
    if(!expreg.test(m)){

        alert("Debe ingresar un apellido valido");
        document.form1.apellidos.focus();
        return false;
      
    }
   
   

    if(document.form1.user.value=="")
    {
        alert("Debe ingresar un usuario");
        document.form1.user.focus();
        return false;
    }
    
    if(document.form1.pass.value=="")
    {
        alert("Debe ingresar una clave");
        document.form1.pass.focus();
        return false;
    }
    

    if(document.form1.fechanac.value=="")
    {
        alert("Debe ingresar la fecha de nacimiento");
        document.form1.fechanac.focus();
        return false;
    }
    
    if(document.form1.direccion.value=="")
    {
        alert("Debe ingresar una dirección");
        document.form1.direccion.focus();
        return false;
    }
    if(document.form1.tipo.value=="")
    {
        alert("Debe ingresar un tipo de usuario");
        document.form1.tipo.focus();
        return false;
    }
    if(document.form1.estado.value=="")
    {
        alert("Debe ingresar el estado del usuario");
        document.form1.estado.focus();
        return false;
    }
    if(document.form1.telefono.value=="")
    {
        alert("Debe ingresar un telefono");
        document.form1.telefono.focus();
        return false;
    }
    if(document.form1.correo.value=="")
    {
        alert("Debe ingresar un correo electronico");
        document.form1.correo.focus();
        return false;
    }


    var m = document.form1.correo.value;
    var expreg = /^[A-Za-z0-9_@.]{1,1000}$/;
    
    if(!expreg.test(m)){

        alert("Debe Ingresar un correo valido");
        document.form1.frmmail.focus();
        return false;
      
    }

    document.form1.submit();
}