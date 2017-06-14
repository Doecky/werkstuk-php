<?php
$page_title = "Contact";
$page_description = "Description of this page";
$pageHeader = "Contact";
$headerDesc = "";
$customStylesheet = "css/contact.css";

include("header.php");



?>


    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="col-md-5">
        <form method="post" action="php/contact.php">
            <input class="form-control" type="text" name="email" id="email" placeholder="email">
            <br>

            <textarea  class="form-control" name="message" id="message"  rows="7"></textarea>
    <br>
            <button class="btn btn-primary pull-right" type="submit">submit</button>
        </form>
        </div>

    </div>


<script  type="text/javascript" src="js/contact.js"></script>

<?php include("footer.php"); ?>