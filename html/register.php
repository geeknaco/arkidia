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
<html>
<title>Arkidia</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/w3.css">
<link rel="stylesheet" href="style/aos.css">
<link rel="stylesheet" href="style/style-site.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script src="js/bodymin-animation.min.js" type="text/javascript"></script>
<script src="js/bodymovin.js"></script>
<script type="text/javascript">
  $(function() {
      $('.bodymovin').each(function() {
          var element = $(this);
          var animation = bodymovin.loadAnimation({
              container: element[0],
              renderer: 'svg',
              rendererSettings: {preserveAspectRatio: 'none' },
              loop: false,
              autoplay: true,
              path: element.data('icon')
          });
      });
  });
  $(function() {
      $('.bodymovin-loop').each(function() {
          var element = $(this);
          var animation = bodymovin.loadAnimation({
              container: element[0],
              renderer: 'svg',
              rendererSettings: {preserveAspectRatio: 'none' },
              loop: element.data('apl'),
              autoplay: element.data('apl'),
              path: element.data('icon')
          });
      });
  });
</script>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  <body>
    <div class="wrapper fadeIn">
      <div id="formContent">
        <!-- Tabs Titles -->
          <img class="login-background" src="images/background-top.svg"/>

        <!-- Icon -->
        <div class="fadeIn first">
          <img class="logo" src="images/logo.svg" id="icon" alt="User Icon" />
        </div>

        <!-- Login Form -->
        <form id="form_Registro" action="php/registrar_c.php" method="post" autocomplete="off" onsubmit="return validarFormRegistrar(this);">
          <input type="text" id="nombre" class="fadeIn second" name="nombre" placeholder="nombre">
          <input type="text" id="login" class="fadeIn second" name="apellido" placeholder="apellido">
          <input type="text" id="login" class="fadeIn second" name="correo" placeholder="correo electrónico">
          <input type="password" id="login" class="fadeIn second" name="password" placeholder="contraseña">
          <input type="password" id="login" class="fadeIn second" name="password2" placeholder="repetir contraseña">

          <br/><br/><?php echo $error;?><br/><br/>
          <input type="submit" class="fadeIn fourth" value="Registrarme">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
          <a class="underlineHover fadeIn fourth" href="login.php">Ya tengo un usuario</a>
          <img class="login-background" src="images/background-bottom.svg"/>

        </div>

      </div>
    </div>
  </body>
</html>