<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if(isset($_SESSION['cart'])){
        if (isset($_POST['item'])){
           array_push( $_SESSION['cart'], $_POST['item']);

        }

    }
    else {
        $_SESSION['cart'] = array();
        if (isset($_POST['item'])){
            array_push( $_SESSION['cart'], $_POST['item']);
        }
    }

}
else{
    echo json_encode(array("result" => $_SESSION['cart']));



}

