<?php
/**
 * Created by PhpStorm.
 * User: hm909
 * Date: 7/6/16
 * Time: 09:58
 */



//include ('db.php');

//http://agilehealthinsurance.7eer.net/c/163375/210292/3530?subid1=website1&p.census[location][zip]=95130&p.census[member][0][dob]=1960-01-01&p.census[member][0][gender]=F&p.census[member][0][role]=

function roundrobin_file()
{

    /****************************************************************
     * Get the last character of the file
     */
    $line = '';

    $f = fopen('../../roundrobin.txt', 'r');
    $cursor = -1;

    fseek($f, $cursor, SEEK_END);
    $char = fgetc($f);

    /**
     * Trim trailing newline chars of the file
     */
    while ($char === "\n" || $char === "\r") {
        fseek($f, $cursor--, SEEK_END);
        $char = fgetc($f);
    }

    /**
     * Read until the start of file or first newline char
     */
    while ($char !== false && $char !== "\n" && $char !== "\r") {
        /**
         * Prepend the new char
         */
        $line = $char;

        fseek($f, $cursor--, SEEK_END);
        $char = fgetc($f);
    }

    return $line;


}






function go_to_this_url()
{
    global $domain;

    $month_number = array("January" => "01", "Febuary" => "02", "March" => "03", "April" => "04", "May" => "05",
        "June" => "06", "July" => "07", "August" => "08", "September" => "09", "October" => "10",
        "November" => "11", "December" => "12");

    $dob_month = $_POST['DateOfBirth_Month'];
    $dob_month = $month_number[$dob_month];
    $dob_day = $_POST['DateOfBirth_Day'];
    $dob_year = $_POST['DateOfBirth_Year'];
    if ($dob_day < 10) {
        $dob_day = '0' . $dob_day;
    }
    $dob_fastquote = $dob_year . '-' . $dob_month . '-' . $dob_day;


    $myState = $_POST['state'];
    $agile_restricted_state = ["MA", "MD", "MI", "MN", "MT", "NJ", "NY", "RI", "VT"];
    // Restricted States =  Massachusetts, Maryland, Michigan, Minnesota, Montana, New Jersey, New York, Rhode Island, Vermont
    //

    $is_restricted = in_array($myState, $agile_restricted_state);


    function isAfterHrs()
    {
        $myOffset = date('Z') / 3600;
        $myLocalHr = date('H');
        $UTCHr = $myLocalHr - $myOffset;
        $PacifHr = $UTCHr - 7;
        //Also we would like to have Agile in place for after-hours (8pm pacific to 6am pacific)
        return ($PacifHr < 6 || $PacifHr >= 20);
    };

    $thankyou_url = $_POST['landing_page'].'thankyou.php?'. 'zip=' . $_POST['zipcode']
        . '&offer_id=' . $_POST['offer_id'] . '&aff_id=' . $_POST['aff_id'] . '&aff_sub=' . $_POST['aff_sub']
        . '&inty=' . $_POST['insurance_type'] . '&trans_id=' . $_POST['trans_id']
        . '&aff_ref=' . $_POST['aff_ref'] . '&ph=' . $_POST['phone_number'] . '&uid=' . $_POST['universal_leadid']
        . '&src=' . $_POST['src'];


    $agile_health_url = 'http://agilehealthinsurance.7eer.net/c/251325/284493/3530?subid1=' . $domain
        .'&p.census[location][zip]='.$_POST['zipcode'].'&p.census[member][0][dob]='. $dob_fastquote
        .'&p.census[member][0][gender]=' . $_POST['applicant_gender'] . '&p.census[member][0][role]=P';

    /*
    if ($_POST['insurance_type'] == 'health') {
        if ($is_restricted) {
            error_log($thankyou_url);
            return $thankyou_url;
        } else if (isAfterHrs()) {
            error_log($agile_health_url);
            return $agile_health_url;
        } else {

            if (roundrobin_file()) {
                $file = fopen("../../roundrobin.txt", "w");
                fwrite($file, "0");
                fclose($file);
                error_log($thankyou_url);
                return $thankyou_url;

            } else {
                $file = fopen("../../roundrobin.txt", "w");
                fwrite($file, "1");
                fclose($file);

                error_log($agile_health_url);
                return $agile_health_url;

            }
        }
    } else {
        error_log($thankyou_url);
        return $thankyou_url;
    }
    */

    if ($_POST['src'] == 'ahi_0621') {
        return $agile_health_url;
    } else {
        return $thankyou_url;
    }


}





function doLog($text)
{
    $filename = "../../resp.log";
    $fh = fopen($filename, "a") or die("Could not open log file.");
    fwrite($fh, date("d-m-Y, H:i") . " - $text\n") or die("Could not write file!");
    fclose($fh);
}


function doLog2($text)
{
    $filename = "../../resp.log";
    $fh = fopen($filename, "a") or die("Could not open log file.");
    fwrite($fh, date("d-m-Y, H:i") . "\n" . $text) or die("Could not write file!");
    fclose($fh);
}






