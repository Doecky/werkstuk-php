<?php
$page_title = "Contact";
$page_description = "Description of this page";
$pageHeader = "Check Out";
$headerDesc = " Betaal Methode";
$customStylesheet = "";

include("header.php")

?>

            <div id="content">
                <div class="container">
                    <div class="form-group col-md-4">

                        <form action="checkOut4.php>
                            <div class="row">
                            <label for="paymentSelect"> betaalmethode:</label>
                            <select id="paymentSelect" class="form-control pull-left ">
                            </select>
                            </div>
                            <div class="row">
                            <label><input type="checkbox" value=""> Ik accepteer de <a href="http://doecky.moe">algemene verkoopsvoorwaarden</a> </label>
                                <button type="submit"> Verder </button>
                        </form>
                    </div>


                </div>
                <!-- /.container -->
            </div>
            <!-- /#content -->






    </div>

<script src="js/checkOut3.js" type="text/javascript"></script>



    </body>




<?php include("footer.php"); ?>