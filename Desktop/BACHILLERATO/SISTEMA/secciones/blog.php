<?php session_start(); include_once("../private/conexion.php"); ?>
<!doctype html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
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

  <title>Identidad</title>
</head>
<body class="">

  <!-- Menu de Navegación -->
  <header class="  bg-blanco">
    <div class="container">
      <div class="row pt-2">
        <div class="col-md-4  offset-md-4 text-center">
          <img width="100 " class="" src="../images/logo2.png">
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
            <a class="nav-link azul" href="../index.html">Inicio<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="identidad.html">Identidad</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="mapa.html">Mapa Curricular</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.php"><b class="azul">Blog</b></a>
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
            <a class="nav-link" href="docentes.php">Docentes</a>
          </li>

        </ul>

      </div>
    </nav>
  </header>
  <!-- /Menu de Navegación -->
  <!-- Contenedor -->
<?php 
if (!empty($_SESSION['nombre_alumno']) && !empty($_SESSION['correo_alumno']) && !empty($_SESSION['semestre_alumno'])) {
echo '
  <div style="position: fixed; top:150px; right: 30px; z-index: 15000;">
    <a href="cerrar.php">
      <button class="btn btn-outline-success">Cerrar Sesión</button>
    </a>
  </div>';
}
 ?>  
  <div class="container-fluid mt-5 mb-5 bg-blanco ">
<?php $rcheckblog = $mysqli->query("SELECT * FROM news"); echo 'Total de publicaciones: <b>'.mysqli_num_rows($rcheckblog).'</b>'; ?>
    <div class="row align-items-center">

<?php 
$rnews = $mysqli->query("SELECT * FROM news");
if ($rnews)
{
while($array = $rnews->fetch_object())
  {
    $id = $array->id;
    $correo_docente = $array->correo_docente;
    $nombre_docente = $array->nombre_docente;
    $titulo = $array->titulo;
    $descripcion_breve = $array->descripcion_breve;
    $descripcion = $array->descripcion;
    $imagen = $array->imagen;
    $fecha = $array->fecha;
    $identificador = $array->identificador;
    $links = $array->links;
    echo '
      <div class="col-12 text-center mb-3">
        <a href="detalles.php?id='.$id.'"><h2 class="  azul">'.$titulo.'</h2></a>
      </div>
      <div class="col-md-4 col-12">';
      if ($imagen != 'no hay imagen principal') {
        echo '<a href="detalles.php?id='.$id.'"><img class="w-100 text-center  mt-3" src="../seccion/imagespub/'.$imagen.'"></a>';
      }else{
        echo '<a href="detalles.php?id='.$id.'"><img class="w-100 text-center  mt-3" src="../seccion/imagespub/default.png"></a>';
      }
echo '</div>
      <div class="col-md-8 col-12">
        <p class=" text-center mt-0 mb-0" style="font-size: 20px;">
          Publicación del docente: <b>'.$nombre_docente.'</b>
        </p>
        <p class=" text-justify mt-0" style="font-size: 20px;">
          <br>
          '.$descripcion_breve.'
        </p>
      </div>';
  }
}
 ?>

    </div>
  </div>

  <div class="container-fluid mt-5 bg-azul" style="font-size: 18px;">
    <h1 class="text-center blanco pt-5">Blog</H1>
    <div class="row p-5">
      <div class="col-md-6  text-justify">
        <p class="blanco">
          <b>Justicia:</b> que permita vincular los ejemplos educativos hacia el comportamiento de la sociedad, mediante acciones de interacción directa con los miembros 
        </p>
        <p class="blanco">
            <b>Respeto:</b> mostrado ante sus prácticas, creencias y cosmovisiones integrados al modelo educativo intercultural, reflejado en las secuencias de aprendizaje.
        </p>
      </div>
      <div class="col-md-6 ">
        <p class="blanco">
          <b>Paz:</b> mediante el fomento de acciones que integren a las organizaciones a las propuestas educativas, mejorando la convivencia y estrechando lazos entre la comunidad y la escuela.
        </p>

        <p class="blanco">
          <b>Solidaridad:</b> colaboración e integración de la escuela al servicio social, que integre y comparta los conocimientos adquiridos en la escuela como propuesta de mejoramiento social.
        </p>

        <p class="blanco">
           <b>Responsabilidad:</b> en cada una de las acciones educativas y proyectos escolares, así como la actualización de las practicas docentes y la redacción de propuesta para el mejoramiento educativo. 
        </p>
      </div>
    </div>
  </div>

   <!-- /Contenedor -->

  <!-- footer -->
  <footer class="container-fluid">
    <div class="container-fluid pt-4 pb-5">
      <div class="row ">

        <div class="col-md-3">
          <a href="cultura.html">
            <div class="col-md-10  mt-4 botonfi  ">
              <h4  class="text-center azul pt-3 pb-3 h">
                <i style="font-size: 60px;"  class="fas fa-guitar"></i>
                <br>
                Cultura
              </h4>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a href="oferta.html">
            <div class="col-md-10  mt-4 botonfi ">
              <h4  class="text-center azul pt-3 pb-3 h">
                <i style="font-size: 60px;" class="fas fa-book-reader"></i>
                <br>
                Oferta educativa
              </h4>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a href="galeria.html">
            <div class="col-md-10  mt-4 botonfi ">
              <h4  class="text-center azul h pt-3 pb-3 h">
                <i style="font-size: 60px;" class="fas fa-images"></i>
                <br>
                Galeria de fotos
              </h4>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a href="https://www.google.com/maps/place/Bachillerato+Intercultural+02/@20.0077034,-97.6332923,15z/data=!4m5!3m4!1s0x0:0x6da7347cfcc3b4f8!8m2!3d20.0077034!4d-97.6332923?sa=X&ved=2ahUKEwj-_MrP3-LhAhUGEawKHSncCFsQ_BIwDnoECAwQBg&shorturl=1" target="_blank">
            <div class="col-md-10  mt-4 botonfi ">
              <h4  class="text-center azul pt-3 pb-3 h">
                <i style="font-size: 60px;" class="fas fa-map-marker-alt"></i>
                <br>
                Ubicación
              </h4>
            </div>
          </a>
        </div>

      </div> 
    </div>
  </footer>
  
<!-- redes -->
<footer class="bg-azul pt-3 pb-3">
    <div class="container">
      <div class="row">

        <div class="col-md-6 offset-md-3 text-center">
          <div class="row">
            <div class="col">
              <h1>
                <a href="https://api.whatsapp.com/send?phone=5212331072886&text=Hola" target="_blank"><i class="fab fa-whatsapp blanco w mr-3"></i></a>
              </h1>
            </div>
              <div class="col">
                <h1>
                  <a href="https://www.facebook.com/bachillerato.intercultural.7" target="_blank"><i class="fab fa-facebook-f blanco f mr-3"></i></a>
                </h1>
              </div>
              <div class="col">
                <h1>
                  <a href="https://www.youtube.com/channel/UCM4hTm7PdSntKL9g7LNR1sw/videos?view_as=subscriber" target="_blank"><i class="fab fa-youtube blanco y "></i></a>
                </h1>
              </div>
              <div class="col">
                <h1>
                  <a href="https://groups.google.com/d/forum/bachilleto-intercultural" target="_blank"><i class="fab fa-google blanco y "></i></a>
                </h1>
              </div>
          </div>
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