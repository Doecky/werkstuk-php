<?php
$page_title = "Contact";
$page_description = "Description of this page";
$pageHeader = "Check Out";
$headerDesc = " Facturatie gegevens";


include("header.php")

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="robots" content="all,follow">
        <meta name="googlebot" content="index,follow,snippet,archive">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>


        <!-- Responsivity for older IE -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and apple touch icons-->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png" />
    </head>

    <body>


    <div id="all">
        <header>





            <div id="content">
                <div class="container">

                    <div class="row">

                        <div class="col-md-9 clearfix" id="checkout">

                            <div class="box">
                                <form method="post" action="checkOut2.php">



                                    <div class="content">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="salutation">Aanspreking</label>
                                                    <Select type="text" class="form-control" id="salutation" required>
                                                        <option value="Meneer">Meneer</option>
                                                        <option value="Mevrouw">Mevrouw</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="title">Titel</label>
                                                    <input type="text" class="form-control" id="title" required>

                                                </div>
                                            </div>

                                        </div>
                                        <!-- /.row -->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="firstname">Voornaam</label>
                                                    <input type="text" class="form-control" id="firstname" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="lastname">Achternaam</label>
                                                    <input type="text" class="form-control" id="lastname" required>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- /.row -->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="company">Firma</label>
                                                    <input type="text" class="form-control" id="company">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-sm-4">
                                                <div class="form-group">
                                                    <label for="street">Straat</label>
                                                    <input type="text" class="form-control" id="street" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-2">
                                                <div class="form-group">
                                                    <label for="streetnr">Nummer</label>
                                                    <input type="text" class="form-control" id="streetnr" required>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.row -->

                                        <div class="row">
                                            <div class="col-sm-6 col-md-2">
                                                <div class="form-group">
                                                    <label for="zip">Postcode</label>
                                                    <input type="text" class="form-control" id="zip">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="form-group">
                                                    <label for="city">Stad</label>
                                                    <input type="text" class="form-control" id="city" required>
                                                </div>
                                            </div>


                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="country">Land</label>
                                                    <select class="form-control" id="country" required>
                                                        <option value="germany">Deutschland</option>
                                                        <option value="austria">Österreich</option>
                                                        <option value="Belgium">België</option>
                                                        <option value="usa">USA</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="phone">Telefoon</label>
                                                    <input type="tel" class="form-control" id="phone" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="email">E-Mail</label>
                                                    <input type="email" class="form-control" id="email" required>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- /.row -->
                                    </div>

                                    <div class="box-footer">
                                        <div class="pull-left">
                                            <a href="winkelwagen.php" class="btn btn-default"><i class="fa fa-chevron-left"></i>Terug</a>
                                        </div>
                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-template-main">Verder<i class="fa fa-chevron-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.box -->


                        </div>
                        <!-- /.col-md-9 -->



                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container -->
            </div>
            <!-- /#content -->






    </div>





    </body>

    </html>


<?php include("footer.php"); ?>