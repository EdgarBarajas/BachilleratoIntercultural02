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
    <button class="btn btn-outline-success open-AddBookDialog" data-toggle="modal" data-target="#modalAgregarMateria">Agregar Materia</button>
  </div>

  
<?php 
if (!empty($_GET['id_docente'])) {
  $id_docente = $_GET['id_docente'];
  echo '
  <div class="text-right mt-3"><a href="process/delete-doente.php?id_docente='.$id_docente.'">
      <button class="btn btn-outline-danger">Eliminar Docente</button>
    </a>
    </div>';
}
 ?>
  
</div>

<!-- Seccion Ver Noticias -->
<section id="noticias" class="noticias mt-5 mb-5">
  <div class="container">
<?php 
if (!empty($_GET['id_docente'])) {
  $id_docente = $_GET['id_docente'];
}
    $rexp3 = $mysqli->query("SELECT * FROM docentes WHERE id_docente='$id_docente'");
        if ($rexp3)
          {
            while($array = $rexp3->fetch_object())
              {
                $id_docente = $array->id_docente;
                $nombre = $array->nombre;
                $correo = $array->correo;
                $password = $array->password;
                
                echo 'Nombre: <b>'.$nombre.'</b><br>';
                echo 'Correo: <b>'.$correo.'</b><br>';
                echo 'Password: <b>'.$password.'</b><br>';

                $rmaterias = $mysqli->query("SELECT * FROM materias WHERE correo_docente='$correo' ORDER BY semestre ASC");
                if ($rmaterias)
                  {
                    if (mysqli_num_rows($rmaterias) > 0) {
                      echo "<hr><h3>Materias Asignadas</h3>";
                      echo '<div class="row">';
                    while($array = $rmaterias->fetch_object())
                      {
                        $id_docente_materia = $array->id;
                        $materia = $array->materia;
                        $semestre = $array->semestre;

                        echo '
                            <div class="card w-100 p-2 btn">
                              <button class="btn btn-outline-info open-AddBookDialog" data-toggle="modal" data-target="#modalMaterias" data-id="'.$id_docente_materia.'">
                                  <b>'.$materia.'</b> <br>
                                  <b>Semestre:  '.$semestre.'</b> 
                              </button>
                            </div>
                            <hr>';
                      }
                      echo '</div>';
                    }else{ echo '<p style="color:red;"> NO HAY MATERIAS ASIGNADAS A ESTE DOCENTE</p>';}
                  }
              }
          }
 ?>
   
    
  </div>
</section>
<!-- Seccion Ver Noticias -->