function curl_wrapper($url, $urlmethod, $fields, $is_b = FALSE)
{

    /*
    $urlmethod, if it
    1 = get
    2 = post
        $fields is an associative array
        $login['email'] = 'me@this.com';
        $login['pw'] = 'secret';
    */
    //set POST variables
    //url-ify the data for the POST

    $fields_string = http_build_query($fields);

    //open connection
    $ch = curl_init();
    // post
    if ($urlmethod == 2) {
        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    }
    // get
    if ($urlmethod == 1) {
        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url . '?' . $fields_string);

    }
    //execute post
    $result = curl_exec($ch);
    doLog2(print_r($fields_string, true));
    doLog2(print_r($result . "\n", true));

    // if post was to boberdoo check if it was accepted
    $xml = '';
    if ($is_b) {
        $xml = new SimpleXMLElement($result);
        if ($xml->status != 'Error') {
            $lead_id = $xml->lead_id;
            $pub_id = $fields['Pub_ID'];
            $transaction_id = $fields['Sub_ID'];
        }
    }
    //close connection
    curl_close($ch);


    return $result;


} // curl wrapper









function hasoffers_post($url)
{


    $pb_result2 = '';


    /*if (strpos($url, 'TRANSACTION_ID') !== false) {
        $postback_url = substr($url,0,-14);
        //$global_postback_url = $postback_url . $trans_id. '&adv_sub=' . $lead_id .'&ad_id=' . $transaction_id;
        $postback_url = $postback_url . $trans_id;
    } else {
        return "Not valid posting URL";
    }*/

    $running_state = 1;

    if ($running_state) {


        //if ($global_postback_url != '')
        if (1) {


            /*
                        if (strpos($global_postback_url, 'TRANSACTION_ID') !== false) {
                            $global_postback_url = substr($global_postback_url,0,-14);
                            $global_postback_url = $global_postback_url . $transaction_id. '&adv_sub=' . $lead_id .'&ad_id=' . $transaction_id;
                        }
            */
            $global_postback_url = '';   // put here the url


            //$postback_url = 'http://hbcinsure.go2cloud.org/' . $postback_code . '?adv_sub=' . $lead_id . '&transaction_id=' . $transaction_id . '&ad_id=' . $transaction_id;


            //if ($is_b && ($xml->status != 'Error')) {
            //$p_fields = array('aff_id' => '2', 'adv_sub' => $lead_id, 'transaction_id' => $transaction_id);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $pb_result = curl_exec($ch);
            doLog(print_r($pb_result, true));
            $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            //   doLog(print_r($transaction_id, true));
            curl_close($ch);
            $pb_result2 = $code . $pb_result;

            //}
        }
    }


    //     WAITING FOR NIKIA TI HAVE HASOFFERS CODE
    /*
    $postback_url = 'http://hbcinsure.go2cloud.org/' . $postback_code . '?adv_sub=' . $lead_id . '&transaction_id=' . $transaction_id . '&ad_id=' . $transaction_id;

    if ($is_b && ($xml->status != 'Error')) {
        $p_fields = array('aff_id' => '2', 'adv_sub' => $lead_id, 'transaction_id' => $transaction_id);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $postback_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $pb_result = curl_exec($ch);
        doLog(print_r($pb_result, true));
        doLog(print_r($transaction_id, true));
        curl_close($ch);

    }*/

    return $pb_result2;

}







function Quote_Lab_Request($url)
{
    $ch2 = curl_init();
    curl_setopt($ch2, CURLOPT_URL, $url);
    curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
    $pb_result = curl_exec($ch2);
    doLog(print_r($pb_result, true));
    $code = curl_getinfo($ch2, CURLINFO_HTTP_CODE);
    //   doLog(print_r($transaction_id, true));
    curl_close($ch2);
/*    $pb_result2 = $code . $pb_result;

    return $pb_result2;*/

}







