<?php
include_once("conexion.php");
    if (!empty($_POST['id'])) {
        
        $id = $_POST['id'];
        
        $reliminarrnews = $mysqli->query("DELETE FROM `news` WHERE id='$id'");
            if ($reliminarrnews)
            {
                echo '<script type="text/javascript">';
                echo 'alert("Noticia Eliminada");';
                echo 'window.location="section-noticias.php';
                echo '"</script>';
            }
    }

?>