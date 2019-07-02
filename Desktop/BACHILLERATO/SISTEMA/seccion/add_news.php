<?php session_start();  include_once("../private/conexion.php"); ?>
  <?php 
if (!empty($_SESSION['docente_correo'])) {
function generateRandomString($length = 10) {
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charactersLength = strlen($characters);
  $randomString = '';
for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
}
return $randomString;
}
function generateRandomStringdos($length = 10) { 
  return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); 
}
$identificadorgeneral=generateRandomString().generateRandomStringdos();
 ?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Native CSS -->
    <link rel="stylesheet" type="text/css" href="css/index.css">

    <!-- FavIcon -->
    <link rel="icon" href="../images/icon.ico" />

    <title>Punto Maxter</title>
  </head>



  <body>

<!-- Menu de Navegación -->
    <header class="sticky-top">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href=""><img src="../images/logo22.png" alt="" width="100"></a>
          <div style="color:white;"><?php echo $_SESSION['docente_nombre']; ?></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="../secciones/blog.php">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="section-noticias.php">Todas las noticias</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="add_news.php">Crear Noticia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="process/cerrar.php">Cerrar Sesión</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
<!-- /Menu de Navegación -->


<!-- Main -->
<section id="agregar" class="mt-4">
  <div class="container">
    <div class="row">
      <div class="col-12 m-auto">
        <form action='process/add-news.php' method='post' enctype='multipart/form-data'>
          <div class="form-group offset-md-4">

            <div class="contenedor-foto text-center">
              <span class="icon-camera"></span>
            </div>
            <h3>Selecciona una Foto (opcional)</h3>
            <label for="exampleFormControlFile1">Elige la Foto Principal de la Noticia.</label>
             <input type="file" class="form-control-file" name='file'>
          </div>

          <div class="form-row">
            <div class="form-group col-12">
              <label>Titulo de la Noticia (opcional)</label> <br>
              <input type="text" name="titulo" placeholder="Titulo de la Noticia" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-12">
              <label>Descripcion Breve de la Noticia *</label>
              <textarea name="descripcion_breve" class="form-control form-control-lg" placeholder="Escribe una descripcion breve de la Noticia" id="" cols="30" rows="3" required></textarea>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-12">
              <label>Descripcion Completa de la Noticia *</label>
              <textarea name="descripcion" class="form-control form-control-lg" placeholder="Escribe el cuerpo de la Noticia" id="" cols="30" rows="3" required></textarea>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-12 mt-3">
              <label>Subir Archivo (opcional)</label>
              <input type="file" class="form-control-file" name='file_archivo[]' multiple>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-12 mt-3">
              <label>Subir Foto(s) (opcional)</label>
              <input type="file" class="form-control-file" name='file_foto[]' multiple>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-12 mt-3">
              <label>Agregar Link(s) (opcional)</label>
              <textarea name="links" class="form-control form-control-lg"placeholder="Escribe el Link, si tienes más da un enter y ponlo debajo" id="" cols="30" rows="3"></textarea>
            </div>
          </div>

            <div class="row">
              <div class="col-12 col-md-6 offset-md-3 mt-3">
          <input type="hidden" name="identificador" value="<?php echo $identificadorgeneral; ?>">
          <input type="submit" name='submit' class="btn btn-block btn-primary" value="Subir publicación">
      </div>
    </div>
        </form>
      </div>
    </div>
<br><br><br>
    
  </div>
</section>
<!-- /Main -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
      function subirArchivo(){
          archivo = document.getElementById("archivo");
          archivo.style.display='block';
      }

      function subirFoto(){
          foto = document.getElementById("foto");
          foto.style.display='block';
      }

      function subirLink(){
          link = document.getElementById("link");
          link.style.display='block';
      }
    </script>
  </body>
</html>
<?php }else{
  echo '<script type="text/javascript">';
  echo 'window.location="../../index.html';
  echo '"</script>';
} ?>