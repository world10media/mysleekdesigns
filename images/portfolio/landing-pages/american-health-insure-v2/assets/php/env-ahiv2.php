<?php

$domain = 'americanhealthinsure.com';
$domainCap = 'AmericanHealthInsure.com';
$siteName = 'American Health Insure';
$siteNameLowercase = 'american health insure';
$ver = 50;
$default_zipcode = "";

$default_params = array(
    'aff_ref' => '1001'
);


$default_phone = 8552818493;


$indexGTM = "
<!-- Google Tag Manager -->
<noscript>
    <iframe src='//www.googletagmanager.com/ns.html?id=GTM-MQ2G48'
            height='0' width='0' style='display: none; visibility: hidden'></iframe>
</noscript>
<script>
    (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-MQ2G48');
</script>
<!-- End Google Tag Manager -->
";


$indexHotJar = '';


$formGTM = $indexGTM;


$formHotJar = "";


$thankyouGTM = $indexGTM;


$thankyouHotJar = "";


$universal_lead_id_script = "
<!--  UNIVERSAL LEAD ID   -->
<script id='LeadiDscript' type='text/javascript'>
    // <!--
    (function () {
        var s = document.createElement('script');
        s.id = 'LeadiDscript_campaign';
        s.type = 'text/javascript';
        s.async = true;
        s.src = '//create.lidstatic.com/campaign/3c5ff132-c09f-1ab0-4475-08e1bb1e727a.js?snippet_version=2';
        var LeadiDscript = document.getElementById('LeadiDscript');
        LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
    })();
    // -->
</script>
<noscript>
    <img
        src='//create.leadid.com/noscript.gif?lac=33a0d976-59b0-cc2f-6160-c04c4b7dca3f&lck=3c5ff132-c09f-1ab0-4475-08e1bb1e727a&snippet_version=2'/>
</noscript>
";


function MediaAlpha_Thankyou_Medicare($zip, $uid) {
    return '<div id="ad_unit_placeholder"></div>
    <script type="text/javascript">
        /* Simple Insurance Leads / Medicare - Thank You  */
        var MediaAlphaExchange = {
            "type": "ad_unit",
            "placement_id": "8koKgQoF569PUH7Bk3x6_9WLOY2shA",
            "version": "17",
            "sub_1": "'.$uid.'",
            "data": {
                "zip": "'.$zip.'"
            }
        };
        MediaAlphaExchange__load("ad_unit_placeholder");
    </script>';
};


function MediaAlpha_Thankyou_Health($zip, $uid) {
    return '<div id="ad_unit_placeholder"></div>
    <script type="text/javascript">
        /* Simple Insurance Leads / American Health Insure - Thank You */
        var MediaAlphaExchange = {
            "type": "ad_unit",
            "placement_id": "zURs5u74hUaunDE6M2F1MtJhYCuaLw",
            "version": "17",
            "sub_1": "'.$uid.'",
            "data": {
                "zip": "'.$zip.'"
            }
        };
        MediaAlphaExchange__load("ad_unit_placeholder");
    </script>';
};



function show_Listings($zip, $uid, $inty, $state) {


    $MediaAlpha_Thankyou_Health = '
<section style="margin-top:1em; max-width: 920px; margin: auto">
    <div id="ad_unit_placeholder"></div>
    <script type="text/javascript">
        /* Simple Insurance Leads / American Health Insure - Thank You */
        var MediaAlphaExchange = {
            "type": "ad_unit",
            "placement_id": "zURs5u74hUaunDE6M2F1MtJhYCuaLw",
            "version": "17",
            "sub_1": "'.$uid.'",
            "data": {
                "zip": "'.$zip.'"
            }
        };
        MediaAlphaExchange__load("ad_unit_placeholder");
    </script>
</section>';


    $MediaAlpha_Thankyou_Medicare = '
<section style="margin-top:1em; max-width: 920px; margin: auto">
    <div id="ad_unit_placeholder"></div>
    <script type="text/javascript">
        /* Simple Insurance Leads / Medicare - Thank You  */
        var MediaAlphaExchange = {
            "type": "ad_unit",
            "placement_id": "8koKgQoF569PUH7Bk3x6_9WLOY2shA",
            "version": "17",
            "sub_1": "'.$uid.'",
            "data": {
                "zip": "'.$zip.'"
            }
        };
        MediaAlphaExchange__load("ad_unit_placeholder");
    </script>
</section>';


    $SureHits_listings = '
    <script type="text/javascript">
    function getQueryStringVariable(variable) {
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i=0;i<vars.length;i++) {
            var pair = vars[i].split("=");
            if (pair[0] == variable) {
                return pair[1];}}}

    ni_ad_client = "637068";
    ni_res_id = 2;
    ni_alt_url = "https://www.shmktpl.com/search.asp";
    //ni_zc = getQueryStringVariable("33026");
    ni_zc = "'.$zip.'";
    //ni_str_state_code = getQueryStringVariable("FL");
    ni_str_state_code = "'.$state.'";
    ni_var1 = "";
    ni_display_width = "";
    ni_display_height = "1000";

    ni_mobile = 1;

    ni_color_border = "";
    ni_color_bg = "";
    ni_color_link = "";
    ni_color_url = "";
    ni_color_text = "";
</script>

<script type="text/javascript" id="shmktpl_retrieve" src="http://www.nextinsure.com/ListingDisplay/Retrieve/?cat=3&src=637068"></script>
    ';




    function get_listings_counter(){

        $dbservername = "localhost";
        $dbusername = "root";
        $dbpassword = "root";
        $dbname = "rxonline_intcms";

        // Create connection
        $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname, 3306);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: sd" . $conn->connect_error);
        }

        $sql = "SELECT * FROM counter WHERE description = 'listings'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $counter = $row["counter"];
        $new_counter = $counter + 1;

        $sql2 = "UPDATE counter SET counter='".$new_counter."' WHERE description = 'listings'";
        $conn->query($sql2);
        $conn->close();

        return $counter;

    };



    if ($inty == 'medicare') {
        $ListingToShow = $MediaAlpha_Thankyou_Medicare;
    } else {

        //Temp for dev
        //$counter = get_listings_counter();
        $counter = 1;


        if ($counter % 5) {
            $ListingToShow = $MediaAlpha_Thankyou_Health;
        } else {
            $ListingToShow = $SureHits_listings;
        }
    }


    //temp for Dev
    $ListingToShow = $SureHits_listings;

    return $ListingToShow;
}


