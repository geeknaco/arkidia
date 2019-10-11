<?php  
	include("conexion.php");
	include("funcionClave.php");
	include("error.php");
	include("log.php");
	$error_encontrado=""; 
	/////////////////////////////////////////////////////////////////////////////
	$usuario = $conn->real_escape_string($_POST['usuario']);
	$alias = $conn->real_escape_string($_POST['alias']);
	$edad = $conn->real_escape_string($_POST['edad']);
	$password = $conn->real_escape_string($_POST['password']);
	$error = $conn->real_escape_string($_GET[$error_encontrado]);
	/////////////////////////////////////////////////////////////////////////////

	//Se valida el ingreso de los datos requeridos
	if(!isset($usuario) || empty($usuario))
	{
		//"Ingrese el nombre de usuario" 
		header("location:error.php?d=1");
	}
	elseif (!isset($alias) || empty($alias)) 
	{
		//"Ingrese el alias."
		header("location:error.php?d=2");
	}
	elseif (!isset($edad) || empty($edad))
	{
		//"ingrese la edad"
		header("location:error.php?d=3");
	}
	elseif(!isset($password) || empty($password))
	{
		//"Ingrese la password."
		header("location:error.php?d=4");
	}
	elseif(!validar_clave($password, $error_encontrado, 6, 16, TRUE, TRUE, TRUE))
	{
		$error = $error_encontrado;
		header("location:error.php?d=14&x=$error");	
	}else	   
	{
			$b_mail = mysqli_query($conn, "SELECT usuario FROM usuario_hijo WHERE usuario = '$usuario'");
			$fila = mysqli_fetch_array($b_mail);

			if ($mail == $fila['usuario'])
			{
				//"Ya existe un usuario registrado con esa dirección de mail."
				header("location:error.php?d=8");
			}else
			{
				//Guardo en mayúsculas
				$usuario = strtoupper($usuario);
				$alias = strtoupper($alias);		
				
				//Graba registro en tabla usuario_hijos
				mysqli_query($conn, "INSERT INTO usuario_hijo (usuario, alias, edad, password)
					VALUES ('$usuario', '$alias', '$edad', '$password')");

				graba_log("AGREGO UN HIJO", $_SESSION['username']);			
				//"Datos insertados en forma correcta."."<br/><br/><br/>"
				header("location:error.php?d=7");
				
			}
	}
?>