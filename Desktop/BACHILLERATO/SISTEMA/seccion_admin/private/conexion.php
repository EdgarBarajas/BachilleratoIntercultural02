<?php
	$db_username = 'bachill1_root';
 	$db_password = 'KI}3rjg@zpcE';
 	$db_name = 'bachill1_bachillerato';
	$db_host = 'localhost';

  $mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
    if ($mysqli->connect_error) {
	     die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }
  $mysqli->set_charset("utf8");
?>