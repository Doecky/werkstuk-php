
<?php
$page_title = "log out";
$page_description = "Description of this page";
$pageHeader = "";
$headerDesc = "";
$customStylesheet = "css/login.css";
include("header.php");
include("php/login.php")
?>


<div class="container">

    <form method="post" action="login.php" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail"  class="sr-only">username</label>
        <input type="text"  name="username" id="Username" class="form-control" placeholder="Username" required autofocus>
        <label for="Password" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

</div>


    <?php include("footer.php"); ?>

