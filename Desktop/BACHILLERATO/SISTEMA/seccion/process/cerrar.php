<?php 
	session_start();
	session_destroy();
	header("Location: ../../secciones/docentes.php");
	exit;
 ?>