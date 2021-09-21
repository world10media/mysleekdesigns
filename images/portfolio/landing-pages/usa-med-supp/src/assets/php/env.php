<?php

$domain = 'usamedsupp.org';
$domainCap = 'USAMedSupp.org';
$siteName = 'USA Med Supp';
$siteNameLowercase = 'usa med supp';
$ver = 54;
$default_zipcode = "";


$default_params = array(
    'aff_ref' => '100'
);


$default_phone = 8446058375;


$indexGTM = "
<!-- Google Tag Manager -->
<noscript>
    <iframe src='//www.googletagmanager.com/ns.html?id=GTM-WWXF4K'
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
    })(window, document, 'script', 'dataLayer', 'GTM-WWXF4K');
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
        s.src = '//create.lidstatic.com/campaign/9235ba44-47f9-109e-5071-fc6fec4df151.js?snippet_version=2';
        var LeadiDscript = document.getElementById('LeadiDscript');
        LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
    })();
    // -->
</script>
<noscript>
    <img
        src='//create.leadid.com/noscript.gif?lac=33a0d976-59b0-cc2f-6160-c04c4b7dca3f&lck=9235ba44-47f9-109e-5071-fc6fec4df151&snippet_version=2' />
</noscript>
";


function MediaAlpha_Thankyou_Medicare($zip, $uid)
{
    if (true) {
        return '<div id="ad_unit_placeholder"></div>
    <script type="text/javascript">
        /* Simple Insurance Leads / USA Med Supp Medicare - Thank you  */
        var MediaAlphaExchange = {
            "type": "ad_unit",
            "placement_id": "iGqoL80RC_hbGNYmAuraWVKlDeKdFQ",
            "version": "17",
            "sub_1": "' . $uid . '",
            "data": {
                "zip": "' . $zip . '"
            }
        };
        MediaAlphaExchange__load("ad_unit_placeholder");
    </script>';
    } else {
        return '<div id="ad_unit_placeholder"></div>
    <script type="text/javascript">
        /* Simple Insurance Leads / USA Med Supp Medicare - Thank you  */
        var MediaAlphaExchange = {
            "type": "ad_unit",
            "placement_id": "iGqoL80RC_hbGNYmAuraWVKlDeKdFQ",
            "version": "17",
            "sub_1": "' . $uid . '",
            "data": {
                "zip": "' . $zip . '"
            }
        };
        MediaAlphaExchange__load("ad_unit_placeholder");
    </script>';
    }
}


function MediaAlpha_Thankyou_Health($zip, $uid)
{
    if (true) {
        return '<div id="ad_unit_placeholder"></div>
    <script type="text/javascript">
        /* Simple Insurance Leads / USA Med Supp Health  - Thank you  */
        var MediaAlphaExchange = {
            "type": "ad_unit",
            "placement_id": "4B7daFCCnS4xdR8nRdcr1KNG3xaTZg",
            "version": "17",
            "sub_1": "' . $uid . '",
            "data": {
                "zip": "' . $zip . '"
            }
        };
        MediaAlphaExchange__load("ad_unit_placeholder");
    </script>';
    } else {
        return '<div id="ad_unit_placeholder"></div>
    <script type="text/javascript">
        /* Simple Insurance Leads / USA Med Supp Health  - Thank you  */
        var MediaAlphaExchange = {
            "type": "ad_unit",
            "placement_id": "4B7daFCCnS4xdR8nRdcr1KNG3xaTZg",
            "version": "17",
            "sub_1": "' . $uid . '",
            "data": {
                "zip": "' . $zip . '"
            }
        };
        MediaAlphaExchange__load("ad_unit_placeholder");
    </script>';
    }
}