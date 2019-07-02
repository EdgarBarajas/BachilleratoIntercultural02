<?php session_start();  include_once("../private/conexion.php"); ?>
  <?php 
if (!empty($_SESSION['administrador_bachillerato'])) {
  $correo_docente = $_SESSION['administrador_bachillerato'];
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

    <title>Administrador Docentes</title>    
  </head>



  <body>

<!-- Menu de Navegación -->
    <header class="sticky-top">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href=""><img src="../images/logo22.png" alt="" width="100"></a>
          <div style="color:white;"><?php echo $_SESSION['administrador_bachillerato']; ?></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="../index.html" target="_blank">Página</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="section-noticias.php">Todas las noticias</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="maestros.php">Docentes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="alumnos.php">Alumnos</a>
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

<div class="container">
  <div class="text-right mt-3">
    <button class="btn btn-outline-success" data-toggle="modal" data-target="#modalAgregarDocente">Agregar Docente</button>
  </div>
</div>


<!-- Seccion Ver Noticias -->
<section id="noticias" class="noticias mt-5 mb-5">
  <div class="container">
    <div class="row">
<?php 
    $rexp3 = $mysqli->query("SELECT * FROM docentes");
        if ($rexp3)
          {
            while($array = $rexp3->fetch_object())
              {
                $id_docente = $array->id_docente;
                $nombre = $array->nombre;
                $correo = $array->correo;
                $password = $array->password;
                
                echo '
                  
                    Docente: 
                    <div class="card w-100 p-2 btn">
                      <a href="detalles-docente.php?id_docente='.$id_docente.'">
                        <b>'.$nombre.'</b> <br>
                        <b> '.$correo.'</b> 
                      </a> 
                    </div>
                    <hr>
                  
                ';
              }
          }
 ?>
   
    </div>
  </div>
</section>
<!-- Seccion Ver Noticias -->


<!-- Modal Agregar Docente -->
<div class="modal fade" id="modalAgregarDocente" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">agregar Docente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="process/add-docente.php" method="POST">
          Escribe Nombre Completo del Docente *
          <input type="text" class="form-control" name="nombre" placeholder="Nombre Completo" required/> <br>
          Escribe Correo del Docente *
          <input type="email" class="form-control" name="correo"  placeholder="Correo Electrónico"required/> <br>
          Escribe una Contraseña *
          <input type="text" class="form-control" name="contrasena"  placeholder="Contraseña"required/>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Cancelar</button>
          <button type="submit" class="btn btn-outline-success">Agregar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /Modal Agregar Docente -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
  </body>
</html>
<?php }else{
  header('Location: ../index.php');
} ?>