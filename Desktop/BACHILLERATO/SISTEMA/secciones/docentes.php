<?php session_start(); ?>
<?php 
if (empty($_SESSION['docente_nombre']) && empty($_SESSION['docente_correo'])) {
 ?>
<!doctype html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
  <!-- Required meta tags -->
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Native CSS -->
  <link rel="stylesheet" type="text/css" href="../css/index.css">

  <!-- Icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Animate CSS -->
  <link rel="stylesheet" type="text/css" href="../css/animate.min.css">
  
   <!-- Icono CSS -->
  <link rel="icon" type="text/css" href="../images/logo.ico">

  <title>Docentes</title>
</head>
<body class="bg-d">

  <!-- Menu de Navegación -->
  <header class="  bg-blanco">
    <div class="container">
      <div class="row pt-2">
        <div class="col-md-4  offset-md-4 text-center">
          <img width="100" class="" src="../images/logo2.png">
          <img width="100" class="" src="../images/logo3.png">
        </div>
      </div>
    </div>
  </header>
  <header  class="sticky-top  bg-blanco">
    <nav class="navbar navbar-expand-lg navbar-light container">
      <a class="navbar-brand" href="../index.html">
        <img width="50" src="../images/logo.jpeg">
      </a>
      <div class="azul ol"><h6>BACHILLERATO INTERCULTURAL 02</h6></div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i style="border-radius: 100%; border:3px solid  #346cc7;" class="fas fa-home azul p-2"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto text-center">
          <li class="nav-item ">
            <a class="nav-link azul" href="../index.html">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="identidad.html">Identidad</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="mapa.html">Mapa Curricular</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.php">Blog</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Estudiantes
            </a>
            <form>
            <div class="dropdown-menu text-center form-group" aria-labelledby="navbarDropdown">
              <button class="bg-azul btn-block blanco" type="button" data-toggle="collapse" data-target="#collapsea" aria-expanded="false" aria-controls="collapseExample">
              Formatos
              </button>
              <div class="collapse" id="collapsea">
                <div class="card card-body">
                    <a class="dropdown-item" href="../docs/solicitud_estatal_de_preinscripcion_general.xls" target="_blank">Preinscripciones</a>
                    <a class="dropdown-item" href="../docs/formato_inscripcion.doc" target="_blank">Inscripciones</a>
                </div>
              </div>

             
              <button class="bg-azul btn-block blanco" type="button" data-toggle="collapse" data-target="#collapseb" aria-expanded="false" aria-controls="collapseExample">
              Horarios
              </button>
              <div class="collapse" id="collapseb">
                <div class="card card-body">
                    <a class="dropdown-item" href="../docs/h1.pdf" target="_blank">Primer semestre</a>
                    <a class="dropdown-item" href="../docs/h2.pdf" target="_blank">Segundo semestre</a>
                    <a class="dropdown-item" href="../docs/h3.pdf" target="_blank">Tercer semestre</a>
                    <a class="dropdown-item" href="../docs/h4.pdf" target="_blank">Cuarto semestre</a>
                    <a class="dropdown-item" href="../docs/h5.pdf" target="_blank">Quinto semestre</a>
                    <a class="dropdown-item" href="../docs/h6.pdf" target="_blank">Sexto semestre</a>
                </div>
              </div>
              <a class="dropdown-item" href="estudiantes.php">Calificaciones</a>
            </div>
            </form>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="docentes.php"><b class="azul">Docentes</a></b>
          </li>

        </ul>

      </div>
    </nav>
  </header>
  <!-- /Menu de Navegación -->

  <!-- contenedor -->

  <div class="container mt-5 mb-5">
    <form class="" action="../process/security/check-docente.php" method="POST">
      <div class="col-md-4 offset-md-4 bg-azul pt-4 pb-4 rounded"> 
        <h3 class="text-center blanco mb-4">Docentes</h3>
        <div class="text-center">
          <i style="font-size: 150px;" class="fas fa-user azul2  "></i>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput"></label>
          <input type="email" class="form-control" id="usuario_d" placeholder="Correo" name="correo" required>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="pass_d" placeholder="Contraseña" name="contrasena" required>
        </div>
        <div class="text-center mt-3">
          <button type="submit" class="btn btn-light btn-lg btn-outline-light azul"><b>Acceder</b></button>
        </div>
      </div>
    </form>
  </div>

  <!-- contenedor -->
  
  <!-- footer -->
  <!-- redes -->
<footer class="bg-azul pt-3 pb-3">
    <div class="container">
      <div class="row ">

        <div class="col-md-3 offset-md-10 text-center">
          <h1 class=" mt-2 ">
            <a href="https://api.whatsapp.com/send?phone=5212331072886&text=Hola" target="_blank"><i class="fab fa-whatsapp blanco w mr-3"></i></a>
            <a href="https://www.facebook.com/bachillerato.intercultural.7" target="_blank"><i class="fab fa-facebook-f blanco f mr-3"></i></a>
            <a href="https://www.youtube.com/channel/UCM4hTm7PdSntKL9g7LNR1sw/videos?view_as=subscriber" target="_blank"><i class="fab fa-youtube blanco y "></i></a>
            <a href="https://groups.google.com/d/forum/bachilleto-intercultural" target="_blank"><i class="fab fa-google blanco y "></i></a>
          </h1>
        </div>

      </div>
    </div>
  </footer>
  <!-- redes -->
  <!-- footer -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/wow.min.js"></script>
<script>
  new WOW().init();
</script>
</body>
</html>
<?php 
}else{
  header('Location: ../seccion/section-noticias.php');
} ?>