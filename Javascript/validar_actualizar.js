function validar_actualizar()
{

     // Despejar Puntos
     var valor = document.form1.Rut.value.replace('.','');
     // Despejar Guión
     valor = valor.replace('-','');
     
     // Aislar Cuerpo y Dígito Verificador
     cuerpo = valor.slice(0,-1);
     dv = valor.slice(-1).toUpperCase();
     
     // Formatear RUN
     document.form1.Rut.value = cuerpo + '-'+ dv
     
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
     
     
     
 

 if(document.form1.Rut.value=="")
 {
     alert("Debe ingresar un RUT");
     document.form1.rut.focus();
     return false;
 }
 

    if(document.form1.nom.value=="")
    {
        alert("Debe ingresar los nombres");
        document.form1.nombres.focus();
        return false;
    }
    var m = document.form1.nom.value;
    var expreg = /^[A-Za-z0-9_ -]{1,1000}$/;
    
    if(!expreg.test(m)){

        alert("Debe ingresar un nombre valido");
        document.form1.nom.focus();
        return false;
      
    }
    

    if(document.form1.ape.value=="")
    {
        alert("Debe ingresar los apellidos");
        document.form1.ape.focus();
        return false;
    }
    var m = document.form1.ape.value;
    var expreg = /^[A-Za-z0-9_ -]{1,1000}$/;
    
    if(!expreg.test(m)){

        alert("Debe ingresar un apellido valido");
        document.form1.ape.focus();
        return false;
      
    }
   
    

    if(document.form1.fech.value=="")
    {
        alert("Debe ingresar la fecha de nacimiento");
        document.form1.fech.focus();
        return false;
    }
    
    if(document.form1.direc.value=="")
    {
        alert("Debe ingresar una dirección");
        document.form1.direc.focus();
        return false;
    }
    
    if(document.form1.estado.value=="")
    {
        alert("Debe ingresar el estado del usuario");
        document.form1.estado.focus();
        return false;
    }
    if(document.form1.tel.value=="")
    {
        alert("Debe ingresar un telefono");
        document.form1.tel.focus();
        return false;
    }

    var t = document.form1.tel.value;
    var expreg = /^[0-9]{8,9}$/;

    if(!expreg.test(t)){

        alert("Debe ingresar solo numeros en el telefono (9 digitos)");
        document.form1.tel.focus();
        return false;
      
    }


    if(document.form1.mail.value=="")
    {
        alert("Debe ingresar un correo electronico");
        document.form1.mail.focus();
        return false;
    }


    var m = document.form1.mail.value;
    
    emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
   
    if (!emailRegex.test(m)) {
      
        alert("Debe Ingresar un correo valido");
        document.form1.mail.focus();
        return false;
    
    }
     

    document.form1.submit();
}