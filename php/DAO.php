<?php



$mysqli = new mysqli("HOST", "USERNAME", "PASSWORD", "DB");

    if($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') ' .
            $mysqli->connect_error);
    }

 



