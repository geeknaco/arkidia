<!--llamo al archivo ValidacionFormularios.js -->
<script type="text/javascript" src="js/FormRegistrar.js"></script>

<?php 
include("php/funcionClave.php");
$error=$_GET['e'];
$texto=$_GET['x'];
switch ($error) 
{
	case 2: $error = "Ingrese el nombre de usuario.";
	break;
	case 3: $error = "Ingrese el apellido.";
	break;
	case 4: $error = "Ingrese la password.";
	break;
	case 5: $error = "Confirme su password.";
	break;
	case 6: $error = "Ingrese su dirección de correo.";
	break;
	//case 7: $error = "Ya existe el usuario ".$fila_user['USER']." registrado.";
	//break;
	case 8: $error = "Ya existe un usuario registrado con esa dirección de mail.";
	break;
	case 9: $error = "Datos insertados en forma correcta.";
	break;
	case 10: $error = "La password y la confirmación deben ser iguales.";
	break;
	case 11: $error = "Ingrese la razón social de la empresa.";
	break;
	case 12: $error = "Ingrese el domicilio.";
	break;
	case 13: $error = "Ingrese el número telefónico.";
	break;
	case 14: $error = "La password debe tener al menos 6 y como máximo 16 caracteres alfanuméricos, incluyendo mayúsculas."."<br/>".$texto;
	break;
	case 15: $error = "El email ingresado es inválido";
	break;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form id="form_Registro" action="php/registrar_c.php" method="post" autocomplete="off" onsubmit="return validarFormRegistrar(this);">

		<p>
			<center>
				Debe ingresar todos los datos requeridos en el formulario para aplicar su registración en el sitio.
			</center>
		</p>
		<div>
			<label>Nombre            :</label>
			<input type="text" id="nombre" name="nombre" size="50" maxlength="50" /><br><br>				
			<label>Apellido          :</label>
			<input type="text" id="apellido" name="apellido" size="50" maxlength="50"/><br><br>
			<label>E-mail            :</label>
			<input type="text" id="mail" name="mail" size="70" maxlength="70"/><br><br>
			<label>Password          :</label>
			<input type="password" id="pw" name="pw" size="10" maxlength="10"/>	<br><br>		
			<label>Confirmar password:</label>
			<input type="password" id="pw2" name="pw2" size="10" maxlength="10"/><br><br>
			
			<br/><?php echo $error;?>
			<br/><br/><input type="submit" value="Registrar"/><br/><br/>
			<div id="resultado"></div>
		</div>
	</form>
</body>
</html>