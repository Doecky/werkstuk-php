<?php

if(!$_SESSION['loggedIn'] == 1 && !$_SESSION['ADMIN'] == 1) {
    header('location: enra.php');

}


?>
<div class="container">

    <form class="form-horizontal" method="post" action="php/addProdAdmin.php" enctype="multipart/form-data">
    <div class="form-group">
        <label class="control-label col-sm-2" for="prodName">Product Name:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="prodName" id="prodName" placeholder="product X">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="descr">Description:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="descr" id="descr" placeholder="nice product">
        </div>
    </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="cat">category:</label>
            <div class="col-sm-10">
                <input list="categories" name="cat">
                <datalist id="categories">

                </datalist>

            </div>
        </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="fileToUpload">Photo:</label>
        <div class="col-sm-offset-2 col-sm-10">
            <input type="file" name="fileToUpload" id="fileToUpload" size="25">
        </div>
    </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="price">Price:</label>
            <div class="col-sm-offset-2 col-sm-10">
                <input type="text" class="form-control" name="price" id="price" placeholder="5">
            </div>
        </div>
    <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox" name="uitgelicht" id="uitgelicht"  checked> uitgelicht</label>
                </div>
            </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>
    </form>





</div>

<script type="text/javascript" src="js/addProdAdmin.js"></script>

<?php include("footer.php"); ?>