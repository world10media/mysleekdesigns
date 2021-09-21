<?php

$domain = 'premiumhealthquotes.com';
$domainCap = 'PremiumHealthQuotes.com';
$siteName = 'Premium Health Quotes';
$siteNameLowercase = 'premium health quotes';
$ver = 52;
$default_zipcode = "";
$src = isset($_GET['src']) ? $_GET['src'] : '';

$default_params = array(
    'aff_ref' => '1002'
);


$default_phone = 8552818493;


$indexGTM = "
<!-- Google Tag Manager -->
<noscript>
    <iframe src='//www.googletagmanager.com/ns.html?id=GTM-T25XFH'
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
    })(window, document, 'script', 'dataLayer', 'GTM-T25XFH');
</script>
<!-- End Google Tag Manager -->
";


$indexHotJar = '';


$index_Facebook = "
<!-- Facebook Pixel Code -->
<script>
    !function (f, b, e, v, n, t, s) {
        if (f.fbq)return;
        n = f.fbq = function () {
            n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq)f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window,
            document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');

    fbq('init', '1646094169043589');
    fbq('track', 'PageView');</script>
<noscript><img height='1' width='1' style='display:none'
               src='https://www.facebook.com/tr?id=1646094169043589&ev=PageView&noscript=1'
/></noscript>
<!-- End Facebook Pixel Code -->
";


$formGTM = $indexGTM;


$formHotJar = "";


$thankyouGTM = $indexGTM;


$thankyouHotJar = "";


$thankyouGoogle_LeadSubmit = '
<!-- Google Code for Lead Submit Conversion Page -->
<script type="text/javascript"> /* <![CDATA[ */
    var google_conversion_id = 882450788;
    var google_conversion_language = "en";
    var google_conversion_format = "3";
    var google_conversion_color = "ffffff";
    var google_conversion_label = "RN4ZCKHwtmYQ5MLkpAM";
    var google_remarketing_only = false;
    /* ]]> */ </script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
    <div style="display:inline;"><img height="1" width="1" style="border-style:none; display: none;" alt=""
                                      src="//www.googleadservices.com/pagead/conversion/882450788/?label=RN4ZCKHwtmYQ5MLkpAM&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>
';


$preloader = '
<div id="preloader" style="position: fixed; left: 0; top: 0; z-index: -1; width: 100%; height: 100%;
            overflow: visible; opacity: 0.95; background: rgba(255,255,255,0.2)' . " url('../../assets/imgs/pleasewait.gif') " . 'no-repeat center center;"></div>
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
        s.src = '//create.lidstatic.com/campaign/59ed8882-0a07-b297-5fcc-76b25c1bdf45.js?snippet_version=2';
        var LeadiDscript = document.getElementById('LeadiDscript');
        LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
    })();
    // -->
</script>
<noscript>
    <img
        src='//create.leadid.com/noscript.gif?lac=33a0d976-59b0-cc2f-6160-c04c4b7dca3f&lck=59ed8882-0a07-b297-5fcc-76b25c1bdf45&snippet_version=2'/>
</noscript>
";


function MediaAlpha_Thankyou_Medicare($zip, $uid)
{
    if ($_GET['src'] == 'health_phq_email') {
        return '<div id="ad_unit_placeholder"></div>
    <script type="text/javascript">
        /* Simple Insurance Leads / Premium Health Quotes Medicare A - Thank you */
        var MediaAlphaExchange = {
            "type": "ad_unit",
            "placement_id": "gGOS0IATAXSspYd3cqWsPYzazcYiWQ",
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
        /* Simple Insurance Leads / Premium Health Quotes Medicare - Thank you  */
        var MediaAlphaExchange = {
            "type": "ad_unit",
            "placement_id": "AVTS6Ons4PnNjRDsBHsPpjphFDk0bw",
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
        /* Simple Insurance Leads / Premium Health Quotes A - Thank You */
        var MediaAlphaExchange = {
            "type": "ad_unit",
            "placement_id": "iU_ndqLQTgRZttyHpq_tmoI77LzlOw",
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
        /* Simple Insurance Leads / Premium Health Quotes - Thank You */
        var MediaAlphaExchange = {
            "type": "ad_unit",
            "placement_id": "xot169Gkxd0sy9EIo_O2vpPSJZCHIA",
            "version": "17",
            "sub_1": "' . $uid . '",
            "data": {
                "zip": "' . $zip . '"
            }
        };
        MediaAlphaExchange__load("ad_unit_placeholder");
    </script>';
    }
};

$Agile_form_pixel = '';

/*
$Agile_form_pixel = '
<img height="0" width="0" src="//agilehealthinsurance.7eer.net/i/251325/284493/3530"
     style="position:absolute;visibility:hidden;" border="0"/>
';

*/