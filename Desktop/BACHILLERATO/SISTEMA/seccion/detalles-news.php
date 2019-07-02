<?php include_once("../private/conexion.php"); 
if (!empty($_GET['id'])) {
  $id = $_GET['id'];
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

  
  <div class="container mt-5 mb-5 bg-blanco ">
    <div class="row">
<?php 


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
                      echo '<a href="'.$links.'" target="_blank">Click aquí</a>'; 
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


 ?>

    </div>
  </div>

  

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
<?php }else{

  echo '<div class="text-center mb-5"><h3 class="mb-5">Lo sentimos esta publicación no esta disponible</h3></div>';

} ?>