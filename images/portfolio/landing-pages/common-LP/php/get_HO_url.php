<?php

function get_HO_impression_pixel ($offer_id, $aff_id){

    if ($offer_id != '' && $aff_id != '') {
        $impressionPixelHO = '<img src="http://hbcinsure.go2cloud.org/aff_i?offer_id='
            . $offer_id . '&aff_id=' . $aff_id . '" width="1" height="1" style="display: none;" />';
    } else  {
        $impressionPixelHO = '';
    };

    return $impressionPixelHO;
}


function get_HO_LP_pixel ($offer_id){



// if posting to and accepted by boberdoo send postback to hasoffers

/*
    $dbservername = "hbcquotes.com";
    $dbusername = "rxonline_intcms";
    $dbpassword = "PowBOyu1TJh00oFZ";
    $dbname = "rxonline_intcms";

    $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "select * from postback_hasoffers where version = $campaign";
    $rslt = $conn->query($sql);

    $global_postback_url = '';

    if ($rslt->num_rows > 0) {
        while ($row = $rslt->fetch_assoc()) {
            $global_postback_url = $row["postback_url"];
        }
    }

    $conn->close();

    return $global_postback_url;

*/


    $offer_id = intval($offer_id);

    switch ($offer_id) {
        case 125:
            $pixel = "";
        break;
        case 127:
            $pixel = "";
        break;
        case 131:
            $pixel = "";
        break;

        default:
            $pixel = "";


    }

    return $pixel;


}








function get_HO_form_pixel ($offer_id, $trans_id){



// if posting to and accepted by boberdoo send postback to hasoffers

/*
    $dbservername = "hbcquotes.com";
    $dbusername = "rxonline_intcms";
    $dbpassword = "PowBOyu1TJh00oFZ";
    $dbname = "rxonline_intcms";

    $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "select * from postback_hasoffers where version = $campaign";
    $rslt = $conn->query($sql);

    $global_postback_url = '';

    if ($rslt->num_rows > 0) {
        while ($row = $rslt->fetch_assoc()) {
            $global_postback_url = $row["postback_url"];
        }
    }

    $conn->close();

    return $global_postback_url;

*/


    $offer_id = intval($offer_id);

    switch ($offer_id) {
        case 123:
            $pixel = '<!-- Offer Goal Click: AHI Email Zip Submits -->
<img src="http://hbcinsure.go2cloud.org/GH3N?transaction_id=TRANSACTION_ID" width="1" height="1" style="display: none;" />
<!-- // End Offer Goal Click -->';
        break;

        case 125:
            $pixel = '<!-- Offer Goal Click: UHI Email Zip Submits -->
<img src="http://hbcinsure.go2cloud.org/GH3f?transaction_id=TRANSACTION_ID" width="1" height="1" style="display: none;" />
<!-- // End Offer Goal Click -->';
        break;

        case 127:
            $pixel = '<!-- Offer Goal Click: AHI Display Zip Submits -->
<img src="http://hbcinsure.go2cloud.org/GH3T?transaction_id=TRANSACTION_ID" width="1" height="1" style="display: none;"/>
<!-- // End Offer Goal Click -->';
        break;

        case 129:
            $pixel = '<!-- Offer Goal Click: PHQ Email Zip Submits -->
<img src="http://hbcinsure.go2cloud.org/GH3l?transaction_id=TRANSACTION_ID" width="1" height="1" />
<!-- // End Offer Goal Click -->';
        break;

        case 131:
            $pixel = '<!-- Offer Goal Click: AHI Test ZIp Submit -->
<img src="http://hbcinsure.go2cloud.org/GH42?transaction_id=TRANSACTION_ID" width="1" height="1" style="display: none;"/>
<!-- // End Offer Goal Click -->';
        break;

        case 132:
            $pixel = '<!-- Offer Goal Click: UHI Display Zip Submits -->
<img src="http://hbcinsure.go2cloud.org/GH3u?transaction_id=TRANSACTION_ID" width="1" height="1" style="display: none;"/>
<!-- // End Offer Goal Click -->';
        break;

        case 134:
            $pixel = '<!-- Offer Goal Click: AHI Social Zip Submits -->
<img src="http://hbcinsure.go2cloud.org/aff_goal?a=c&goal_id=16&transaction_id=TRANSACTION_ID" width="1" height="1" style="display: none;"/>
<!-- // End Offer Goal Click -->';
        break;

        case 136:
            $pixel = '<!-- Offer Goal Click: AHI Social Zip Submits -->
<img src="http://hbcinsure.go2cloud.org/aff_goal?a=c&goal_id=22&transaction_id=TRANSACTION_ID" width="1" height="1" style="display: none;"/>
<!-- // End Offer Goal Click -->';
        break;

        case 146:
            $pixel = '<!-- Offer Goal Click: AHI Social Zip Submits -->
<img src="http://hbcinsure.go2cloud.org/aff_goal?a=c&goal_id=28&transaction_id=TRANSACTION_ID" width="1" height="1" style="display: none;"/>
<!-- // End Offer Goal Click -->';
        break;

        default:
            $pixel = "";
            $trans_id = "";


    }

    if (strpos($pixel, 'TRANSACTION_ID') !== false) {
        return str_replace("TRANSACTION_ID", $trans_id, $pixel);
    } else {
        return $pixel;
    }

}




