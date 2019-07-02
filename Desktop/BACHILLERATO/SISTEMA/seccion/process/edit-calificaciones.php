<?php
session_start(); 
include_once("../private/conexion.php");
date_default_timezone_set('UTC');
date_default_timezone_set("America/Mexico_City"); 

if (!empty($_POST['calif1']) 
    && !empty($_POST['calif2'])
    && !empty($_POST['calif3'])
    && !empty($_POST['id_alumno'])
    && !empty($_POST['materia'])
    && !empty($_POST['semestre'])
    && !empty($_POST['grupo'])
    && !empty($_POST['materia_semestre'])) {

    echo $calif1 = $_POST['calif1'];
    echo $calif2 = $_POST['calif2'];
    echo $calif3 = $_POST['calif3'];
    echo $id_alumno = $_POST['id_alumno'];
    echo $materia = $_POST['materia'];
    echo $semestre = $_POST['semestre'];
    echo $grupo = $_POST['grupo'];
    echo $materia_semestre = $_POST['materia_semestre'];
    
    if ($calif1 == 'sin cursar') { $calif1 = 0; }
    if ($calif2 == 'sin cursar') { $calif2 = 0; }
    if ($calif3 == 'sin cursar') { $calif3 = 0; }

    $promedio_completo = ($calif1 + $calif2 + $calif3) / 3;
    if(is_float($promedio_completo)){
      $promedio = number_format($promedio_completo, 0, '.', '');
    }else{
      $promedio = $promedio_completo;
    }
    $calificaciones = $calif1 . ',' . $calif2 . ',' . $calif3 . ',' . $promedio;

    $rsetcalificacion = $mysqli->query("UPDATE semetre_a$semestre SET $materia='$calificaciones' WHERE id='$id_alumno'");
    if ($rsetcalificacion)
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
            <p>Calificaciones Actualizadas Correctamente</p>
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