<?php
include('DAO.php');

$sql = "INSERT INTO Ratings (ID,Rating) VALUES (".$_POST['id'].", ".$_POST['rating']." )";

if ($mysqli->query($sql)) {
echo "succes";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


$mysqli->close();