 function validarFormHijos(formActualizarHijos){
	if(formActualizarHijos.usuario.value.length==0){
		formActualizarHijos.usuario.focus();
		caja= document.getElementById('resultado');
		caja.innerHTML = 'Debe ingresar su usuario.';
		return false;
	}
	if(formActualizarHijos.alias.value.length==0){
		formActualizarHijos.alias.focus();
		caja= document.getElementById('resultado');
		caja.innerHTML = 'Debe ingresar su usuario.';
		return false;
	}
	if(formActualizarHijos.edad.value.length==0){
		formActualizarHijos.edad.focus();
		caja= document.getElementById('resultado');
		caja.innerHTML = 'Debe ingresar su usuario.';
		return false;
	}
	if(formActualizarHijos.password.value.length==0){
		formActualizarHijos.password.focus();
		caja= document.getElementById('resultado');
		caja.innerHTML = 'Debe ingresar la password.';
		return false;	 	
	}
	return true;
 }