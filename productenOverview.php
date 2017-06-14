<?php
$page_title = "Product Overview";
$page_description = "Description of this page";
$pageHeader = "";
$headerDesc = "";
$customStylesheet = "css/productenOverview.css";
include("header.php");

?>

<div class="container">

    <?php
    if($_SESSION['loggedIn'] == 1 && $_SESSION['ADMIN'] == 1){
       echo( '<a href="addProd.php" class="btn btn-info" role="button">voeg producten toe</a>' );
    }
    ?>
    <ul class="nav nav-pills" id="catTarget">

    </ul>

    <div class="row" id="target">





    </div>
</div>

<form method="get" id="theForm" action="productenDetail.php">
    <input type="hidden" name="id" id="id" value="">

</form>

<script type="text/javascript" src="js/productenOverview.js"></script>
<?php include("footer.php"); ?>

