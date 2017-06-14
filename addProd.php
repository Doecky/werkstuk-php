<?php


    $page_title = "Add Products";
    $page_description = "";
    $pageHeader = "Add Products";
    $headerDesc = "";
    $customStylesheet = "";

    include("header.php");
if($_SESSION['loggedIn'] == 1 && $_SESSION['ADMIN'] == 1) {
    include ("addProdAdmin.php");

}
else{
    echo('No Admin');

}

