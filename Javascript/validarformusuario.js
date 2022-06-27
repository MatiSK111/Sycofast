function validarlogin()
{
    if(document.login.user.value=="")
    {
        
        swal("Error!", "Debe ingresar un Usuario", "error");
        document.login.user.focus();
        return false;
    }
    var m = document.login.user.value;
    var expreg = /^[A-Za-z0-9_-]{1,1000}$/;
    if(!expreg.test(m)){

        swal("Error!", "No debe ingresar caracteres especiales, solo guion", "error");
        document.login.user.focus();
        return false;
      
    }
    if(document.login.pass.value=="")
    {
        
        swal("Error!", "Debe ingresar una clave ", "error");
        document.login.pass.focus();
        return false;
    }
   

    document.login.submit();

}

