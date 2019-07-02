<?php session_start();  include_once("../private/conexion.php"); ?>
  <?php 
if (!empty($_SESSION['docente_correo'])) {
  $correo_docente = $_SESSION['docente_correo'];
 ?>
<!doctype html>
<html lang="es">
  <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Native CSS -->
    <link rel="stylesheet" type="text/css" href="css/index.css">

    <!-- FavIcon -->
    <link rel="icon" href="../images/icon.ico" />

    <title>Sección Docentes</title>    
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
                <a class="nav-link" href="materias.php">Mis materias</a>
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

<!-- Seccion Ver Noticias -->
<section id="noticias" class="noticias mt-5 mb-5">
  <div class="container">
    <h3>Mis materias asignadas</h3>
<?php  $rcheck = $mysqli->query("SELECT * FROM materias WHERE correo_docente='$correo_docente'");
  echo "Total de materias asignadas: <b>".mysqli_num_rows($rcheck).'</b>';
?>
    <div class="row mt-3">
<?php 
    $rexp3 = $mysqli->query("SELECT * FROM materias WHERE correo_docente='$correo_docente' ORDER BY semestre ASC");
        if ($rexp3)
          {
            while($array = $rexp3->fetch_object())
              {
                $id = $array->id;
                $materia = $array->materia;
                $semestre = $array->semestre;
                
                echo '
                  <div class="col-12 col-md-4 col-lg-3 mb-4">
                    Semestre: <b>'.$semestre.'</b>
                    <div class="card w-100 p-2 btn">
                      <button class="btn btn-outline-info open-AddBookDialog" data-toggle="modal" data-target="#modalVerGrupos" data-id="'.$materia.' ('.$semestre.')">
                        <b>'.$materia.'</b>
                      </button>            
                      </div>
                  </div>
                ';
              }
          }
 ?>
   
    </div>
  </div>
</section>
<!-- Seccion Ver Noticias -->


<!-- Modal Agregar Docente -->
<div class="modal fade" id="modalVerGrupos" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Grupos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3>Selecciona el grupo</h3>
        <div class="row mt-3">
          <div class="col-12 col-md-4">
            <form action="grupos_calif.php" method="GET">              
              <input type="hidden" name="grupo" value="a" readonly required/>
              <input type="hidden" name="materia_semestre" id="bookId" value="" readonly required/>
              <button type="submit" class="btn btn-outline-info"><b>Grupo A</b></button>                      
            </form>
          </div>
          <div class="col-12 col-md-4">
            <form action="grupos_calif.php" method="GET">
              <input type="hidden" name="grupo" value="b" readonly required/>
              <input type="hidden" name="materia_semestre" id="bookId" value="" readonly required/>
              <button type="submit" class="btn btn-outline-info"><b>Grupo B</b></button>                                  
            </form>
          </div>
          <div class="col-12 col-md-4">
            <form action="grupos_calif.php" method="GET">
              <input type="hidden" name="grupo" value="c" readonly required/>
              <input type="hidden" name="materia_semestre" id="bookId" value="" readonly required/>
              <button type="submit" class="btn btn-outline-info"><b>Grupo C</b></button>                      
            </form>
          </div>

        </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Cerrar</button>
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
    <script type="text/javascript">
      $(document).on("click", ".open-AddBookDialog", function () {
         var myBookId = $(this).data('id');
         $(".modal-body #bookId").val( myBookId );
         // As pointed out in comments, 
         // it is unnecessary to have to manually call the modal.
         // $('#addBookDialog').modal('show');
    });
    </script>
  </body>
</html>
<?php }else{
  echo '<script type="text/javascript">';
  echo 'window.location="../secciones/docentes.php';
  echo '"</script>';
} ?>