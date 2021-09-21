<?php

// ****************************************  FORENSIQ API CALL
// ------------------------------------------------------------

$forensiq_url = 'http://2pth.com/check';

$forensiq_params = array(
    'ck' => 'Fs06NrooqMTIrYrJRnII',
    'rt'=> 'action',
    'ip'=> $_SERVER['REMOTE_ADDR'],
    's'=> $_SESSION['form_token'],
    'p'=> $_POST['affiliate_id'],
    'dmn'=> "$_SERVER[HTTP_HOST]",
    'cmp'=> $_POST['offer_id'],
    'a'=> $_POST['aff_sub'],
    'output'=> 'JSON',
);

$forensiq_string = http_build_query($forensiq_params);
$forq_ch = curl_init();
//set the url, number of POST vars, POST data
curl_setopt($forq_ch, CURLOPT_URL, $forensiq_url);
curl_setopt($forq_ch, CURLOPT_POST, count($forensiq_string));
curl_setopt($forq_ch, CURLOPT_POSTFIELDS, $forensiq_string);
curl_setopt($forq_ch, CURLOPT_RETURNTRANSFER, true);

//execute post
$forensiq_result = curl_exec($forq_ch);

//close connection
curl_close($forq_ch);
$forensiq_result = json_decode($forensiq_result, true);
$riskScore = $forensiq_result['items'][0]['riskScore'];

$resultArray = array(
    'riskScore' => $riskScore
);

header('Content-Type: application/json');

echo json_encode($resultArray);

//die();