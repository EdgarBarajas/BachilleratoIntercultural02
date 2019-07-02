<?php
session_start(); 
include_once("../private/conexion.php");
date_default_timezone_set('UTC');
date_default_timezone_set("America/Mexico_City"); 

if (!empty($_POST['nombre']) && !empty($_POST['comentario']) && !empty($_POST['id_publicacion'])) {

    $nombre = $_POST['nombre'];
    $comentario = $_POST['comentario'];
    $id_publicacion = $_POST['id_publicacion'];

    $rcomentario = $mysqli->query("INSERT INTO `comentarios`(`usuario`, `comentario`, `fecha`, `id_pub`) VALUES ('$nombre','$comentario',NOW(),'$id_publicacion')");
    if ($rcomentario) {
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
            <p>Comentario agregrado a esta publicación</p>
          </div>
          <div class="modal-footer m-auto"> 
            <a href="../../secciones/detalles.php?id='.$id_publicacion.'">
              <button type="button" class="btn btn-primary bg-orange">Entendido</button> 
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