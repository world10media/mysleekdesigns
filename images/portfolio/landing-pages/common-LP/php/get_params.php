<?php

// GetParams

$_GET_lower = array_change_key_case($_GET, CASE_LOWER);

$utm_source = '';

function filter_digits($string){
    return preg_replace( '/[^0-9]/', '', $string);
}


if (isset($_GET_lower['affiliate_id'])){
    $aff_id = $_GET_lower['affiliate_id'];
} elseif (isset($_GET_lower['aff_id'])){
    $aff_id = $_GET_lower['aff_id'];
} else {
    $aff_id = '';
}

$aff_id = filter_digits($aff_id);


//**********   Full URL   and     Landing Page  ********************************
$full_url = "http://" . "$_SERVER[HTTP_HOST]" . "$_SERVER[REQUEST_URI]";
$pos = strpos($full_url, '?');

$substring = '?';

function landing_page($url, $string) {
    $pos = strpos($url, $string);
    if ($pos === false)
        return $url;
    else
        return(substr($url, 0, $pos));
};

$landing_page = landing_page($full_url, $substring);
//**********   Full URL   and     Landing Page  ********************************

function getClientIP(){

    function startsWith($haystack, $needle) {
        // search backwards starting from haystack length characters from the end
        return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== false;
    }

    $ip_address = $_SERVER['REMOTE_ADDR'];
    if ((!$ip_address or $ip_address == '127.0.0.1' or startsWith($ip_address, '10.')) and array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)){
        $ip_address = $_SERVER["HTTP_X_FORWARDED_FOR"];
    }
    return $ip_address;
}

$ip_address = getClientIP();


if (isset($_GET_lower['src'])){
    $src = $_GET_lower['src'];
} else {
    $src = '';
}

$src = trim($src);

if (isset($_GET_lower['sub_affiliate_id'])){
    $sub_id = $_GET_lower['sub_affiliate_id'];
} else {
    $sub_id = isset($_GET_lower['sub_id']) ? $_GET_lower['sub_id'] : '';
}

$sub_id = trim($sub_id);

if (isset($_GET_lower['pub_id'])){
    $pub_id = $_GET_lower['pub_id'];
} else {
    $pub_id = $_GET_lower['pub_id'];
}

$pub_id = trim($pub_id);

if (isset($_GET_lower['affiliate_ref'])){
    $aff_ref = $_GET_lower['affiliate_ref'];
} elseif (isset($_GET_lower['aff_ref'])){
    $aff_ref = $_GET_lower['aff_ref'];
} else {
    $aff_ref = '';
}

$aff_ref = trim($aff_ref);


if (isset($_GET_lower['transaction_id'])){
    $trans_id = $_GET_lower['transaction_id'];
} elseif (isset($_GET_lower['trans_id'])) {
    $trans_id = $_GET_lower['trans_id'];
} else {
    $trans_id = '';
}

$trans_id = trim($trans_id);

$offer_id = isset($_GET_lower['offer_id']) ? $_GET_lower['offer_id'] : '';

$offer_id = filter_digits($offer_id);

if (isset($_GET_lower['aff_sub'])){
    $aff_sub = $_GET_lower['aff_sub'];
} else {
    $aff_sub = '';
}

$aff_sub = trim($aff_sub);

if (isset($_GET_lower['utm_source']) && strpos($_GET_lower['utm_source'], '__') !== false){
    $utm_source = $_GET_lower['utm_source'];
    $utm_source = explode("__", $utm_source);

    $_GET['affiliate_id'] = $utm_source[0];
    $_GET_lower['affiliate_id'] = $utm_source[0];
    $aff_id = $_GET_lower['affiliate_id'];

    $_GET['aff_sub'] = $utm_source[1];
    $_GET_lower['aff_sub'] = $utm_source[1];
    $aff_sub = $_GET_lower['aff_sub'];
}


if (isset($_GET_lower['test_lead'])){
    $test_lead = $_GET_lower['test_lead'];
} else {
    $test_lead = '0';
}



?>