function store_in_db($params, $post_params) {


    // development

    /*
    $dbservername = "10.101.12.76";
    $dbusername = "rxonline_intcms";
    $dbpassword = "PowBOyu1TJh00oFZ";
    $dbname = "rxonline_intcms";
*/


    $dbservername = "localhost";
    $dbusername = "root";
    $dbpassword = "PowBOyu1TJh00oFZ";
    $dbname = "rxonline_intcms";




    // Create connection
    $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = '';

    switch ($params['TYPE']) {
        case 75:


            $sql = "INSERT INTO boberdoo_leads (lead_type, Universal_Lead_ID, Aff_ID, Full_URL, IP_Address,
                 SRC, Landing_Page, Sub_ID, Pub_ID, Transaction_ID, forensiq_score, Affiliate_Ref, First_Name,
                  Last_Name, Address, City, State, Zip, Email, Day_Phone, Household_Income, Household_People,
                   Gender, DOB, Height_Feet, Height_Inches, Weight, Age, Pregnant, Health_Conditions,
                    boberdoo_post, boberdoo_response, boberdoo_status, boberdoo_lead_id, boberdoo_error,
                     hasoffers_post, hasoffers_response, go_to_this_url)
                VALUES ('" . $params['TYPE'] . "', '" . $params['Universal_Lead_ID'] . "', '" . $params['Aff_ID']
                . "', '" . $params['Full_URL']
                . "', '" . $params['IP_Address'] . "', '" . $params['SRC'] . "', '" . $params['Landing_Page'] . "', '" . $params['Sub_ID']
                . "', '" . $params['Pub_ID'] . "', '" . $params['Transaction_ID'] . "', '" . $params['forensiq_score'] . "', '"
                . $params['Affiliate_Ref'] . "', '" . $params['First_Name'] . "', '" . $params['Last_Name'] . "', '" . $params['Address']
                . "', '" . $params['City'] . "', '" . $params['State'] . "', '" . $params['Zip'] . "', '" . $params['Email'] . "', '"
                . $params['Day_Phone'] . "', '" . $params['Household_Income'] . "', '" . $params['Household_People'] . "', '"
                . $params['Gender'] . "', '" . $params['DOB'] . "', '" . $params['Height_Feet'] . "', '" . $params['Height_Inches']
                . "', '" . $params['Weight'] . "', '" . $params['Age'] . "', '" . $params['Pregnant'] . "', '" . $params['Health_Conditions']
                . "', '" . http_build_query($params) . "', '" . $post_params['boberdoo_response'] . "', '" . $post_params['boberdoo_status']
                . "', '" . $post_params['boberdoo_lead_id'] . "', '" . $post_params['boberdoo_error']
                . "', '" . $post_params['hasoffers_post'] . "', '" . $post_params['hasoffers_response']
                . "', '" . $post_params['go_to_this_url'] . "')";


            break;
        case 77:

            break;
        case 79:


            $sql = "INSERT INTO boberdoo_leads (lead_type, Universal_Lead_ID, Aff_ID, Full_URL, IP_Address,
                 SRC, Landing_Page, Sub_ID, Pub_ID, Transaction_ID, forensiq_score, Affiliate_Ref, First_Name,
                  Last_Name, Address, City, State, Zip, Email, Day_Phone, Gender, DOB, Age, Health_Conditions,
                    boberdoo_post, boberdoo_response, boberdoo_status, boberdoo_lead_id, boberdoo_error,
                     hasoffers_post, hasoffers_response, go_to_this_url)
                VALUES ('" . $params['TYPE'] . "', '" . $params['Universal_Lead_ID'] . "', '" . $params['Aff_ID']
                . "', '" . $params['Full_URL']
                . "', '" . $params['IP_Address'] . "', '" . $params['SRC'] . "', '" . $params['Landing_Page'] . "', '" . $params['Sub_ID']
                . "', '" . $params['Pub_ID'] . "', '" . $params['Transaction_ID'] . "', '" . $params['forensiq_score'] . "', '"
                . $params['Affiliate_Ref'] . "', '" . $params['First_Name'] . "', '" . $params['Last_Name'] . "', '" . $params['Address']
                . "', '" . $params['City'] . "', '" . $params['State'] . "', '" . $params['Zip'] . "', '" . $params['Email'] . "', '"
                . $params['Primary_Phone'] . "', '"
                . $params['Gender'] . "', '" . $params['DOB'] . "', '" . $params['Age'] . "', '" . $params['Health_Conditions']
                . "', '" . http_build_query($params) . "', '" . $post_params['boberdoo_response'] . "', '" . $post_params['boberdoo_status']
                . "', '" . $post_params['boberdoo_lead_id'] . "', '" . $post_params['boberdoo_error']
                . "', '" . $post_params['hasoffers_post'] . "', '" . $post_params['hasoffers_response']
                . "', '" . $post_params['go_to_this_url'] . "')";


            break;
        default:
    }


    if ($conn->query($sql) === TRUE) {
        error_log("New record created successfully");
    } else {
        error_log("Error: " . $sql . "<br>" . $conn->error);
    }

    $conn->close();
}


function send_mail($params){
    // send email with data
    $body = '<h3>Data sent to Boberdoo:</h3>';
    $body .= '<ul>';
    foreach ($params as $key => $value) {
        $body .= '<li><b>' . $key . '</b>:' . $value . '</li>';
    }
    $body .= '</ul>';

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: <boberdoo@hbcinsure.com>' . "\r\n";

    mail("hugomartinez@hbcinsure.com", "New Lead sent to Boberdoo", $body, $headers);
    //mail("HMartinez@simplehealthplans.com", "New Lead sent to Boberdoo", $body, $headers);
    //mail("hrankin@sileads.com", "New Prospect at hbcquotes", $body, $headers);
}

/*
function get_listings_counter(){

    $dbservername = "localhost";
    $dbusername = "root";
    $dbpassword = "PowBOyu1TJh00oFZ";
    $dbname = "rxonline_intcms";

    // Create connection
    $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM counter WHERE description = 'listings'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $counter = $row["counter"];
    $new_counter = $counter + 1;

    $sql2 = "UPDATE counter SET counter='".$new_counter."' WHERE description = 'listings'";
    $conn->query($sql2);
    $conn->close();

    return $counter;

};*/



