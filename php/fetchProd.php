<?php
include('DAO.php');

$sql = "SELECT * FROM Products";
$res = $mysqli->query($sql);
$result = array();

while( $row = $res->fetch_array() ){
    array_push($result, array('ID' => $row[0],
        'PICTURE' => $row[1],
        'NAME'  => $row[2],
        'DESCRIPTION'  => $row[3],
        'PRICE'  => $row[4],
        'CATEGORY'  => $row[5],
        'UITGELICHT' => $row[6]));
}


echo json_encode(array("result" => $result));

$mysqli->close();