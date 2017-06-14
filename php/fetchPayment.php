<?php
include('DAO.php');

$sql = "SELECT * FROM PaymentOptions";
$res = $mysqli->query($sql);
$result = array();

while( $row = $res->fetch_array() )
    array_push($result, array('ID' => $row[0],
        'NAME' => $row[1]));


echo json_encode(array("result" => $result));

$mysqli->close();