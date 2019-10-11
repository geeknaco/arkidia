<script type="text/javascript" src="./js/FormLoguin.js"></script>
<?php 
//Se verifican los errores
$error=$_GET['d'];
if ($error == 1){
  $error = "Debe ingresar su usuario.";
}elseif ($error == 2){
  $error = "Debe ingresar la password.";
}elseif ($error == 3){
  $error = "Alguno de los datos son incorrectos.";
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
    <div class="wrapper">
      <div id="formContent">
        <!-- Tabs Titles -->
          <img class="login-background" src="images/background-top.svg"/>
        <!-- Icon -->
        <div class="fadeIn first">
          <img class="logo" src="images/logo.svg" id="icon" alt="User Icon" />
        </div>

        <!-- Login Form -->
        <form id="formLoguin" action="php/verificar.php" method="post" onsubmit="return validarFormLoguin(this);">
          <input type="text" id="login" class="fadeIn second" name="login" placeholder="usuario">
          <input type="password" id="password" class="fadeIn third" name="password" placeholder="contraseña">
          <br/><br/><?php echo $error;?><br/><br/>
          <input type="submit" class="fadeIn fourth" value="Ingresar">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
          <a class="underlineHover fadeIn fourth" href="correo.php">Olvidé mi contraseña</a>
          <a class="underlineHover fadeIn fourth" href="register.php">Registrarme</a>
          <img class="login-background" src="images/background-bottom.svg"/>

        </div>

      </div>
    </div>



</body>


</html>