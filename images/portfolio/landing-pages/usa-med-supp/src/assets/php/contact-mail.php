<?php

/*
$to = "hugomartinez@hbcinsure.com";
$subject = "Contact Us";
//$email = 'info@cashforjunkleads.com';
$message = $_REQUEST['message'];
$headers = "From: info@cashforjunkleads.com";
$sent = mail($to, $subject, $message, $headers);
if ($sent) {
    print "Your mail was sent successfully";
} else {
    print "We encountered an error sending your mail";
}
*/

//*********************************************************************************


$request_list = array("partner" => "I want to partner with PremiumHealthQuotes.com in some way.",
    "mediaInquiry" => "I have a media inquiry for PremiumHealthQuotes.com.",
    "noContact" => "I want PremiumHealthQuotes.com to stop contacting me.",
    "shop" => "I want to shop for health insurance.",
    "question" => "I have a health insurance question."
);

$_POST['crequest_full'] = $request_list[$_POST['crequest']];


// subject
$subject = 'USA Med Supp Quote - Info';

// message
$message = '
<html>
<head>
    <title>USA Med Supp Quote - Info</title>
</head>
<body>
<h3>From: <b> ' . $_POST["cname"] . '</b></h3>
<h3>Company: <b> ' . $_POST["ccompany"] . '</b></h3>
<h4>Phone Number: ' . $_POST["cphone"] . '</h4>
<h4>Request: ' . $_POST["crequest_full"] . '</h4>
<h4>Email: ' . $_POST["cemail"] . '</h4>

<h4>Message:</h4>

<div style="width: 500px; border-style: double; border-width: 2px; border-color: #1b6d85;">
    <p>
         ' . $_POST["cmessage"] . '

    </p>
</div>
</body>
</html>
';



// multiple recipients
$to = 'HMartinez@simplehealthplans.com';
//$to .= ', rkneeter@sileads.com';
//$to .= ', HMartinez@simplehealthplans.com';

//$to .=  ', mspiewak@hbcinsure.com';
$to .=  ', slacey@sileads.com';
    

// To send HTML mail, the Content-type header must be set
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
//$headers .= "To: Hugo <hugomartinez@hbcinsure.com>, Kelly <kelly@example.com>" . "\r\n";
$headers .= 'From: contact@usamedsupp.com' . "\r\n";
$headers .= 'Reply-To: ' . $_POST["cname"] . '  ' . $_POST["cemail"] . "\r\n";
//$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
//$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

$_POST["cname"] = trim($_POST["cname"]);
$_POST["ccompany"] = trim($_POST["ccompany"]);
$_POST["cemail"] = trim($_POST["cemail"]);
$_POST["cphone"] = trim($_POST["cphone"]);
$_POST["cmessage"] = trim($_POST["cmessage"]);

if (isset($_POST["cname"]) && $_POST["cname"] != "" && isset($_POST["cphone"]) && isset($_POST["cemail"]) && isset($_POST["cmessage"])) {
// Mail it
    mail($to, $subject, $message, $headers);
}




header("Refresh: 0; url=../../index.php");


?>
