<?php
include('../../assets/php/env.php');
include('../../../common-LP/php/get_params.php');
include('../../../common-LP/php/get_HO_url.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- TITLE OF SITE -->
    <title><?php echo $siteName; ?> Landing - <?php echo $aff_ref; ?></title>

    <meta name="description" content="<?php echo $siteNameLowercase; ?> for the masses">
    <meta name="keywords" content="<?php echo $siteNameLowercase; ?>">
    <meta name="author" content="simple insurance leads">

    <!-- FAVICON  -->
    <link rel="icon" href="../../assets/imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/uhi-index.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,400italic,700,900' rel='stylesheet'
          type='text/css'>

<!--
    <link rel="stylesheet" href="../../assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/responsive.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/custom.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,400italic,700,900' rel='stylesheet'
          type='text/css'>

-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php
    include "../../../common-LP/php/get_phone.php";

    $phone_number = get_phone($offer_id, $aff_id, $aff_sub, $default_phone, $ver);

    // GET ZIP from IP using function in geoip.php
    include "../../../common-LP/php/geoip.php";
    $zip = getzip($_SERVER['REMOTE_ADDR']);
    if ($zip == "") {
        $zip = $default_zipcode;  // If cant have the ip then serve for default zip
    };
    ?>


</head>

<body>
<?php
echo $indexGTM;
echo $indexHotJar;
echo get_HO_impression_pixel ($offer_id, $aff_id);
?>
<!-- Start Wrapper -->
<div class="main-container" id="page">

    <!-- Start Navigation -->
    <header id="nav1-1">
        <nav class="navbar" id="main-navbar">
            <div class="container">

                <div class="navbar-header col-md-4 col-sm-3 col-xs-4 pull-left">
                    <a class="navbar-brand smooth-scroll"><img src="../../assets/imgs/logo.png" class="logo"
                                                               alt="logo"></a>
                </div>

                <div class="col-md-8 col-sm-9 col-xs-8 navbar-right pull-right speak-agent">

                    <div class="pull-right hidden-xs">
                        <h5 class="agent">Speak With a Licensed Agent:</h5><span
                            class="glyphicon glyphicon-phone hidden-xs" aria-hidden="true"></span>
                        <a class="phone"
                           href="tel:+<?php echo $phone_number; ?>"><strong><?php echo $phone_number; ?></strong></a>
                    </div>

                    <span class="pull-right hidden-lg hidden-md hidden-sm">
                        <p class="agent-standing-by hidden-lg hidden-md hidden-sm visible-xs-block">Agents are
                            standing by</p>
                        <span
                            class="glyphicon glyphicon-phone hidden-lg hidden-md hidden-sm visible-xs-inline-block"
                            aria-hidden="true"></span>
                        <a class="phone visible-xs-inline-block"
                           href="tel:+<?php echo $phone_number; ?>"><strong><?php echo $phone_number; ?></strong></a>
                    </span>
                </div>
            </div>
            <!-- /End Container -->
        </nav>
        <!-- /End Navbar -->
    </header>

    <!-- =========================
    HERO SECTION
============================== -->
    <section id="hero9" class="bg-img hero-leadbox content-align-md"
             style="background-image:url('../../assets/imgs/banner_uhi.jpg');">
        <div class="overlay"></div>

        <div class="container">

            <div
                class="hidden-lg hidden-md hidden-sm bs-callout bs-callout-primary text-center cta-smartphone-call-agent">
                <h4 class="cta-call-agent-smartphone">Call for a Health Insurance Quote</h4>
                <a href="tel:<?php echo $phone_number; ?>" class="btn btn-shadow btn-blue"><span class="glyphicon glyphicon-phone"
                                                                            aria-hidden="true"></span><?php echo $phone_number; ?>
                </a>
            </div>

            <div class="row y-middle">
                <!-- Intro Text -->
                <div class="col-lg-12 col-sm-8 col-sm-7 text-white hidden-sm hidden-xs">
                    <h1>Health Insurance Made Easy.</h1>
                    <p class="quotesub text-center">Fast — Easy — No Obligation </p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">


                <form action="form.php" method="post"
                      class="form-quote form-white bg-grey text-white free-quote-form" id="form1">
                    <!--target="_blank"-->


                    <h4 class="text-center free-quote">GET A FREE QUOTE</h4>

                    <p class="success cb text-center"><i class="fa fa-check"></i> <strong>You have successfully
                            subscribed.</strong></p>

                    <p class="failed cb text-center"><i class="fa fa-exclamation-circle"></i><strong> Something went
                            wrong!</strong></p>

                    <?php include "../../../common-LP/php/hidden_fields_index.php"; ?>

                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <h5 class="insurance-type">Insurance Type:</h5>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12 health-checkboxes">
                            <label class="label-1">
                                <input type="radio" id="health_type" value="health"
                                       checked name="insurance_type">Health Insurance
                            </label>
                            <label class="label-1">
                                <input type="radio" id="medicare_type" value="medicare"
                                       name="insurance_type">Medicare Insurance
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-inline enter-zip">
                                <label class="zip-label" for="zip">Enter Your Zip Code:</label>
                                <input type="tel" class="form-control" name="zip" id="zip"
                                       value="<?php echo $zip; ?>" placeholder=""
                                       required>  <!--  input type tel so it shows numpad on mobile -->
                            </div>
                            <div class="form-group enter-zip">
                                <button type="submit" id="submit" class="btn btn-shadow btn-green">Get My Free
                                    Quote <span
                                        class="glyphicon glyphicon-arrow-right" onclick="" aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <p class="small text-center share-notice hidden">We don't share your personal info with anyone. <br>Check
                        out our <a
                            href="#modal-privacy" class="f-w-700 inverse" data-toggle="modal">Privacy Policy</a> for
                        more information.</p>
                </form>

            </div>
            <!-- /End  Form -->
            <!-- /End Row -->
        </div>
        <!-- /End Container -->
    </section>


    <!-- =========================
     PARTNERS
============================== -->
    <div id="partners" class="container-fluid">
        <div class="row">

            <div class="col-md-12 text-center">
                <img src="../../assets/imgs/logos/logos-all.jpg" class="img-responsive m-x-auto" alt="">
            </div>
        </div>
        <!-- /End Row -->
    </div>
    <!-- /End Container -->

    <!-- =========================
   CONTENT SECTION
============================== -->
    <section id="content5-1" class="p-y-lg content-block content-align-md bg-edit hidden-xs"
             style="padding-bottom:0 !important;">
        <div class="container">
            <div class="row y-middle c2">
                <div class="col-lg-6 col-md-6 hidden-sm">
                    <h2 class="m-b-md">Health Insurance For Smart People.</h2>
                    <p class="lead m-b-0 m-b-md"> USA Health Insure makes quality insurance easy and affordable. Rock
                        solid, dependable coverage without the hassle, without breaking the bank. Which is exactly what
                        smart people want.
                        <br><br> USA Health Insure has partnered with the nation’s leading insurance carriers to offer
                        plans that provide exceptional coverage, protection, and value at affordable prices. You’ll get
                        a personalized plan that works for you, no matter where in life you are, no matter what your
                        situation may be.</p>

                </div>

                <!-- advantages sidebar -->
                <div class="col-lg-6 hidden-sm">
                    <h2 class="advantage">Advantages of USA Health Insure</h2>
                    <ul>
                        <li><img src="../../assets/imgs/checkmark.png" height="25px" alt="Fast Free Quotes"> Fast Free
                            Quotes
                        </li>
                        <li><img src="../../assets/imgs/checkmark.png" height="25px" alt="Save Time and Tons of Money">
                            Save Time
                            and Tons of Money
                        </li>
                        <li><img src="../../assets/imgs/checkmark.png" height="25px"
                                 alt="Plans from the Nation's Leading Carriers"> Plans from the Nation's Leading
                            Carriers
                        </li>
                        <li><img src="../../assets/imgs/checkmark.png" height="25px" alt="Low Affordable Premiums"> Low
                            Affordable
                            Premiums
                        </li>
                        <li><img src="../../assets/imgs/checkmark.png" height="25px" alt="Prescription Drug Coverage">
                            Prescription
                            Drug Coverage
                        </li>
                    </ul>
                    <input type="submit" form="form1" onclick="aband_list()" id="submit"
                           value="Get Your Quotes" class="btn btn-shadow btn-green btn-form-page">
                </div>
            </div>
        </div>
</div>
<!-- advantages sidebar end-->

<!-- =========================
       FEATURES SECTION
    ============================== -->
<section id="features2-2" class="p-y-lg bg-edit bg-dark-2">

    <div class="container">
        <!-- Section Header -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="section-header text-center text-white wow fadeIn animated"
                     style="visibility: visible; animation-name: fadeIn;">
                    <h2 class="steps-header">Free Quotes. Expert Advice. No Obligation</h2>
                    <p>Simply enter your zip code above to begin. Whether you are eligible for income based subsidies or
                        not, interested in shopping on a state or federal exchange or not, we can help. And what's more,
                        our service is 100% free to you.
                        <br><br>
                        Please be aware that neither USAHealthInsure.net, nor the agents who contact you are
                        representatives of the federal or state government. The health quotes they offer you may include
                        a combination of state and federal exchange plans along with private health plans. Not every
                        consumer is eligible for health insurance subsidies, and the agent you speak with will help you
                        determine your eligibility.</p>
                </div>
            </div>
        </div>

        <div class="row text-center text-white features-block c3">
            <!-- Feature Item -->
            <div class="col-sm-4 col-xs-12">
                <h3 class="steps-header-circle">Step 1</h3>
                <h4 class="steps-subheader">Enter your <br>Zip Code</h4>
            </div>
            <!-- Feature Item -->
            <div class="col-sm-4 col-xs-12">
                <h3 class="steps-header-circle">Step 2</h3>
                <h4 class="steps-subheader">Complete our <br>short form</h4>
            </div>
            <!-- Feature Item -->
            <div class="col-sm-4 col-xs-12">
                <h3 class="steps-header-circle">Step 3</h3>
                <h4 class="steps-subheader">Agent will contact you with a free quote</h4>
            </div>
        </div>
    </div><!-- /End Container -->

</section>

<!-- =========================
 FOOTER
============================== -->
<footer id="footer1-2" class="p-y-md footer f1 bg-edit bg-dark">
    <div class="container">
        <div class="row">
            <!-- Copy -->
            <div class="col-md-8 col-sm-6 col-xs-12 text-white">
                <p>Copyright &copy; USA Health Insure, All rights reserved
                    <a href="#" class="f-w-900 inverse"></a>
                </p>
            </div>
            <!-- Privacy Policy and Terms of Use -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <p class="text-white privacy-info">
                    <a href="#modal-privacy" data-toggle="modal" style="color:#ffffff;">Privacy
                        Policy</a> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                    <a href="#modal-terms" data-toggle="modal" style="color:#ffffff;">Terms of
                        Use</a>
                </p>
            </div>
        </div>
        <!-- /End Row -->
        <!-- Modal HTML -->
        <div id="modal-privacy" class="modal fade bs-example-modal-lg">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Privacy Policy</h4>
                    </div>
                    <div class="modal-body">
                        <?php include '../../../common-LP/php/privacy-policy.php';
                        echo $privacy_policy; ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-close-modal" data-dismiss="modal">Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-terms" class="modal fade bs-example-modal-lg">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Terms of Use</h4>
                    </div>
                    <div class="modal-body">
                        <?php include '../../../common-LP/php/terms-of-use.php';
                        echo $terms_of_use; ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-close-modal" data-dismiss="modal">Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /End Container -->
</footer>
<!-- /End Main Container -->

<script>
    <?php
    include '../../../common-LP/php/getHttpHost.php';
    ?>
</script>
<script src="../../assets/js/ahi.min.js"></script>

<?php
echo $universal_lead_id_script;
?>

</body>

</html>
