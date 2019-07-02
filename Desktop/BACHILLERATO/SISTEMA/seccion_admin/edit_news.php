<?php
include_once("conexion.php");
    if (!empty($_POST['id']) && !empty($_POST['titulo']) && !empty($_POST['descripcion'])) {
        
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $descripcion_breve = $_POST['descripcion_breve'];
        $descripcion = $_POST['descripcion'];

        $reditarrnews = $mysqli->query("UPDATE `news` SET 
        											`titulo`='$titulo',
        											`descripcion_breve`='$descripcion_breve',
        											`descripcion`='$descripcion'
        											 WHERE id='$id'");
            if ($reditarrnews)
            {
                echo '<script type="text/javascript">';
                echo 'alert("Noticia Actualizada");';
                echo 'window.location="section-noticias.php';
                echo '"</script>';
            }
    }

?>