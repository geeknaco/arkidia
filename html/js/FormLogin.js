 function validarFormLoguin(formLoguin){
	 if(formLoguin.usuario.value.length==0){
	 	formLoguin.usuario.focus();
	 	caja= document.getElementById('resultado');
	 	caja.innerHTML = 'Debe ingresar su usuario.';
	 	return false;
	 }
	 if(formLoguin.pw.value.length==0){
	 	formLoguin.pw.focus();
	 	caja= document.getElementById('resultado');
	 	caja.innerHTML = 'Debe ingresar la password.';
	    return false;	 	
	 }
	 return true;
 }