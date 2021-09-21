<?php
/**
 * Created by PhpStorm.
 * User: hm909
 * Date: 9/16/16
 * Time: 11:32
 */



$aff_id = $_SESSION['aff_id'];
$full_url = $_SESSION['full_url'];
$landing_page = $_SESSION['landing_page'];
$ip_address = $_SESSION['ip_address'];
$src = $_SESSION['src'];
$sub_id = $_SESSION['sub_id'];
$pub_id = $_SESSION['pub_id'];
$aff_ref = $_SESSION['aff_ref'];
$trans_id = $_SESSION['trans_id'];
$offer_id = $_SESSION['offer_id'];
$aff_sub = $_SESSION['aff_sub'];
$test_lead = $_SESSION['test_lead'];
$phone_number = $_SESSION['phone_number'];
$zip = $_SESSION['zip'];


if (!isset($_POST['aff_id'])) {$_POST['aff_id'] = $aff_id;};
if (!isset($_POST['full_url'])) {$_POST['full_url'] = $full_url;};
if (!isset($_POST['landing_page'])) {$_POST['landing_page'] = $landing_page;};
if (!isset($_POST['ip_address'])) {$_POST['ip_address'] = $ip_address;};
if (!isset($_POST['src'])) {$_POST['src'] = $src;};
if (!isset($_POST['sub_id'])) {$_POST['sub_id'] = $sub_id;};
if (!isset($_POST['pub_id'])) {$_POST['pub_id'] = $pub_id;};
if (!isset($_POST['aff_ref'])) {$_POST['aff_ref'] = $aff_ref;};
if (!isset($_POST['trans_id'])) {$_POST['trans_id'] = $trans_id;};
if (!isset($_POST['offer_id'])) {$_POST['offer_id'] = $offer_id;};
if (!isset($_POST['aff_sub'])) {$_POST['aff_sub'] = $aff_sub;};
if (!isset($_POST['test_lead'])) {$_POST['test_lead'] = $test_lead;};
if (!isset($_POST['phone_number'])) {$_POST['phone_number'] = $phone_number;};
if (!isset($_POST['zip'])) {$_POST['zip'] = $zip;};

