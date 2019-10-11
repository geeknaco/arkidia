
<!--llamo al archivo ValidacionFormularios.js -->
<script type="text/javascript" src="./js/FormCorreo.js"></script>

<!--//Muestro los mensajes de error del lado del servidor-->
<?php 
$error=$_GET['d'];
if ($error == 1)
{
	$error = "Su petición ha terminado con éxito.";
}elseif ($error == 2) 
{
	$error = "Hubo un error en el envío del correo.";
}elseif($error == 3)
{
	$error = "Ingrese la dirección de mail.";
}elseif($error == 4)
{
	$error = "La dirección no corresponde a un usuario registrado.";
}
?>

<!--Definición de HTML-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<!--Llama a función de validación de este formulario-->
	<form id="formCorreo" action="./php/enviarCorreo.php" method="post" onsubmit="return validarFormCorreo(this);">

		<p>
			Por favor, complete la dirección de correo electrónico que tiene registrado <br/>
			en el sitio para que le enviemos la nueva password.<br/>
			Le responderemos a la brevedad.
		</p>
		<br/><br/><input type="text" id = "email" name="email" size="50" placeholder="Dirección de mail" maxlength="50"/>
		
		<input type="submit" value="Enviar Correo" /><br/><br/>
		<?php echo $error;?>
	</form>
	<div id="resultado"></div>
</body>
</html>