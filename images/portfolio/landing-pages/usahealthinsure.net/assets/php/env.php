<?php

$domain = 'usahealthinsure.net';
$domainCap = 'UsaHealthInsure.net';
$siteName = 'USA Health Insure';
$siteNameLowercase = 'usa health insure';
$ver = 51;
$default_zipcode = "";

$default_params = array(
    'aff_ref' => '1003'
);


$default_phone = 8557423584;


$indexGTM = "
<!-- Google Tag Manager -->
<noscript>
    <iframe src='//www.googletagmanager.com/ns.html?id=GTM-5VR9WX'
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
    })(window, document, 'script', 'dataLayer', 'GTM-5VR9WX');
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
        s.src = '//create.lidstatic.com/campaign/5454e12f-f931-b6da-ceaa-10c97760b829.js?snippet_version=2';
        var LeadiDscript = document.getElementById('LeadiDscript');
        LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
    })();
    // -->
</script>
<noscript>
    <img
        src='//create.leadid.com/noscript.gif?lac=33a0d976-59b0-cc2f-6160-c04c4b7dca3f&lck=5454e12f-f931-b6da-ceaa-10c97760b829&snippet_version=2'/>
</noscript>
";


function MediaAlpha_Thankyou_Medicare($zip, $uid) {
    return '<div id="ad_unit_placeholder"></div>
    <script type="text/javascript">
        /* Simple Insurance Leads / Medicare - Thank You  */
        var MediaAlphaExchange = {
            "type": "ad_unit",
            "placement_id": "MYifcd9ddg_Efw70cHJAUh34ohjswQ",
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
            "placement_id": "jvtSW_Hx7ndD8hrAFtv1Cnv9EM9AyQ",
            "version": "17",
            "sub_1": "'.$uid.'",
            "data": {
                "zip": "'.$zip.'"
            }
        };
        MediaAlphaExchange__load("ad_unit_placeholder");
    </script>';
};

