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
      <a class="navbar-brand" href="parent.html">
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
          <li class="nav-item">
            <a class="nav-link" href="actualizarHijos.php">Hijos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Salir</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>


  <section class="welcome-style">
        <div class="logo-size bodymovin" data-icon="json/logo.json" data-aplay = "true" data-loop="false" ></div>
  </section>


  <section v-if="resumenHijos.length>0"> 
    <h1 class="titulo">Resumen</h1>

    <div class="card mb-3 card-resumen-hijo">
        <div v-for="resumen in resumenHijos" :key="resumen.id">

        <div class="row ">
          <div class="col-md-4 " style="text-align: center;">
            <img v-bind:src="resumen.avatar" class="card-img" :alt="resumen.nickname" style="max-width:200px">

          </div>
          <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title subtitulo" style="text-align: left">{{resumen.nickname}}</h5>
                <p>BADGES</p>
                <div v-for="badge in resumen.badges" :key="badge.nombre">
                  <p>{{badge.nombre}} nivel {{badge.nivel}}</p>
                </div>
                <p>ULTIMOS CURSOS</p>
                <div v-for="curso in resumen.ultCursos" :key="curso.nombre">
                  <p>{{curso.nombre}} completado {{curso.porcentaje}}</p>
                </div>
            </div>
          </div>
        </div>
        </div>
      </div>




  </section>

  <section > 
      <h1 class="titulo">Categorías</h1>
      <div class="container">
          <div class="row" style="justify-content: center">
              <div v-for="categoria in categorias" :key="categoria.nombre">
                  <div class="card categoria" :style="[categoria.styleObject]">
                      <div class="logo-size bodymovin" v-bind:data-icon="categoria.imagen" data-aplay = "true" data-loop="false"></div>
                      <div class="card-body">
                          <p class="texto-car-categoria">{{categoria.nombre}}</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section >
      <h1 class="titulo">Últimos cursos</h1>
  </section>
  <div class="animation" src="json/cocina.json" ></div>
</div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="code.js" type="text/javascript"></script>

</body>
</html>