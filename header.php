<?php session_start();
if (!isset($_SESSION["loggedIn"])){
    $_SESSION["loggedIn"] = 0;
    $_SESSION["ADMIN"] = 0;

}
//include("php/header.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $page_title?></title>
    <meta http-equiv="description" content="<?php echo $page_description; ?>" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Own content-->
    <link href="css/Template.css" rel="stylesheet">
    <link href="<?php echo $customStylesheet ?>" rel="stylesheet">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script>
        function login() {
            window.location = 'login.php'
        }
        function logout() {
            window.location = 'logout.php'
        }

    </script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="Index.php">WebShoppe</a>
        </div>
        <?php //buildNavList(); ?>
    <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li> <a href="Index.php">Home</a></li>

                <li><a href="contact.php">Contact</a></li>
            </ul>
        <ul class="nav navbar-nav navbar-right ">
                <li>

                    <a href="winkelwagen.php"> <span class="glyphicon glyphicon-shopping-cart "></span> Shopping Cart(<span id="shoppingcart">0</span>)</a>

                </li>

                <li>

                <?php
                if ($_SESSION['loggedIn'] == 0 or basename(__FILE__) == 'logout.php') {echo '<button type="button"  class="btn btn-danger navbar-btn" onclick="login()">Log In</button>';}
                else{

                    echo '<button type="button" class="btn btn-danger navbar-btn" onclick="logout()">Log Out</button> ';
                } ?>


                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class="container">

    <div class="page-header">
        <h1><?php echo $pageHeader ?><small><?php echo $headerDesc?></small></h1>
    </div>

</div>
