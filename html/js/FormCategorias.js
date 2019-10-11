 function validarFormCategoria(formCategorias){
	 if(formCategorias.categoria.value.length==0){
	 	formCategorias.categoria.focus();
	 	caja= document.getElementById('resultado');
	 	caja.innerHTML = 'Debe ingresar la categoría.';
	 	return false;
	 }
	 if(formCategorias.imagen.value.length==0){
	 	formCategorias.imagen.focus();
	 	caja= document.getElementById('resultado');
	 	caja.innerHTML = 'Debe ingresar el nombre de archivo.';
	    return false;	 	
	 }
	 return true;
 }