<?php
include('DAO.php');

$sql = "SELECT * FROM Ratings";
$res = $mysqli->query($sql);
$result = array();

while( $row = $res->fetch_array() ){
    array_push($result, array('ID' => $row[1],
        'RATING' => $row[2]));

}


echo json_encode(array("result" => $result));

$mysqli->close();