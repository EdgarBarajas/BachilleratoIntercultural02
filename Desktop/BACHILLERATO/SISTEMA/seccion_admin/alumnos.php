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
              <li class="nav-item">
                <a class="nav-link" href="maestros.php">Docentes</a>
              </li>
              <li class="nav-item active">
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
    <button class="btn btn-outline-success" data-toggle="modal" data-target="#modalAgregarAlumno">Agregar Alumno</button>
  </div>
</div>


<!-- Seccion Ver Noticias -->
<section id="noticias" class="noticias mt-5 mb-5">
  <div class="container">
    
<?php 
    $rexp3 = $mysqli->query("SELECT * FROM alumnos");
        if ($rexp3)
          {
            echo 'Total de alumnos: <b>'.mysqli_num_rows($rexp3);
            echo '</b><div class="row mt-2">';
            while($array = $rexp3->fetch_object())
              {
                $id = $array->id;
                $nombre = $array->nombre;
                $correo = $array->correo;
                $password = $array->password;
                $semestre = $array->semestre;
                
                echo '                  
                  <div class="col-md-4 col-12 mb-3">
                    <div class="card w-100">
                    <button class="btn btn-outline-info open-AddBookDialog" data-toggle="modal" data-target="#modalAlumno" data-id="'.$correo.'">
                      Alumno <br>
                        <b>Nombre: '.$nombre.'</b> <br>
                        <b>Correo: '.$correo.'</b> <br> 
                        <b>Semestre: '.$semestre.'</b>                      
                    </button>            
                    </div>
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

<!-- Modal Agregar Alumno -->
<div class="modal fade" id="modalAgregarAlumno" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Agregar Alumno</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="process/add-alumno.php" method="POST">
          Escribe Nombre Completo del Alumno *
          <input type="text" class="form-control" name="nombre" placeholder="Apellido M/ Apellido P/ Nombre(s)" required/> <br>
          Escribe Correo del Alumno *
          <input type="email" class="form-control" name="correo"  placeholder="Correo Electrónico" required/> <br>
          Escribe una Contraseña *
          <input type="text" class="form-control" name="contrasena"  placeholder="Contraseña" required/> <br>
          Semestre *
          <select class="form-control" name="semestre" required/>
            <option value="" disabled selected>Selecciona el semestre</option>
            <option value="1">Semestre I</option>
            <option value="2">Semestre II</option>
            <option value="3">Semestre III</option>
            <option value="4">Semestre IV</option>
            <option value="5">Semestre V</option>
            <option value="6">Semestre VI</option>
          </select>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Cancelar</button>
          <button type="submit" class="btn btn-outline-success">Agregar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /Modal Agregar Alumno -->


<!-- Modal Alumno -->
<div class="modal fade" id="modalAlumno" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Materias</h5>
        <a href="alumnos.php">
        <button type="button" class="close">
          <span aria-hidden="true">&times;</span>
        </button>
        </a>
      </div>
      <div class="modal-body">
        <form action="alumnos.php" method="GET">
          <input type="hidden" name="correo" id="bookId" value="" readonly required/>
            <div class="text-center">
              <button type="submit" class="mt-3 btn btn-outline-info" >
                  Ver / Cambiar Información
              </button>  
            </div>
        </form>

<?php 
if (isset($_GET['correo']) && !empty($_GET['correo'])) {
  $correo_recibido = $_GET['correo'];

$rinfoalumno = $mysqli->query("SELECT * FROM alumnos WHERE correo='$correo_recibido'");
if ($rinfoalumno)
{
  while($array = $rinfoalumno->fetch_object())
    {
      $id = $array->id;
      $nombre = $array->nombre;
      $correo = $array->correo;
      $password = $array->password;
      $semestre = $array->semestre;
      echo '<form action="process/edit-alumno.php" method="POST">
      Nombre Completo del Alumno
      <input type="text" class="form-control" name="nombre" value="'.$nombre.'" placeholder="Apellido M/ Apellido P/ Nombre(s)" required/> <br>
      Correo del Alumno 
      <input type="email" class="form-control" name="correo" value="'.$correo.'" placeholder="Correo Electrónico" required/> <br>
      Contraseña 
      <input type="text" class="form-control" name="contrasena" value="'.$password.'" placeholder="Contraseña" required/> <br>
      <input type="hidden" class="form-control" name="id_alumno" value="'.$id.'" required/>
      Semestre 
      <select class="form-control" name="semestre" required/>
        <option value="'.$semestre.'">Semestre '.$semestre.'</option>
        <option value="1">Semestre 1</option>
        <option value="2">Semestre 2</option>
        <option value="3">Semestre 3</option>
        <option value="4">Semestre 4</option>
        <option value="5">Semestre 5</option>
        <option value="6">Semestre 6</option>
      </select>
      <div class="text-center">
        <button type="submit" class="mt-3 btn btn-outline-info">
          Editar Información
        </button>  
      </div>
      </form>';
    }
}

  echo '</div>
      <div class="modal-footer">
        <a href="alumnos.php">
          <button type="button" class="btn btn-primary">Cancelar</button>
        </a>
          
            <button type="button" class="btn btn-danger open-AddBookDialog" data-toggle="modal"  data-target="#modalEliminarAlumno" data-id="'.$id.'">
              Eliminar alumno
            </button>
      </div>';
}
 ?>   
    </div>
  </div>
</div>
<!-- /Modal Alumno -->



<!-- Modal Eliminar Alumno -->
<div class="modal fade" id="modalEliminarAlumno" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Eliminar Alumno</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Seguro que deseas eliminar a este alumno?
        <form action="process/delete-alumno.php" method="POST">
          <input type="hidden" name="id_alumno_eliminar" id="bookId" value="" readonly required/>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Cancelar</button>
          <button type="submit" class="btn btn-outline-danger">Eliminar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /Modal Eliminar Alumno -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $(document).on("click", ".open-AddBookDialog", function () {
         var myBookId = $(this).data('id');
         $(".modal-body #bookId").val( myBookId );
         // As pointed out in comments, 
         // it is unnecessary to have to manually call the modal.
         // $('#addBookDialog').modal('show');
    });
    </script>
<?php 
    if (isset($_GET['correo']) && !empty($_GET['correo'])) {
    echo '<script type="text/javascript">
    $( document ).ready(function() {
        $("#modalAlumno").modal("toggle")
    });
    </script>';
  }
 ?>
  </body>
</html>
<?php }else{
  header('Location: ../index.php');
} ?>