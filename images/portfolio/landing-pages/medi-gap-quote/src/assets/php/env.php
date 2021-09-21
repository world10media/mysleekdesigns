<?php

$domain = 'medigapquote.org';
$domainCap = 'MediGapQuote.org';
$siteName = 'Medi Gap Quote';
$siteNameLowercase = 'medi gap quote';
$ver = 53;
$default_zipcode = "";


$default_params = array(
    'aff_ref' => '200'
);


$default_phone = 8448852131;


$indexGTM = "
<!-- Google Tag Manager -->
<noscript>
    <iframe src='//www.googletagmanager.com/ns.html?id=GTM-K55HT4'
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
    })(window, document, 'script', 'dataLayer', 'GTM-K55HT4');
</script>
<!-- End Google Tag Manager -->
";


$indexHotJar = '';


$QuoteLab_pixel = '
<iframe src="//www.quotelab.com/p/Ev3kQO5iRWC3H7UNBByDjGYNF_rJng?u=1" width="1" height="1" style="display: none" frameborder="0"></iframe>
';


$formGTM = $indexGTM;


$formHotJar = "";


$thankyouGTM = $indexGTM;


$thankyouHotJar = "";


$thankyou_Google_Adwords = '
<!-- Google Code for Lead Submit Conversion Page -->
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 877080833;
    var google_conversion_language = "en";
    var google_conversion_format = "3";
    var google_conversion_color = "ffffff";
    var google_conversion_label = "WYAvCO_phGoQgeKcogM";
    var google_remarketing_only = false;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt=""
             src="//www.googleadservices.com/pagead/conversion/877080833/?label=WYAvCO_phGoQgeKcogM&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>
';


$universal_lead_id_script = "
<!--  UNIVERSAL LEAD ID   -->
<script id='LeadiDscript' type='text/javascript'>
    // <!--
    (function () {
        var s = document.createElement('script');
        s.id = 'LeadiDscript_campaign';
        s.type = 'text/javascript';
        s.async = true;
        s.src = '//create.lidstatic.com/campaign/5347dcda-6e24-6b01-280c-dddbfa0c493d.js?snippet_version=2';
        var LeadiDscript = document.getElementById('LeadiDscript');
        LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
    })();
    // -->
</script>
<noscript>
    <img
        src='//create.leadid.com/noscript.gif?lac=33a0d976-59b0-cc2f-6160-c04c4b7dca3f&lck=5347dcda-6e24-6b01-280c-dddbfa0c493d&snippet_version=2'/>
</noscript>
";


function MediaAlpha_Thankyou_Medicare($zip, $uid)
{
    if ($_GET['src'] == 'medicare_mgq_email' || $_GET['src'] == 'medicare_mgq_display') {
        return '<div id="ad_unit_placeholder"></div>
    <script type="text/javascript">
        /* Simple Insurance Leads / Medigapquotes Medicare A - Thank you */
        var MediaAlphaExchange = {
            "type": "ad_unit",
            "placement_id": "_6cOqgNm6jOzNQVZjd7Bu9KVSRq0dA",
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
        /* Simple Insurance Leads / Medigapquotes  Medicare - Thank you */
        var MediaAlphaExchange = {
            "type": "ad_unit",
            "placement_id": "GJlo4oyehrvT5y2ZP6bHRAGhro04mg",
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
    if ($_GET['src'] == 'medicare_mgq_email' || $_GET['src'] == 'medicare_mgq_display') {
        return '<div id="ad_unit_placeholder"></div>
    <script type="text/javascript">
        /* Simple Insurance Leads / Medigapquotes  Health A - Thank you */
        var MediaAlphaExchange = {
            "type": "ad_unit",
            "placement_id": "a5kvq14xAjJp0Hptefi55omGq42BJw",
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
        /* Simple Insurance Leads / Medigapquotes  Health - Thank you */
        var MediaAlphaExchange = {
            "type": "ad_unit",
            "placement_id": "jW2VfgOHjsn99ErnlDqjUcNRk0MQaA",
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