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


    <!--
    <script src="js/unsub.js"></script>


    <script>

        $(window).load(function(){

            $('#done').load(function(){
                $(location).attr('href', 'done.php?email=' + email);
            });
        }
    </script>-->


</head>


<body>
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
        <div class="alert alert-warning" role="alert">
            <p>
                <strong>Warning!</strong> You have requested to unsubscribe from our mailing list.</p>
        </div>

        <form action="unsub.php" method="post">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required value="<?php echo $email; ?>">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" required>Check me out
                </label>
            </div>
            <button type="submit" class="btn btn-success">Unsubscribe</button>
        </form>

        <br>

        <div class="button-holder">
            <a class="btn btn-info" href="javascript: close();"><b>Let me think about it</a>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>


</body>
</html>