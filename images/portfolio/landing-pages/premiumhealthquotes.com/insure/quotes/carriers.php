<?php
include('../../assets/php/env-phqv2.php');
include('../../../common-LP/php/get_params.php');
include('../../../common-LP/php/get_HO_url.php');
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PremiumHealthQuotes - Affordable Health and Medicare Insurance - <?php echo $aff_ref; ?></title>

    <meta name="description" content="use premiumhealthquotes.com to find top health insurance and obamacare plans">
    <meta name="keywords" content="health insurance, obamacare">
    <meta name="author" content="premiumhealthquotes.com">

    <link rel='shortcut icon' href='../../assets/img/favicon.ico' type='image/x-icon'/>

    <link rel="stylesheet" href="../../assets/css/app.css">
    <!--<link rel="stylesheet" href="../../assets/css/foundation-icons.css"/>-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

</head>
    <body>
        
        <div class="carriers-partners row">
            <div class="small-12 columns">
                <h2>Carriers &amp; Partners</h2>
                <hr>
                <p class="carrier-includes">Carriers and partner companies include, but are not limited to, the following:</p>
                <ul class="">
                    <?php
                        include ('../../../common-LP/php/get_carriers_list.php');
                        ?>
                </ul>
            </div>
        </div>
    </body>
</html>