function get_HO_postbackurl ($offer_id, $lead_type){

    $offer_id = intval($offer_id);

    $url = array(
        123 => array("http://hbcinsure.go2cloud.org/SP39?transaction_id="),
        127 => array("http://hbcinsure.go2cloud.org/SP3D?transaction_id="),
        125 => array("http://hbcinsure.go2cloud.org/SP37?transaction_id="),
        129 => array("http://hbcinsure.go2cloud.org/SP3X?transaction_id="),
        131 => array("http://hbcinsure.go2cloud.org/SP3p?transaction_id="),
        132 => array("http://hbcinsure.go2cloud.org/SP4C?transaction_id="),
        134 => array("http://hbcinsure.go2cloud.org/SP3y?transaction_id="),
        136 => array("http://hbcinsure.go2cloud.org/SP4K?transaction_id="),
        138 => array(
            75 => "http://hbcinsure.go2cloud.org/aff_goal?a=lsr&goal_id=30&transaction_id=",
            79 => "http://hbcinsure.go2cloud.org/SP4M?transaction_id=",
            ),
        140 => array(
            75 => "http://hbcinsure.go2cloud.org/aff_goal?a=lsr&goal_id=34&transaction_id=",
            79 => "http://hbcinsure.go2cloud.org/SP4O?transaction_id="
            ),
        142 => array(
            75 => "http://hbcinsure.go2cloud.org/aff_goal?a=lsr&goal_id=36&transaction_id=",
            79 => "http://hbcinsure.go2cloud.org/SP4Q?transaction_id="
            ),
        144 => array(
            75 => "http://hbcinsure.go2cloud.org/aff_goal?a=lsr&goal_id=38&transaction_id=",
            79 => "http://hbcinsure.go2cloud.org/SP4S?transaction_id="
            ),
        //146 => array("http://hbcinsure.go2cloud.org/SP4g?transaction_id="),
        2000 => array(  // For testing
            75 => "http://hbcinsure.go2cloud.org/SP4S?   75  transaction_id=",  // For testing
            79 => "http://hbcinsure.go2cloud.org/SP4S?    79  transaction_id=",  // For testing
            ),
    );

    if (sizeof($url[$offer_id]) > 1){
        return $url[$offer_id][$lead_type];
    } else {
        return $url[$offer_id][0];
    }

}



function get_HO_postbackurl_old ($offer_id, $lead_type){



// if posting to and accepted by boberdoo send postback to hasoffers

    /*
        $dbservername = "hbcquotes.com";
        $dbusername = "rxonline_intcms";
        $dbpassword = "PowBOyu1TJh00oFZ";
        $dbname = "rxonline_intcms";

        $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "select * from postback_hasoffers where version = $campaign";
        $rslt = $conn->query($sql);

        $global_postback_url = '';

        if ($rslt->num_rows > 0) {
            while ($row = $rslt->fetch_assoc()) {
                $global_postback_url = $row["postback_url"];
            }
        }

        $conn->close();

        return $global_postback_url;

    */




/*
    $offer_id = intval($offer_id);

    switch ($offer_id) {
        case 123:
            $url = "http://hbcinsure.go2cloud.org/SP39?transaction_id=";
            break;
        case 127:
            $url = "http://hbcinsure.go2cloud.org/SP3D?transaction_id=";
            break;
        case 125:
            $url = "http://hbcinsure.go2cloud.org/SP37?transaction_id=";
            break;
        case 129:
            $url = "http://hbcinsure.go2cloud.org/SP3X?transaction_id=";
            break;
        case 131:
            $url = "http://hbcinsure.go2cloud.org/SP3p?transaction_id=";
            break;
        case 132:
            $url = "http://hbcinsure.go2cloud.org/SP4C?transaction_id=";
            break;
        case 134:
            $url = "http://hbcinsure.go2cloud.org/SP3y?transaction_id=";
            break;
        case 136:
            $url = "http://hbcinsure.go2cloud.org/SP4K?transaction_id=";
            break;
        case 138:
            $url = "http://hbcinsure.go2cloud.org/SP4M?transaction_id=";
            break;
        case 140:
            $url = "http://hbcinsure.go2cloud.org/SP4O?transaction_id=";
            break;
        case 142:
            $url = "http://hbcinsure.go2cloud.org/SP4Q?transaction_id=";
            break;
        case 144:
            $url = "http://hbcinsure.go2cloud.org/SP4S?transaction_id=";
            break;
        case 146:
            $url = "http://hbcinsure.go2cloud.org/SP4g?transaction_id=";
            break;

        default:
            $url = "";


    }

    return $url;

*/


}


function get_HO_conversion_pixel ($offer_id, $aff_id){

    $offer_id = intval($offer_id);
    $aff_id = intval($aff_id);

    $url = array(
        146 => array(
            1344 => '<!-- Offer Conversion: American Health Insure - Display v2 Private -->
<iframe src="http://hbcinsure.go2cloud.org/SL4i" scrolling="no" frameborder="0" width="1" height="1" style="display: none;"></iframe>
<!-- // End Offer Conversion -->',
        ),
    );

    return $url[$offer_id][$aff_id];

}