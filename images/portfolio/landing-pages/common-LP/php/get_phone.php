<?php



function get_phone($offer_id, $affiliate_id, $aff_sub, $default_phone, $ver = 50){

    $servername = "localhost";
//    $servername = "10.101.12.76";
    $username = "root";
    $password = "PowBOyu1TJh00oFZ";
    $dbname = "rxonline_intcms";

    $did = '';

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        //die("Connection failed: " . $conn->connect_error);
        //$did = 8773869926;
        $did = $default_phone;
    }

    //$ver = 50;  // for AHI

    $offer_id = intval($offer_id);
    $affiliate_id = intval($affiliate_id);
    $aff_sub = intval($aff_sub);


    $sql1 = "select did from affiliates_ctrl where version = $ver and offer_ref = $offer_id
              and affiliate_id = $affiliate_id and aff_sub = $aff_sub";
    $rslt1 = $conn->query($sql1);

    if ($rslt1->num_rows > 0) {
        while ($row = $rslt1->fetch_assoc()) {
            $did = $row["did"];
        }
    } else {

        $sql1 = "select * from affiliates_ctrl where version = $ver and offer_ref = $offer_id
              and affiliate_id = $affiliate_id";
        $rslt1 = $conn->query($sql1);

        if ($rslt1->num_rows > 0) {
            while ($row = $rslt1->fetch_assoc()) {
                $did = $row["did"];
            }
        } else {
            //$did = 8773869926;
            $did = $default_phone;
        }

    }


/*

    if ($aff_sub == ''){
        $sql1 = "select * from affiliates_ctrl where version = $ver and offer_ref = $offer_id
              and affiliate_id = $affiliate_id";
        $rslt1 = $conn->query($sql1);

        if ($rslt1->num_rows > 0) {
            while ($row = $rslt1->fetch_assoc()) {
                $did = $row["did"];
            }
        } else {
            $did = 8773869926;
        }

    } else {
        $sql1 = "select * from affiliates_ctrl where version = $ver and offer_ref = $offer_id
              and affiliate_id = $affiliate_id and aff_sub = $aff_sub";
        $rslt1 = $conn->query($sql1);

        if ($rslt1->num_rows > 0) {
            while ($row = $rslt1->fetch_assoc()) {
                $did = $row["did"];
            }
        } else {
            $did = 8773869926;
        }
    }


   */



   $conn->close();

//    $did = 8773869926;

    $phone_number = $did;
    $phone_number = substr_replace($phone_number, '(', 0, 0);
    $phone_number = substr_replace($phone_number, ')', 4, 0);
    $phone_number = substr_replace($phone_number, ' ', 5, 0);
    $phone_number = substr_replace($phone_number, '-', 9, 0);

    return $phone_number;

}



/*


Hi,
For my vendor Offer Web, they have requested the DIDs be removed from their pages for American Health Insure.

They have 2 versions, one for Display & Email
Pub ID 527
List ID 30527

http://hbcinsure.go2cloud.org/aff_c?offer_id=127&aff_id=527
http://hbcinsure.go2cloud.org/aff_c?offer_id=123&aff_id=527

Let me know if you need anything else from me.
Thanks

*/


function show_phone($offer_id, $aff_id) {
    if ($offer_id == 127 && $aff_id == 527) {
        $show_phone = false;
    } elseif ($offer_id == 123 && $aff_id == 527) {
        $show_phone = false;
    } elseif ($offer_id == 136 && $aff_id == 665) {
        $show_phone = false;
    } elseif ($offer_id == 146 && $aff_id == 1344) {
        $show_phone = false;
    } elseif ($offer_id == 142 && $aff_id == 665) {
        $show_phone = false;
    } else {
        $show_phone = true;
    }
    return $show_phone;
}






?>


