<?php
$page_title = "Winkelwagen";
$page_description = "Winkelwagen";
$pageHeader = "Winkelwagen";
$headerDesc = "";
$customStylesheet = "css/winkelwagen.css";
include("header.php");
?>
<div class="container" >

    <table class="table table-hover">
        <thead>
            <tr>
                <th>product</th>
                <th></th>
                <th>price</th>
                <th>amount </th>
                <th> </th>
            </tr>
        </thead>
        <tbody id="target">

        </tbody>
    </table>
    <div class="row">
        <a href="checkOut.php"> <button class="btn-default btn pull-right"> Bestel</button> </a>
    </div>
</div>





<script type="text/javascript" src="js/winkelwagen.js"></script>
<?php include("footer.php"); ?>