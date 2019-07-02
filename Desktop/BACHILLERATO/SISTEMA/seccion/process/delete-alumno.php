<?php 

session_start(); 
include_once("../private/conexion.php");

if (!empty($_POST['id_alumno_check'])
     && !empty($_POST['materia'])
     && !empty($_POST['semestre'])
 	 && !empty($_POST['grupo'])
 	 && !empty($_POST['materia_semestre'])){

	$id_alumno_check = $_POST['id_alumno_check'];
	$materia = $_POST['materia'];
	$semestre = $_POST['semestre'];
	$grupo = $_POST['grupo'];
	$materia_semestre = $_POST['materia_semestre'];

  	$rdeletealumno = $mysqli->query("DELETE FROM semetre_a$semestre WHERE id='$id_alumno_check'");
  	if ($rdeletealumno) {
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
            <p>Alumno Eliminado del semestre <b>'.$semestre.'</b></p>
          </div>
          <div class="modal-footer m-auto"> 
            <a href="../grupos_calif.php?grupo='.$grupo.'&materia_semestre='.$materia_semestre.'">
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
            <p>Error al eliminar el alumno</p>
          </div>
          <div class="modal-footer m-auto"> 
            <a href="../grupos_calif.php?grupo='.$grupo.'&materia_semestre='.$materia_semestre.'">
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
            <p>Error al recibir los datos del alumno para eliminar</p>
          </div>
          <div class="modal-footer m-auto"> 
            <a href="../grupos_calif.php?grupo='.$grupo.'&materia_semestre='.$materia_semestre.'">
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
?>
 ?>