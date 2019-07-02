<?php
	session_start();
	include_once("../../private/conexion.php");
  setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
  date_default_timezone_set('UTC');
  date_default_timezone_set("America/Mexico_City");

	if (!empty($_POST['contrasena']) && !empty($_POST['correo'])) {
		$correo = $_POST['correo'];
		$pass = $_POST['contrasena'];
    
		$correo_verificar = 0;
		$pw_verificar = 0;

    if ($correo == 'bachintercultural02@gmail.com') {
      if ($pass == 'abcdabcd') {
        echo '<script type="text/javascript">';
        echo 'window.location="../../seccion_admin/section-noticias.php';
        echo '"</script>';
        $_SESSION['administrador_bachillerato'] = $correo;
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
            <p>Contraseña incorrecta</p>
          </div>
          <div class="modal-footer m-auto"> 
            <a href="../../secciones/docentes.php">
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

		$r = $mysqli->query("SELECT * FROM docentes");
		    if ($r)
		      {
			  	while($array = $r->fetch_object())
        		{
        			$correo_bd = $array->correo;
        			if ($correo_bd == $correo) {
        				$correo_verificar = 1;
        			}
        		}
        	  }

        	if ($correo_verificar == 1) {


        	  	$rr = $mysqli->query("SELECT * FROM docentes WHERE correo = '$correo'");
		    	if ($rr)
		      	{
			  		while($arrayy = $rr->fetch_object())
        			{
        				$pw_bd = $arrayy->password;
                $nombre_bd = $arrayy->nombre;
        				
        				if ($pw_bd == $pass) {
        					$pw_verificar = 1;
        				}
        			}
        	  	}
        	  	if ($pw_verificar == 1) {
        	  		echo "Accediendo...";        	  		
        	  		$_SESSION['docente_nombre'] = $nombre_bd;
                $_SESSION['docente_correo'] = $correo;

                echo '<script type="text/javascript">';
                echo 'window.location="../../seccion/section-noticias.php';
                echo '"</script>';

          
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
            <p>No se encontro registro con este correo</p>
          </div>
          <div class="modal-footer m-auto"> 
            <a href="../../secciones/docentes.php">
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

        	  }else{ echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
            <p>No se encontro registro con este correo</p>
          </div>
          <div class="modal-footer m-auto"> 
            <a href="../../secciones/docentes.php">
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
    </script>'; }

 
	}
}
	else{
		echo '<script type="text/javascript">';
    echo 'window.location="../../index.html';
    echo '"</script>';
	}
?>