<!-- /Modal Agregar Materia -->
<div class="modal fade" id="modalAgregarMateria" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Agregar Materia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Asignar materia a este docente:
        <form action="process/add-materia.php" method="POST">
          <select class="form-control" name="materia" required>
            <option value="" disabled selected>Selecciona la materia</option>
            <option value="" disabled>____SEMESTRE 1_____</option>
            <option value="MATEMÁTICAS I">MATEMÁTICAS I</option>
            <option value="FISICA I">FISICA I</option>
            <option value="QUIMICA I">QUIMICA I</option>
            <option value="CONTEXTO SOCIAL NAL. REG. COMUNITARIO">CONTEXTO SOCIAL NAL. REG. COMUNITARIO</option>
            <option value="CULTURA Y LENGUA INDIGENA I">CULTURA Y LENGUA INDIGENA I</option>
            <option value="ESPAÑOL I">ESPAÑOL I</option>
            <option value="INGLES I">INGLES I</option>
            <option value="TIC I">TIC I</option>
            <option value="VINCULACION COMUNITARIA">VINCULACION COMUNITARIA</option>
            
            <option value="" disabled>____SEMESTRE 2_____</option>
            <option value="MATEMÁTICAS II">MATEMÁTICAS II</option>
            <option value="BIOLOGIA I">BIOLOGIA I</option>
            <option value="HIST. DE MEXICO Y C. 1">HIST. DE MEXICO Y C. 1</option>
            <option value="CULTURA Y LENGUA II">CULTURA Y LENGUA II</option>
            <option value="ESPAÑOL II">ESPAÑOL II</option>
            <option value="INGLES II">INGLES II</option>
            <option value="TIC II ">TIC II </option>
            <option value="FORMACION PROF. TEC">FORMACION PROF. TEC</option>
            <option value="VINCULACION COMUNITARIA II">VINCULACION COMUNITARIA II</option>
            
            <option value="" disabled>____SEMESTRE 3_____</option>
            <option value="MATEMATICAS III">MATEMATICAS III</option>
            <option value="FISICA II">FISICA II</option>
            <option value="GEOGRAFIA">GEOGRAFIA</option>
            <option value="HIST. DE MEXICO Y C. II">HIST. DE MEXICO Y C. II</option>
            <option value="CULTURA Y LENGUA INDIGENA  III ">CULTURA Y LENGUA INDIGENA  III </option>
            <option value="ESPAÑOL III">ESPAÑOL III</option>
            <option value="INGLES III">INGLES III</option>
            <option value="FORMACION PROF. TEC  II ">FORMACION PROF. TEC  II </option>
            <option value="VINCULACION COMUNITARIA III">VINCULACION COMUNITARIA III</option>
            
            <option value="" disabled>____SEMESTRE 4_____</option>
            <option value="MATEMATICAS IV">MATEMATICAS IV</option>
            <option value="QUIMICA II">QUIMICA II</option>
            <option value="LITERATURA  LOCA Y REG">LITERATURA  LOCA Y REG</option>
            <option value="CULTURA Y LENGUA INDIGENA  IV">CULTURA Y LENGUA INDIGENA  IV</option>
            <option value="ESPAÑOL IV">ESPAÑOL IV</option>
            <option value="INGLES IV">INGLES IV</option>
            <option value="FORMACION PROF. TEC  III">FORMACION PROF. TEC  III</option>
            <option value="VINCULACION COMUNITARIA IV">VINCULACION COMUNITARIA IV</option>

            <option value="" disabled>____SEMESTRE 5_____</option>
            <option value="MATEMATICAS APLICADAS">MATEMATICAS APLICADAS</option>
            <option value="BIOLOGIA II">BIOLOGIA II</option>
            <option value="FORMACION ETICA">FORMACION ETICA</option>
            <option value="CULTURA Y LENGUA INDIGENA V">CULTURA Y LENGUA INDIGENA V</option>
            <option value="ESPAÑOL V">ESPAÑOL V</option>
            <option value="INGLES V">INGLES V</option>
            <option value="TIC III">TIC III</option>
            <option value="FORMACION PROF. TEC  IV">FORMACION PROF. TEC  IV</option>
            <option value="VINCULACION COMUNITARIA V">VINCULACION COMUNITARIA V</option>
            <option value="FORM. PROP. TEMAS CS.">FORM. PROP. TEMAS CS.</option>

            <option value="" disabled>____SEMESTRE 6_____</option>
            <option value="MATEMATICAS APLICADAS II">MATEMATICAS APLICADAS II</option>
            <option value="ECOLOGIA Y MEDIO AMBIENTE">ECOLOGIA Y MEDIO AMBIENTE</option>
            <option value="FILOSOFIA">FILOSOFIA</option>
            <option value="PROYECTO DISC. DEL CAMPO DE C.">PROYECTO DISC. DEL CAMPO DE C.</option>
            <option value="TIC IV">TIC IV</option>
            <option value="FORMACION PROF. TEC. II">FORMACION PROF. TEC. II</option>
            <option value="VINCULACION COMUNITARIA VI">VINCULACION COMUNITARIA VI</option>
            <option value="FORM. PROP. LIT.">FORM. PROP. LIT.</option>

          </select>

          <br>
          Selecciona el semestre:
          <select class="form-control" name="semestre" required>
            <option value="" disabled selected>Selecciona el semestre</option>
            <option value="1">SEMESTRE 1</option>
            <option value="2">SEMESTRE 2</option>
            <option value="3">SEMESTRE 3</option>
            <option value="4">SEMESTRE 4</option>
            <option value="5">SEMESTRE 5</option>
            <option value="6">SEMESTRE 6</option>
          </select>
          <input type="hidden" name="correo_docente" value="<?php echo $correo; ?>" required>
          <input type="hidden" name="id_docente" value="<?php echo $_GET['id_docente']; ?>" required>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Cancelar</button>
          <button type="submit" class="btn btn-outline-success">Asignar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /Modal Agregar Materia -->

