<script type="text/javascript" src="./js/FormCategorias.js"></script>
<?php 
  //Se verifican los errores
  $error=$_GET['d'];
  if ($error == 1){
    $error = "Debe ingresar la categoría.";
  }elseif ($error == 2){
    $error = "Debe ingresar la imagen.";
  }elseif ($error == 3){
    $error = "Ya existe esa categoría.";
  }elseif ($error == 4){
    $error = "Datos insertados en forma correcta.";
  }
?>
<!DOCTYPE html>
<html>
<title>Gestión de Categorías</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>
  <form id="formCategorias" action="php/categoria.php" method="post" onsubmit="return validarFormCategoria(this);">
    <input type="text" id="categoria" name="categoria" placeholder="Categoría">
    <input type="text" id="imagen" name="imagen" placeholder="Archivo imagen">
    <br/><br/><?php echo $error;?><br/><br/>
    <input type="submit" value="Ingresar">
  </form>
 </body>
</html>