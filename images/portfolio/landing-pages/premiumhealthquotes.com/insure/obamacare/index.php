<?php
include('../../assets/php/env.php');
$default_phone = 8552824847;
include('../../../common-LP/php/get_params.php');
include('../../../common-LP/php/get_HO_url.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $siteName; ?> Landing - <?php echo $aff_ref; ?></title>
    <meta name="description" content="<?php echo $siteNameLowercase; ?> for the masses">
    <meta name="keywords" content="<?php echo $siteNameLowercase; ?>">
    <meta name="author" content="simple insurance leads">
    <link rel="icon" href="../../assets/imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/phi_index.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,400italic,700,900' rel='stylesheet'
          type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php
    include "../../../common-LP/php/get_phone.php";
    $phone_number = get_phone($offer_id, $aff_id, $aff_sub, $default_phone, $ver);
    include "../../../common-LP/php/geoip.php";
    $zip = getzip($_SERVER['REMOTE_ADDR']);
    if ($zip == "") {
        $zip = $default_zipcode;  // If cant have the ip then serve for default zip
    }; ?>
</head>
<body>
<?php
echo $indexGTM;
echo $indexHotJar;
echo get_HO_impression_pixel ($offer_id, $aff_id);
?>
<!-- Start Wrapper -->
<div class="main-container" id="page">
    <?php
    include('../../assets/php/phq_html_modules.php');
    echo $phq_index_header;
    ?>


    <!-- =========================
    HERO SECTION
============================== -->
    <section id="hero9" class="bg-img hero-leadbox content-align-md"
             style="background-image:url('../../assets/imgs/hero-v2.jpg');">
        <div class="overlay"></div>

        <div class="container">
            <div class="row y-middle">

                <div
                    class="hidden-lg hidden-md hidden-sm bs-callout bs-callout-primary text-center cta-smartphone-call-agent">
                    <h4 class="cta-call-agent-smartphone">Call for a Health Insurance Quote</h4>
                    <a href="tel:<?php echo $phone_number; ?>" class="btn btn-shadow btn-green"><span class="glyphicon glyphicon-phone"
                                                                                 aria-hidden="true"></span> <?php echo $phone_number; ?>
                    </a>
                </div>


                <div class="col-sm-11 col-md-12 text-white text-right">
                    <h1 class="text-right hidden-xs hidden-sm">Find Freedom with Affordable Health Insurance</h1>
                    <p class="text-right hero-subheader hidden-xs hidden-sm">Fast&nbsp;&nbsp;-&nbsp;&nbsp;Easy&nbsp;&nbsp;-&nbsp;&nbsp;No
                        Obligation</p>


                    <form action="form.php" method="post"
                          class="form-quote form-white bg-grey text-white free-quote-form" id="form1">
                        <!--target="_blank"-->

                        <h4 class="text-center free-quote">Get a Free Quote</h4>

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
                                    <button type="submit" id="submit" class="btn btn-shadow btn-red">Get My Free
                                        Quote <span
                                            class="glyphicon glyphicon-arrow-right" onclick=""
                                            aria-hidden="true"></span></button>

                                </div>
                            </div>
                        </div>

                        <p class="small text-center share-notice hidden">We don't share your personal info with anyone.
                            <br>Check
                            out our <a
                                href="#modal-privacy" class="f-w-700 inverse" data-toggle="modal">Privacy Policy</a> for
                            more information.</p>

                    </form>

                </div>
                <!-- /End  Form -->
            </div>
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
                <div class="col-md-12">
                    <h2 class="m-b-md">Obamacare</h2>
                    <p class="lead m-b-0 m-b-md">Americans are required to have health insurance or face possible penalties under the Affordable Care Act, or Obamacare, as many refer to it. And while not without controversy, there are important provisions under the law that have had a positive impact on changing health insurance in this country.<br><br>
                        Here are a few:<br><br>
                        <strong>Affordable Insurance for Millions of Previously Uninsured</strong>, helping countless individuals manage their health and protect their health and finances if and when unexpected illness or injury strikes.<br><br>
                        <strong>Preventative Care is Covered</strong> and plans are required to provide preventative and wellness screenings as a proactive approach to health management. Routine screenings for blood pressure, cancer, and diabetes are now covered, as are many more tests and services for women and children.<br><br>
                        <strong>No pre-existing conditions</strong> can prevent you from obtaining insurance, and insurance companies cannot deny procedures or demand repayment of expenses associated with treatment because of a pre-existing condition. Additionally, insurance companies are prevented from raising your insurance premium because you have or get an illness or condition. Nor can insurance companies cancel your insurance plan because you or your employer unknowingly made a mistake on health insurance enrollment forms, as was the case in years past.<br><br>
                        <strong>No annual or lifetime coverage limits</strong> means insurance companies can no longer limit the amount they will pay towards medical costs each year or over the lifetime of the insured person.  This was not always the case, and insurers often used caps to reduce coverage.<br><br>
                        <strong>Children can stay on their parent’s plan longer</strong>, up to age 26 now. Previously, older children could be forced off their parents’ plans, leaving them without health insurance coverage and possible exposed to health risks and the high costs of both routine and emergency healthcare. Today, many parents and their children are facing a better future, less stress and fear filled over concerns about their health.<br><br>
                        <strong>Federal subsidies to help or reduce health insurance costs</strong>, such as premiums, co-pays, and out-of-pocket expenses, for those that meet income requirements.</p>

                    <h2 class="m-b-sm">Health Insurance is too important to go without</h2>

                    <p class="lead m-b-0 m-b-md">Today, medical care is very expensive. Consider this: according the U.S. government, a broken leg can cost up to $7,500 to repair; the average cost of a 3-day hospital stay is around $30,000; and, comprehensive cancer care can cost tens of thousands of dollars, if not much, much more. Without insurance, you would be responsible for these expenses with your care. Unfortunately, expensive medical bills often lead people into deep personal debt or even bankruptcy — in fact, medical expenses are the number one cause of bankruptcy in the U.S.!<br><br>
                    Health insurance provides important financial protection should you have a serious accident or illness. Solid, quality health insurance helps limit your out-of-pocket expenses, helping you save a lot of money. And given the climbing cost of health care and prescription drugs these days, you really can’t afford to be without health insurance. No one knows when illness or injury will strike and being uninsured could seriously impact both your health and finances.<br><br>
                    While many people think of health insurance as something you can only use when you are sick, it is much, much more than that. Health insurance can help you maintain your health and prevent serious illnesses or conditions. By taking advantage of routine preventative and wellness screenings, you can avoid illness from occurring, or with early detection limit the severity. Insurance can provide you with routine care that helps you manage existing conditions better. So you see, having health insurance can help to improve the quality of your life.</p>

                    <h2 class="m-b-sm">Protecting your health and your wallet has never been easier or more affordable</h2>

                    <p class="lead m-b-0 m-b-md">Get the right care coverage for you and your family, with the features, benefits, and low rates you want.<br><br>
                    We will help you find a personalized health plan by working with you to determine your needs and then finding the plan that best fits your budget and meets your needs. We partner with the nation’s leading insurance carriers to offer health plans that provide exceptional coverage, protection and value at affordable prices. After all, you don’t want to sacrifice quality for cost or compromise on coverage.<br><br>
                    We make insurance easy, quick, and painless because we believe health insurance shouldn’t be complicated or intimidating.
                    </p>


                    <input type="submit" form="form1" onclick="aband_list()" id="submit"
                           value="Get Your Quotes" class="btn btn-shadow btn-red btn-form-page">

                </div>

                <!-- todo check if I should hide this image on more PHQ LPs -->
                <!--<div class="col-md-4 hidden-sm hidden-xs">
                    <img src="../../assets/imgs/family.jpg" class="img-responsive m-x-auto" alt="">
                </div>-->

            </div>
            <!-- /End Row -->
        </div>
        <!-- /End Container-->

    </section>

     <!-- =========================
           FEATURES SECTION
        ============================== -->
    <section id="features2-2" class="p-y-lg bg-edit bg-dark-2">

        <div class="container">
            <!-- Section Header -->
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="section-header text-center text-white wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                        <h2 class="steps-header">Free Quotes. Expert Advice. No Obligation</h2>
                        <p>Simply enter your zip code above to begin. Whether you are eligible for income based subsidies or not, interested in shopping on a state or federal exchange or not, we can help. And what's more, our service is 100% free to you.
<br><br>
                            Please be aware that neither PremiumHealthQuotes.com, nor the agents who contact you are representatives of the federal or state government.  The health quotes they offer you may include a combination of state and federal exchange plans along with private health plans.  Not every consumer is eligible for health insurance subsidies, and the agent you speak with will help you determine your eligibility.</p>
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
    <?php
    echo $phq_index_footer;
    ?>
</div>
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