<!-- Modal Materia Docente -->
<div class="modal fade" id="modalMaterias" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Materia</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form accept="detalles-docente.php" method="GET">
          <input type="hidden" name="id_materia" id="bookId" value="" readonly required/>          
          <input type="hidden" name="id_docente" value="<?php echo $id_docente; ?>" readonly required/>          
          
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Cargar Información de la materia</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Materia Docente -->

<!-- Modal Info Materia Docente -->
<div class="modal fade" id="modalDatosMateria" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Información Materia</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
<?php 
if (isset($_GET['id_materia']) && !empty($_GET['id_materia']) && !empty($_GET['id_docente'])) {
  $id_materia_recibido = $_GET['id_materia'];
  $id_docente_recibido = $_GET['id_docente'];
  
  $rcheckmateria = $mysqli->query("SELECT * FROM `materias` WHERE id='$id_materia_recibido'");
  if ($rcheckmateria)
    {
      while($array = $rcheckmateria->fetch_object())
        {
          $id_docente_materia = $array->id;
          $nombre_docente = $array->nombre_docente;
          $correo_docente = $array->correo_docente;
          $materia = $array->materia;
          $semestre = $array->semestre;

          echo '<form action="process/edit-materia.php" method="POST">
                  <input type="hidden" class="form-control" name="id_materia_recibido" value="'.$id_materia_recibido.'" />
                  Materia: <br>
                <select class="form-control" name="materia" value="'.$materia.'" required/>
                  <option value="'.$materia.'">'.$materia.'</option>
                  <option value="MATEMÁTICAS I">MATEMÁTICAS I</option>
                  <option value="FISICA I">FISICA I</option>
                  <option value="QUIMICA I">QUIMICA I</option>
                  <option value="CONTEXTO SOCIAL NAL. REG. COMUNITARIO">CONTEXTO SOCIAL NAL. REG. COMUNITARIO</option>
                  <option value="CULTURA Y LENGUA INDIGENA I">CULTURA Y LENGUA INDIGENA I</option>
                  <option value="ESPAÑOL I">ESPAÑOL I</option>
                  <option value="INGLES I">INGLES I</option>
                  <option value="TIC I">TIC I</option>
                  <option value="VINCULACION COMUNITARIA">VINCULACION COMUNITARIA</option>

                  <option value="MATEMÁTICAS II">MATEMÁTICAS II</option>
                  <option value="BIOLOGIA I">BIOLOGIA I</option>
                  <option value="CULTURA Y LENGUA II">CULTURA Y LENGUA II</option>
                  <option value="ESPAÑOL II">ESPAÑOL II</option>
                  <option value="INGLES II">INGLES II</option>
                  <option value="TIC II ">TIC II </option>
                  <option value="FORMACION PROF. TEC">FORMACION PROF. TEC</option>
                  <option value="VINCULACION COMUNITARIA II">VINCULACION COMUNITARIA II</option>
            
                  <option value="MATEMATICAS III">MATEMATICAS III</option>
                  <option value="FISICA II">FISICA II</option>
                  <option value="GEOGRAFIA">GEOGRAFIA</option>
                  <option value="HIST. DE MEXICO Y C. II">HIST. DE MEXICO Y C. II</option>
                  <option value="CULTURA Y LENGUA INDIGENA  III ">CULTURA Y LENGUA INDIGENA  III </option>
                  <option value="ESPAÑOL III">ESPAÑOL III</option>
                  <option value="INGLES III">INGLES III</option>
                  <option value="FORMACION PROF. TEC  II ">FORMACION PROF. TEC  II </option>
                  <option value="VINCULACION COMUNITARIA III">VINCULACION COMUNITARIA III</option>
                  
                  <option value="MATEMATICAS IV">MATEMATICAS IV</option>
                  <option value="QUIMICA II">QUIMICA II</option>
                  <option value="LITERATURA  LOCA Y REG">LITERATURA  LOCA Y REG</option>
                  <option value="CULTURA Y LENGUA INDIGENA  IV">CULTURA Y LENGUA INDIGENA  IV</option>
                  <option value="ESPAÑOL IV">ESPAÑOL IV</option>
                  <option value="INGLES IV">INGLES IV</option>
                  <option value="FORMACION PROF. TEC  III">FORMACION PROF. TEC  III</option>
                  <option value="VINCULACION COMUNITARIA IV">VINCULACION COMUNITARIA IV</option>

                  <option value="MATEMATICAS APLICADAS">MATEMATICAS APLICADAS</option>
                  <option value="BIOLOGIA II">BIOLOGIA II</option>
                  <option value="FORMACION ETICA">FORMACION ETICA</option>
                  <option value="CULTURA Y LENGUA INDIGENA V">CULTURA Y LENGUA INDIGENA V</option>
                  <option value="ESPAÑOL V">ESPAÑOL V</option>
                  <option value="INGLES V">INGLES V</option>
                  <option value="TIC III">TIC III</option>
                  <option value="FORMACION PROF. TEC  IV">FORMACION PROF. TEC  IV</option>
                  <option value="VINCULACION COMUNITARIA V">VINCULACION COMUNITARIA V</option>
                  <option value="FORM. PROP. TEMAS CS.">FORM. PROP. TEMAS CS.</option>

                  <option value="MATEMATICAS APLICADAS II">MATEMATICAS APLICADAS II</option>
                  <option value="ECOLOGIA Y MEDIO AMBIENTE">ECOLOGIA Y MEDIO AMBIENTE</option>
                  <option value="FILOSOFIA">FILOSOFIA</option>
                  <option value="PROYECTO DISC. DEL CAMPO DE C.">PROYECTO DISC. DEL CAMPO DE C.</option>
                  <option value="TIC IV">TIC IV</option>
                  <option value="FORMACION PROF. TEC. II">FORMACION PROF. TEC. II</option>
                  <option value="VINCULACION COMUNITARIA VI">VINCULACION COMUNITARIA VI</option>
                  <option value="FORM. PROP. LIT.">FORM. PROP. LIT.</option>
                </select>

                  <input type="hidden" name="id_docente" value="'.$id_docente_recibido.'" required />
                  Semestre: <br>
                  <select class="form-control" name="semestre" required/>
                    <option value="'.$semestre.'">SEMESTRE '.$semestre.'</option>
                    <option value="1">SEMESTRE 1</option>
                    <option value="2">SEMESTRE 2</option>
                    <option value="3">SEMESTRE 3</option>
                    <option value="4">SEMESTRE 4</option>
                    <option value="5">SEMESTRE 5</option>
                    <option value="6">SEMESTRE 6</option>
                  </select>
                  ';
        }
    }
}
 ?>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal" aria-label="Close">Cerrar</button>
            <div class="text-center">
              <a href="process/delete-materia.php?id_materia=<?php echo $id_materia_recibido; ?>&id_docente=<?php echo $id_docente_recibido; ?>" class="btn btn-danger">
                Eliminar Materia
              </a>
            </div>
          <button type="submit" class="btn btn-success">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Info Materia Docente -->
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
        if (isset($_GET['id_materia']) && !empty($_GET['id_materia']) && !empty($_GET['id_docente'])) {
        echo '<script type="text/javascript">
        $( document ).ready(function() {
            $("#modalDatosMateria").modal("toggle")
        });
        </script>';
      }
    ?>
  </body>
</html>
<?php }else{
  echo '<script type="text/javascript">';
  echo 'window.location="../secciones/docentes.php';
  echo '"</script>';
} ?>