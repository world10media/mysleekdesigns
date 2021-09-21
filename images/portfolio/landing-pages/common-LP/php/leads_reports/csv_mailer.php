<?php
/**
 * Created by PhpStorm.
 * User: hm909
 * Date: 6/27/16
 * Time: 17:23
 */




$path = getcwd();

// CSV header
$content = array (
    array('id',
        'post_date',
        'lead_type',
        'Universal_Lead_ID',
        'Aff_ID',
        'Full_URL',
        'IP_Address',
        'SRC',
        'Landing_Page',
        'Sub_ID',
        'Pub_ID',
        'Transaction_ID',
        'forensiq_score',
        'Affiliate_Ref',
        'First_Name',
        'Last_Name',
        'Address',
        'City',
        'State',
        'Zip',
        'Email',
        'Day_Phone',
        'Household_Income',
        'Household_People',
        'Gender',
        'DOB',
        'Height_Feet',
        'Height_Inches',
        'Weight',
        'Age',
        'boberdoo_status',
        'boberdoo_lead_id',
        'boberdoo_error',
        'hasoffers_post',
        'hasoffers_response',
        'go_to_this_url'),
);



/*
$servername = "localhost";
$username = "root";
$password = "PowBOyu1TJh00oFZ";
$dbname = "rxonline_intcms";*/


$dbservername = "10.101.12.76";
$dbusername = "rxonline_intcms";
$dbpassword = "PowBOyu1TJh00oFZ";
$dbname = "rxonline_intcms";


// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, 
post_date, 
lead_type, 
Universal_Lead_ID, 
Aff_ID, 
Full_URL, 
IP_Address, 
SRC, 
Landing_Page, 
Sub_ID, 
Pub_ID, 
Transaction_ID, 
forensiq_score, 
Affiliate_Ref, 
First_Name, 
Last_Name, 
Address, 
City, 
State, 
Zip, 
Email, 
Day_Phone, 
Household_Income, 
Household_People, 
Gender, 
DOB, 
Height_Feet, 
Height_Inches, 
Weight, 
Age, 
boberdoo_status, 
boberdoo_lead_id, 
boberdoo_error, 
hasoffers_post, 
hasoffers_response, 
go_to_this_url
 FROM boberdoo_leads WHERE
    post_date > DATE(DATE_SUB(NOW(), INTERVAL 1 DAY))
    and post_date < DATE(DATE_SUB(NOW(), INTERVAL 0 DAY))";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $current = array($row['id'],
            $row['post_date'],
            $row['lead_type'],
            $row['Universal_Lead_ID'],
            $row['Aff_ID'],
            $row['Full_URL'],
            $row['IP_Address'],
            $row['SRC'],
            $row['Landing_Page'],
            $row['Sub_ID'],
            $row['Pub_ID'],
            $row['Transaction_ID'],
            $row['forensiq_score'],
            $row['Affiliate_Ref'],
            $row['First_Name'],
            $row['Last_Name'],
            $row['Address'],
            $row['City'],
            $row['State'],
            $row['Zip'],
            $row['Email'],
            $row['Day_Phone'],
            $row['Household_Income'],
            $row['Household_People'],
            $row['Gender'],
            $row['DOB'],
            $row['Height_Feet'],
            $row['Height_Inches'],
            $row['Weight'],
            $row['Age'],
            $row['boberdoo_status'],
            $row['boberdoo_lead_id'],
            $row['boberdoo_error'],
            $row['hasoffers_post'],
            $row['hasoffers_response'],
            $row['go_to_this_url']);

        array_push($content, $current);
    }
} else {
    echo "0 results";
}
$conn->close();






sleep(5);



$leads_date = date("Y-m-d", time() - 60 * 60 * 24);


//$path = getcwd();

$file = "/tmp/reports/Leads ".$leads_date.".csv";

$filename = "/tmp/reports/Leads ".$leads_date.".csv";

$fp = fopen($file, 'w');

foreach ($content as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);



require '/var/www/landing-pages-SL/2016/common-LP/pmail/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
// Set PHPMailer to use the sendmail transport
$mail->isSendmail();
//Set who the message is to be sent from
$mail->setFrom('alerts@sileads.com', 'Alerts SIL');
//Set an alternative reply-to address
$mail->addReplyTo('hugomartinez@hbcinsure.com', 'Hugo M');
//Set who the message is to be sent to
$mail->addAddress('alerts@sileads.com', 'SIL Alerts');
//$mail->addAddress('slacey@sileads.com', 'Simon L');
//Set the subject line
$mail->Subject = 'Sent Leads - Daily Report '.$leads_date;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body


//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
$mail->msgHTML('SIL Team,<br><br>This is the automated daily report for the leads sent to Boberdoo on '.$leads_date.'.<br>
                If you find any error/issue please reply to this email.<br><br>Thanks,');


//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
$mail->addAttachment($filename);

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}








echo "done";



/*


$sql = "SELECT * INTO OUTFILE \"c:/mydata.csv\"
FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '\"'
LINES TERMINATED BY \"\n\"
FROM my_table;";

*/



