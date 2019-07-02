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
  
  <div class="container mt-5 mb-5 bg-blanco ">
    <div class="row">
<?php 
if (!empty($_GET['id'])) {
  $id = $_GET['id'];

$rnews = $mysqli->query("SELECT * FROM news WHERE id='$id'");
if ($rnews)
{
  if (mysqli_num_rows($rnews) > 0) {
    
while($array = $rnews->fetch_object())
  {
    $id = $array->id;
    $correo_docente = $array->correo_docente;
    $titulo = $array->titulo;
    $descripcion_breve = $array->descripcion_breve;
    $descripcion = $array->descripcion;
    $imagen = $array->imagen;
    $fecha = $array->fecha;
    $identificador = $array->identificador;
    $links = $array->links;

    echo '
      <div class="col-12 m-auto">
          <div class="form-group">
            <div class="contenedor-foto m-auto">';
            if ($imagen == 'no hay imagen principal') {
              echo '<img src="../seccion/imagespub/default.png" class="w-100 d-block" />';
            }else{
              echo '<img src="../seccion/imagespub/'.$imagen.'" class="w-100 d-block" />';
            }
    echo '</div>
          </div>

          <div class="form-row">
            <div class="form-group col-12">
              <h2>'.$titulo.'</h2> <br>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-12 text-justify">
              '.$descripcion.'
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-12 mt-3">
              <label>Archivos</label>';
            $rarchivos = $mysqli->query("SELECT * FROM archivos_pub WHERE identificador='$identificador'");
            if ($rarchivos)
            { 
              
            while($array = $rarchivos->fetch_object())
              {
                $id = $array->id;
                $docente = $array->docente;
                $nombre_archivo = $array->nombre;
                $fecha = $array->fecha;

                if ($nombre_archivo != '') {
                  echo '<br><br><a class="btn btn-outline-info" href="../seccion/archivospub/'.$nombre_archivo.'" download="'.$nombre_archivo.'" target="blank">'.$nombre_archivo.' - Click Descargar</a>'; 
                }
              }
            }
            echo '
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-12 mt-3">
              <label>Fotos</label>';
            $rfotos = $mysqli->query("SELECT * FROM fotos_pub WHERE identificador='$identificador'");
            if ($rfotos)
            { 
              echo "<div class='row'>";
            while($array = $rfotos->fetch_object())
              {
                $id = $array->id;
                $docente = $array->docente;
                $nombre = $array->nombre;
                $fecha = $array->fecha;

                if ($nombre != '') {
                  
                echo '<div class="col-12 col-md-4 col-lg-3 mb-4">
                  <img src="../seccion/fotospub/'.$nombre.'" alt="" class="w-100">
                </div>';
                
                }
              }
              echo "</div>";
            }
            echo '
            </div>
          </div>

          ';
              if ($links != 'no hay links') {
                  echo '<div class="form-row">
                          <div class="form-group col-12 mt-3">
                            <label>Links</label>
                            <br>';
                      echo '<a href="'.$links.'" >Click aquí</a>'; 
                    echo '</div>
                  </div>';
              }
        echo '        
      </div>
    </div>
<br><br><br>
    
  ';

  }

  }else{
    echo '<div class="text-center mb-5"><h3 class="mb-5">Lo sentimos esta publicación no esta disponible</h3></div>';
  }
}

}else{

  echo '<div class="text-center mb-5"><h3 class="mb-5">Lo sentimos esta publicación no esta disponible</h3></div>';

}
 ?>

    </div>
  </div>

<section>
  <div class="container mb-5">
    <h1 class=" mt-5 mostaza">Sección de comentarios</h1>
    <button class="btn btn-primary" data-toggle="modal" data-target="#comentario">Escribe un Comentario</button>
    <br><br>
    <h5>Comentarios</h5>
<?php 
$rz = $mysqli->query("SELECT * FROM comentarios WHERE id_pub='".$_GET['id']."'");
  if ($rz)
    {
      if (mysqli_num_rows($rz) > 0) {
        while($array = $rz->fetch_object())
          {
            $id_pub = $array->id_pub;
            $usuario = $array->usuario;
            $comentario = $array->comentario;
            $fecha = $array->fecha;

            echo '
<div class="row mt-5 mb-5">
  <div class="col-md-2 col-12 mb-5">
    <img src="../images/user.png" width="100"> <br>
    '.$usuario.'
  </div>

  <div class="col-md-10 col-12">
    '.$fecha.'
    <p align="justify">'.$comentario.'</p>
  </div>
</div><hr style="color: #808080;" />';
          }
        }else{
          echo "AUN NO HAY COMENTARIOS SOBRE ESTA PUBLICACIÓN";
        }
      }
 ?>
  </div>  
</section>

<div class="modal fade" id="comentario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary p-4">
        <h5 class="modal-title" id="exampleModalLongTitle"><span class="icon-user-plus"> </span>Agregar a un nuevo comentario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../seccion/process/add_comentario.php" method="POST" enctype='multipart/form-data'>
            <div class="form-row">
              <div class="form-group col">
                  <div class="form-group">
                    <input type="hidden" name="id_noticia" value="1">
                    <label for="exampleInputEmail1">Correo de estudiante</label>
                    <?php 
                    if (!empty($_SESSION['correo_alumno'])) {
                      echo '<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa un nickname o tu nombre" name="nombre" value="'.$_SESSION['correo_alumno'].'" readonly required>';
                    }else{
                      echo '<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa un nickname o tu nombre" name="nombre" required>';
                      }
                     ?>
                  </div>

                  <div class="form-group">
                    <label for="exampleFormControlFile1">Comentario</label>
                    <textarea rows="4" cols="70" class="form-control-file" placeholder="Escribe el comentario sobre esta nota" name="comentario" required></textarea>
                  </div>
                  <input type="hidden" name="id_publicacion" value="<?php echo $_GET['id']; ?>" required>
              </div>
            </div>
      </div>
      <div class="modal-footer">
          <input type="submit" class="btn btn-block btn-primary" value="Agregar Comentario" />
      </div>
    </form>
    </div>
  </div>
</div>

 

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