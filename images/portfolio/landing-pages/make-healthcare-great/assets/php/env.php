<?php

$domain = 'makehealthcaregreatagain.com';
$domainCap = 'MakeHealthcareGreatAgain.com';
$siteName = 'Make Healthcare Great Again';
$siteNameLowercase = 'make healthcare great again';
$ver = 55;
$default_zipcode = "";
$src = isset($_GET['src']) ? $_GET['src'] : 'mhcga_default';

$default_params = array(
    'aff_ref' => '1004',
    'src' => 'mhcga_default'
);


$default_phone = 8447159634;


$indexGTM = "";


$indexHotJar = '';


$index_Facebook = "";


$formGTM = $indexGTM;


$formHotJar = "";


$thankyouGTM = $indexGTM;


$thankyouHotJar = "";


$thankyouGoogle_LeadSubmit = '';


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
        s.src = '//create.lidstatic.com/campaign/27e937a2-a5a0-f6dc-dc2f-6dc4f11dd5d3.js?snippet_version=2';
        var LeadiDscript = document.getElementById('LeadiDscript');
        LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
    })();
    // -->
</script>
<noscript>
    <img
        src='//create.leadid.com/noscript.gif?lac=33a0d976-59b0-cc2f-6160-c04c4b7dca3f&lck=27e937a2-a5a0-f6dc-dc2f-6dc4f11dd5d3&snippet_version=2'/>
</noscript>
";


function MediaAlpha_Thankyou_Medicare($zip, $uid)
{
    if ($_GET['src'] == 'health_phq_email') {
        return '<div id="ad_unit_placeholder"></div>
    <script type="text/javascript">
        /* Simple Insurance Leads / MakeHealthcaregreatagain O65 - Thank you  */
        var MediaAlphaExchange = {
            "type": "ad_unit",
            "placement_id": "XdrV4_cah8b2j9Md2z9MGBKcDhYkrA",
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
        /* Simple Insurance Leads / MakeHealthcaregreatagain O65 - Thank you  */
        var MediaAlphaExchange = {
            "type": "ad_unit",
            "placement_id": "XdrV4_cah8b2j9Md2z9MGBKcDhYkrA",
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
        /* Simple Insurance Leads / Mak eHealthcaregreatagain U65- Thank you  */
        var MediaAlphaExchange = {
            "type": "ad_unit",
            "placement_id": "mZEVaSJR0cmCs2eCLVQ55dnYlWEyqA",
            "version": "17",
            "sub_1": "test sub id",
            "data": { 
                "zip": "90210"
            }
        };
        MediaAlphaExchange__load("ad_unit_placeholder"); 
    </script>';
    } else {
        return '<div id="ad_unit_placeholder"></div>
    <script type="text/javascript">
        /* Simple Insurance Leads / Mak eHealthcaregreatagain U65- Thank you  */
        var MediaAlphaExchange = {
            "type": "ad_unit",
            "placement_id": "mZEVaSJR0cmCs2eCLVQ55dnYlWEyqA",
            "version": "17",
            "sub_1": "test sub id",
            "data": { 
                "zip": "90210"
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
