<?php
session_start(); 
include_once("../private/conexion.php");
date_default_timezone_set('UTC');
date_default_timezone_set("America/Mexico_City"); 

if (!empty($_POST['descripcion_breve']) 
    && !empty($_POST['descripcion'])
    && !empty($_POST['identificador'])) {

    $correo_docente = $_SESSION['docente_correo'];
    $nombre_docente = $_SESSION['docente_nombre'];

    $descripcion_breve = $_POST['descripcion_breve'];
    $descripcion = $_POST['descripcion'];
    $identificador = $_POST['identificador'];
    $fecha = date('d-m-Y');
    $docente = $_SESSION['docente_nombre'];

    if (isset($_FILES["file"]["name"]) && !empty($_FILES["file"]["name"])) {
        move_uploaded_file($_FILES["file"]["tmp_name"], "../imagespub/" . $_FILES["file"]["name"]);
        $nombreFotoPrincipal = $_FILES["file"]["name"];
    }else{
        $nombreFotoPrincipal = 'no hay imagen principal';
    }

    if (empty($_POST['titulo'])) {
        $titulo = 'no hay titulo';
    }else{ $titulo = $_POST['titulo']; }

    if (isset($_FILES["file_archivo"]["name"]) && !empty($_FILES["file_archivo"]["name"])) {
        for($x=0; $x<count($_FILES["file_archivo"]["name"]); $x++)
        {
          $file = $_FILES["file_archivo"];
          $nombre_archivo = $file["name"][$x];
          $tipo = $file["type"][$x];
          $ruta_provisional = $file["tmp_name"][$x];
          $size = $file["size"][$x];
          $carpeta = "../archivospub/";
          
          $src = $carpeta.$nombre_archivo;
          move_uploaded_file($ruta_provisional, $src);
          $x_pos = $x + 1;
          
          $rarchivos = $mysqli->query("INSERT INTO `archivos_pub`(`docente`, `nombre`, `identificador`, `fecha`) VALUES ('$docente','$nombre_archivo','$identificador','$fecha')");
        }
    }
    if (isset($_FILES["file_foto"]["name"]) && !empty($_FILES["file_foto"]["name"])) {
        for($x=0; $x<count($_FILES["file_foto"]["name"]); $x++)
        {
          $file = $_FILES["file_foto"];
          $nombre_foto = $file["name"][$x];
          $tipo = $file["type"][$x];
          $ruta_provisional = $file["tmp_name"][$x];
          $size = $file["size"][$x];
          $carpeta = "../fotospub/";
          
          $src = $carpeta.$nombre_foto;
          move_uploaded_file($ruta_provisional, $src);
          $x_pos = $x + 1;

          $rfotos = $mysqli->query("INSERT INTO `fotos_pub`(`docente`, `nombre`, `identificador`, `fecha`) VALUES ('$docente','$nombre_foto','$identificador','$fecha')");
        }
    }
    if (empty($_POST['links'])) {
        $links = 'no hay links';
    }else{
        $links = $_POST['links'];
    }

    $rnews = $mysqli->query("INSERT INTO `news`(correo_docente,nombre_docente,`titulo`, `descripcion_breve`, `descripcion`, `imagen`, `fecha`, `identificador`,links) VALUES ('$correo_docente','$nombre_docente','$titulo','$descripcion_breve','$descripcion','$nombreFotoPrincipal','$fecha','$identificador','$links')");
          if ($rnews)
          {
            echo "hecho";
            echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <div class="modal fade" id="modalSuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header m-auto">
          </div>
          <div class="modal-body text-center">
            <p>Publicación Agregada al Blog</p>
          </div>
          <div class="modal-footer m-auto"> 
            <a href="../section-noticias.php">
              <button type="button" class="btn btn-primary bg-orange">Continuar</button> 
              </a>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
    $( document ).ready(function() {
        $("#modalSuccess").modal("toggle")
    });
    </script>';
          }else{
            echo 'no';
            echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <div class="modal fade" id="modalSuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header m-auto">
          </div>
          <div class="modal-body text-center">
            <p>Error al publicar la nota para el Blog</p>
          </div>
          <div class="modal-footer m-auto"> 
            <a href="../section-noticias.php">
              <button type="button" class="btn btn-primary bg-orange">Continuar</button> 
              </a>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
    $( document ).ready(function() {
        $("#modalSuccess").modal("toggle")
    });
    </script>';
          }
    
}

?>