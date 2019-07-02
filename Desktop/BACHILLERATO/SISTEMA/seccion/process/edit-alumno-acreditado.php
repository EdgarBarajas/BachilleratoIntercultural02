<?php
session_start(); 
include_once("../private/conexion.php");
date_default_timezone_set('UTC');
date_default_timezone_set("America/Mexico_City"); 

if (!empty($_GET['id_alumno'])
    && !empty($_GET['materia'])
    && !empty($_GET['semestre'])
    && !empty($_GET['grupo'])
    && !empty($_GET['materia_semestre'])
    && !empty($_GET['acreditado'])) {

    echo $id_alumno = $_GET['id_alumno'];
    echo $materia = $_GET['materia'];
    echo $semestre = $_GET['semestre'];
    echo $grupo = $_GET['grupo'];
    echo $materia_semestre = $_GET['materia_semestre'];
    echo $acreditado = $_GET['acreditado'];
    $materia_check = '';
    $materia_check_update = '';
    
    $rcheck = $mysqli->query("SELECT $materia FROM semetre_a$semestre WHERE id='$id_alumno'");
    if ($rcheck)
    {
      while($array = $rcheck->fetch_object())
      {
        $materia_check = $array->$materia;
      }
    }

    //OBTENER ACREDITADO
    $cadena = $materia_check;
    $cadena_sin = preg_replace("/\((.*?)\)/i", "", $cadena);

    $c = substr($cadena_sin, -1); // returns "s"
    if ($c == ',') {
      $materia_check_update = $cadena_sin . '('.$acreditado.')';  
    }else{
      $materia_check_update = $cadena_sin . ',('.$acreditado.')';
    }
    //OBTENER ACREDITADO

    $reditacreditadoalumno = $mysqli->query("UPDATE semetre_a$semestre SET $materia='$materia_check_update' WHERE id='$id_alumno'");
    if ($reditacreditadoalumno)
    {
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
            <p>Status de acreditado actualizado</p>
          </div>
          <div class="modal-footer m-auto">
            <a href="../grupos_calif.php?grupo='.$grupo.'&materia_semestre='.$materia_semestre.'">
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
    }else{
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
            <p>Error al actualizar las calificaciones</p>
            Si pusiste un 0 en la calificaciones añade un menos antes del 0[-]
            Ej. -0
          </div>
          <div class="modal-footer m-auto">
            <a href="../grupos_calif.php?grupo='.$grupo.'&materia_semestre='.$materia_semestre.'">
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
    
}else{
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
            <p>Error al recibir los datos de las calificaciones</p>
          </div>
          <div class="modal-footer m-auto">
            <a href="../grupos_calif.php?grupo='.$grupo.'&materia_semestre='.$materia_semestre.'">
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

?>