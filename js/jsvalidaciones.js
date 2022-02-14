$(document).ready(function(){

    //Proceso que valida que el usuario y las claves no sean vacias y que claves del formulario registro coincidan
    $(".validaclavelogin").keyup(function(){
        usuario = $("#registrousuario").val();
        clave1 = $("#clave1").val();
        clave2 = $("#clave2").val();
        
        if(usuario === '') {
            document.getElementById("btnregistro").disabled = true;
            document.getElementById("msjusuario").hidden = false;
        } else {
            document.getElementById("btnregistro").disabled = false;
            document.getElementById("msjusuario").hidden = true;
        }

        if(clave1 !== '' && clave2 !== '' && clave1 === clave2){
    
            document.getElementById("btnregistro").disabled = false;
            document.getElementById("msjclave").hidden = true;
    
        } else {
    
            document.getElementById("btnregistro").disabled = true;
            document.getElementById("msjclave").hidden = false;
    
        }
    });

    //Validar que los campos solo acepte numeros
    $('.validanumericos').keypress(function(e) {
        if(isNaN(this.value + String.fromCharCode(e.charCode))) 
             return false;
        })
        .on("cut copy paste",function(e){
            e.preventDefault();
    });

    //Validación de campos vacios
    $(".validacampovacio").keyup(function(){
		usuario=$("#loginusuario").val();	
        clave=$("#loginclave").val();	
		if(usuario.length < 1){
			document.getElementById("btnenviar").disabled = true;
            document.getElementById("msjusuario").hidden = false;
		} 
        if (clave.length < 1) {
            document.getElementById("btnenviar").disabled = true;
            document.getElementById("msjclave").hidden = false;
        }
        if (usuario.length >= 1 && clave.length >=1) {
            document.getElementById("btnenviar").disabled = false;
            document.getElementById("msjusuario").hidden = true;
            document.getElementById("msjclave").hidden = true;
        }
	});	

    //Validar que el correo sea escrito bien
    $('.validacorreo').change(function() {
        correo=$("#correo").val();
        re=/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/
	if(!re.exec(correo)){
		document.getElementById("msjcorreo").hidden = false;
        document.getElementById("msjcorreo").style.color = "red";
	}
	else document.getElementById("msjcorreo").hidden = true;

    });

    //Validar caracteres del campo celular
    $('#celular').keyup(function() {
        celular=$("#celular").val();
	if(celular.length < 10 || celular.length > 10){
		document.getElementById("msjcelular").hidden = false;
        document.getElementById("msjcelular").style.color = "red";
	}
	else document.getElementById("msjcelular").hidden = true;

    });

});