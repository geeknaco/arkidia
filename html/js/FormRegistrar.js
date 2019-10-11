 
 function validarFormRegistrar(form_Registro){
	if(form_Registro.nombre.value.length==0){
		form_Registro.nombre.focus();
		caja= document.getElementById('resultado');
		caja.innerHTML = 'Ingrese el nombre de usuario.';
	return false;	 	
	}
	if(form_Registro.apellido.value.length==0){
		form_Registro.apellido.focus();
		caja= document.getElementById('resultado');
		caja.innerHTML = 'Ingrese el apellido.';
	return false;	 	
	}

	/////////////VALIDA EMAIL ///////////////

	if(form_Registro.mail.value.length == 0){
		form_Registro.mail.focus();
		caja= document.getElementById('resultado');
		caja.innerHTML = 'Ingrese su dirección de correo.';
	return false;	 	
	}
	if(form_Registro.mail.value.indexOf('@') == -1){   
	form_Registro.mail.focus();
	caja = document.getElementById('resultado');
	caja.innerHTML = 'Mail Incorrecto';
	return false;
	}
	if(form_Registro.mail.value.indexOf('.') == -1){   
	form_Registro.mail.focus();
	caja = document.getElementById('resultado');
	caja.innerHTML = 'Mail Incorrecto';
	return false;
	}
	if(form_Registro.mail.value.indexOf('com') == -1){   
	form_Registro.mail.focus();
	caja = document.getElementById('resultado');
	caja.innerHTML = 'Mail Incorrecto';
	return false;
	}

	//////////// Llama función que valida clave ////////////

	var opc_letras = true; //  FALSE para quitar las letras
	var opc_numeros = true; // FALSE para quitar los números
	var opc_letrasMayus = true; // FALSE para quitar las letras mayúsculas
	var opc_especiales = true; // FALSE para quitar los caracteres especiales		
	var long_min = 6;	
	var long_max = 16;
	var clave = form_Registro.pw.value;
	if(clave.length < long_min){
	 	form_Registro.pw.focus();
	 	caja= document.getElementById('resultado');
	 	caja.innerHTML = 'La clave debe tener al menos 6 caracteres.';
	    return false;
	}
	if(clave.length > long_max){
	 	form_Registro.pw.focus();
	 	caja = document.getElementById('resultado');
	 	caja.innerHTML = 'La clave no puede tener más de 16 caracteres.';		    
	   	return false;
	}
	if (opc_letras == true && clave.match(/[a-z]/) == null){
	 	form_Registro.pw.focus();
	 	caja = document.getElementById('resultado');
	 	caja.innerHTML = 'La clave debe tener al menos una letra minúscula.';
	    return false; 
	}
	if (opc_letrasMayus == true && clave.match(/[A-Z]/) == null){
	 	form_Registro.pw.focus();
	 	caja= document.getElementById('resultado');
	 	caja.innerHTML = 'La clave debe tener al menos una letra mayúscula.';
	    return false;
	}
	if (opc_numeros == true && clave.match(/[0-9]/) == null){
	 	form_Registro.pw.focus();
	 	caja= document.getElementById('resultado');
	 	caja.innerHTML = 'La clave debe tener al menos un caracter numérico.';
		return false;	
	}
	/*if ($opc_especiales == true && clave.match(/[\W]+/) == null){
	 	form_Registro.pw.focus();
	 	caja= document.getElementById('resultado');
	 	caja.innerHTML = 'La clave debe tener al menos un caracter especial.';	
	   	return false;	  	
	}	*/

	///////////////////////////////////////////////////////////////////////

	if(form_Registro.pw2.value.length==0){
		form_Registro.pw2.focus();
		caja= document.getElementById('resultado');
		caja.innerHTML = 'Confirme su password.';
	return false;	 	
	}

	var p1 = document.getElementById("pw").value;
	var p2 = document.getElementById("pw2").value;
	if (p1 != p2) {
		form_Registro.pw2.focus();
		caja=document.getElementById('resultado');
		caja.innerHTML = 'Las passwords deben de coincidir';
	return false;
	}

	return true; 	 
 }
