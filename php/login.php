<?php


    if($_SESSION['loggedIn'] == 1){

        header("location:index.php");


    }



//check for post
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //check password

    if(isset($_POST["username"], $_POST["password"])){


        $name = $_POST["username"];
        $password = $_POST["password"];

        include("DAO.php");
        $stmt = $mysqli->prepare("SELECT USERNAME, admin FROM Users WHERE USERNAME = ? AND  PASSWORD = ?");
        $stmt->bind_param("ss", $name, $password);

        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            $_SESSION['loggedIn'] = 1;

            echo $_SESSION['loggedIn'];
            while ($row = mysqli_fetch_assoc($result)) {

                $_SESSION['USERNAME'] = $row['USERNAME'];
                $_SESSION['ADMIN'] = $row['admin'];
            }
            header("location:index.php");
        } else {
            // Failed!
        }


        }

        $mysqli ->close();








}

