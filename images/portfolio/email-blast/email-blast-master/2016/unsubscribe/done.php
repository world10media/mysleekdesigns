<?php
/**
 * Created by PhpStorm.
 * User: hm909
 * Date: 11/3/15
 * Time: 13:30
 */


if (isset($_POST["email"])) {
    $email = $_POST["email"];
} elseif (isset($_GET["email"])) {
    $email = $_GET["email"];
}


?>


<!DOCTYPE html>
<html lang="en">
<body>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Unsubscribe from HBCQuotes.com</title>
    <link rel="icon" href="imgs/favicon.ico">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<!-- start Navbar -->

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="col-md-6">
                <div class="navbar-header">
                    <img src="imgs/logo-trans.png">

                </div>
            </div>


        </div>
    </nav>
    <!-- end Navbar -->


<div class="container">
    <div class="col-md-6">

        <h4>You have been removed from our mailing list.</h4>
        <br>
        <h3><?php echo $email; ?></h3>

        <br>

<!--        <div class="button-holder">
            <a class="btn btn-primary" href="javascript: close();"><b>Close Window</a>
        </div>-->

    </div>


</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>




</body>


</html>