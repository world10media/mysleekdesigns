<?php

$domain = 'medigapquote.org';
$domainCap = 'MediGapQuote.org';
$siteName = 'Medi Gap Quote';
$siteNameLowercase = 'medi gap quote';
$ver = 50;
$default_zipcode = "";


// TODO  check with ann the default number for Medigap quotes
$default_params = array(
    'aff_ref' => '1001'
);


// TODO  check with ann the default number for Medigap quotes
$default_phone = 8552818493;


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


$formGTM = $indexGTM;


$formHotJar = "";


$thankyouGTM = $indexGTM;


$thankyouHotJar = "";


$impressionPixelHO = '<img src="http://hbcinsure.go2cloud.org/aff_i?offer_id='
    . $offer_id . '&aff_id=' . $aff_id . '" width="1" height="1" style="display: none;" />';


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
    if ($_GET['src'] == 'health_phq_email') {
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
    if ($_GET['src'] == 'health_phq_email') {
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


$Forensiq_script = '<script
    src="//c.securepaths.com/js/implement.js?org=iw2gjLz9IveY5JlBtsgl&s=' . $form_token . '&p=' .
    $aff_id . '&a=' . $aff_sub . '&cmp=' . $offer_id . '&rt=action&sl=1&stId=' . $trans_id . '"></script>
<noscript>
    <img
        src="https://www.securepaths.com/pixel.cgi?org=iw2gjLz9IveY5JlBtsgl&s=' . $form_token . '&p=' .
    $aff_id . '&a=' . $aff_sub . '&cmp=' . $offer_id . '&rt=action&sl=1&stId=' . $trans_id . '"
        width="1" height="1" border="0"/>
</noscript>';
