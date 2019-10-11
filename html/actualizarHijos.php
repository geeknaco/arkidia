<!--<script type="text/javascript" src="./js/FormActualizaHijos.js"></script>-->
<?php 
//Se verifican los errores
$error=$_GET['d'];
$error_texto=$_GET['x'];
if ($error == 1){
	$error = "Debe ingresar su usuario.";
}elseif ($error == 2){
	$error = "Debe ingresar el alias.";
}elseif ($error == 3){
	$error = "Ingrese la edad.";
}elseif ($error == 4){
	$error = "Ingrese la password.";
}elseif ($error == 5){
	$error = $error_texto;
}elseif ($error == 6){
	$error = "Ya existe un usuario.";
}elseif ($error == 7){
	$error = "Datos insertados en forma correcta.";
}

?>

<!DOCTYPE html>
<html>
<title>Arkidia</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/style-site.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script src="js/bodymin-animation.min.js" type="text/javascript"></script>
<script src="js/bodymovin.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>


<body>
<div id="app">

  <header class="pantalla-completa" id="index"> 
    <nav class="navbar navbar-expand-lg navbar-light menu-style fixed-top">
      <a class="navbar-brand" href="SitioPadre.php" >
          <img src="./images/logo.png" width="150px" alt="Arkidia">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Perfil</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="hijos.html">Hijos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Salir</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>




  <section > 
      <h1 class="titulo">Configuración de mis hijos</h1>
      <div class="container">
          <div class="row" style="justify-content: center">
              <div v-for="hijo in hijos" :key="hijo.id">

                  <div class="card card-hijo" style="height: 500px">
                      <img v-bind:src="hijo.avatar" style="height: 250px; width:300px" class="card-img-top" :alt="hijo.nombre">
                      <div class="card-body">
                        <h5 class="card-title subtitulo">{{hijo.nickname}}</h5>
                        <p class="card-text">Usuario: {{hijo.nombre}}</p>
                        <p class="card-text">Edad: {{hijo.edad}}</p>
                        <p class="card-text">Contraseña: {{hijo.password}}</p>
                        <button type="button" class="btn btn-secondary"  @click="deleteHijo = hijo.id" data-toggle="modal" data-target="#eliminarHijo">Eliminar</button>
                        <button type="button" class="btn btn-secondary">Cambiar contraseña</button>
                       </div>
                      </div>
        </div>

        <div class="card card-hijo">
            <img src="images/arkidians/nuevo.svg" style="height: 250px; width:300px" class="card-img-top" alt="Nuevo">
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#crearHijo">Crear usuario</button>

            </div>

      </div> 
      </div>


  <!-- Modal -->
  <div class="modal fade" id="eliminarHijo" tabindex="-1" role="dialog" aria-labelledby="eliminarHijoCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="eliminarHijoCenterTitle">Eliminar usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Estás seguro que querés eliminar el usuario?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal" @click="hijos.splice(deleteHijo,1)">Eliminar usuario</button>
        </div>
      </div>
    </div>
  </div>



  <!-- Modal -->
  <div class="modal fade" id="crearHijo" tabindex="-1" role="dialog" aria-labelledby="crearHijoCenterTitle" aria-hidden="true">





      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">





          <div class="modal-header">
            <h5 class="modal-title" id="crearHijoCenterTitle">Crear usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>


		<div>

			<form id="formActualizarHijos" action="php/UpdateHijo.php" method="post" onsubmit="return validarFormHijos(this);">	

				<input type="text" id="usuario" name="usuario" size="10" placeholder="Usuario" maxlength="10"/>
				<input type="text" id="alias" name="alias" size="10" placeholder="Alias" maxlength="10"/>
				<input type="text" id="edad" name="edad" size="6" placeholder="Edad" maxlength="2" />
				<input type="password" id="password" name="password" size="10" placeholder="Contraseña" maxlength="10"/>

				<!--Se muestran los mensajes del lado del servidor-->	
				<div class="modal-footer">
					<br/><?php echo $error;?><br/><br/>
					<input type="submit" value="Agregar" /><br/><br/>				
				</div>

			</form>
			<center><div id="resultado"></div></center>
		</div>
</div>

          </div>
        </div>
      </div>
    </div>






  </section>


</div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="code.js" type="text/javascript"></script>

</body>
</html>












