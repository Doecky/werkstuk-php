<?php
function buildNavList(){
    if ($_SESSION['loggedIn'] == 1) {
        $login =  '<li><a href="logout.php">Log Out</a></li>';
    }
    else{
        $login = '<li><a href="login.php">Log In</a></li>';
    }

echo basename($_SERVER["REQUEST_URI"]);


    switch (basename($_SERVER["REQUEST_URI"])){

        case "addCart.php":
            echo'
                <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                <li class="active"> <a href="addCart.php">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
                '.$login.'
                
                
</ul>';
        case "login.php":
            echo'
                <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                <li> <a href="productenOverview.php">Home</a></li>
                 <li <a href="contact.php">Contact</a></li>
                '.$login.'
                
               
</ul>
</div>';

        case "logout.php":
            echo'
                <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                <li> <a href="productenOverview.php">Home</a></li>
                 <li <a href="contact.php">Contact</a></li>
                '.$login.'
                
               
</ul></div>';

        case "productenDetail.php":
            ;
        case "winkelwagen.php":
            ;
        case "contact.php":
            echo'
                <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                <li> <a href="productenOverview.php">Home</a></li>
                 <li class="active"><a href="contact.php">Contact</a></li>
                '.$login.'
                
               
</ul></div>';

    }




}