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
    <title>Unsubscribe from AmericanHealthInsure.com</title>
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
        <div class="col-md-6 col-md-offset-3">
            <div class="navbar-header">
                <img src="imgs/logo-trans.png">
            </div>
        </div>
    </div>
</nav>
<!-- end Navbar -->


<div class="container text-center">
   <div class="row">
    <div class="col-md-12">
       
        <div class="alert" role="alert">
           <p><strong>Warning!</strong> You have requested to unsubscribe from our mailing list.</p>
        </div>

        <form action="unsub.php" method="post">
            <div class="form-inline">
                <label for="email" style="margin-right:10px;">Email address:</label>
                <input style="width:180px;" type="email" class="form-control" id="email" name="email" placeholder="Email" required value="<?php echo $email; ?>">
            			<button type="submit" class="btn btn-success">Unsubscribe</button>
           
            </div>
        </form>
      </div>

    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>


</body>
</html>