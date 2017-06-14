<?php
include('DAO.php');

$sql = "SELECT DISTINCT Category FROM Products";
$res = $mysqli->query($sql);
$result = array();

while( $row = $res->fetch_array() )
    array_push($result, array('NAME' => $row[0]));


echo json_encode(array("result" => $result));

$mysqli->close();