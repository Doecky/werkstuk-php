<?php

    $to = "wart.spitaels@student.ehb.be";
    $from = $_POST['email'];
    $message = $_POST['message'];

    $headers = "From:" . $from;
    mail($to,"Bericht van webShop",$message,$headers);
    header('Location: ../contact_Thanks.php');

?>