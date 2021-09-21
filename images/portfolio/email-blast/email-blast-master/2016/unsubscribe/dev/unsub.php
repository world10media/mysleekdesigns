<?php
/**
 * Created by PhpStorm.
 * User: hm909
 * Date: 11/3/15
 * Time: 10:51
 */


if (isset($_POST["email"])) {
    $email = $_POST["email"];
} elseif (isset($_GET["email"])) {
    $email = $_GET["email"];
}


// $url = 'http://10.102.1.9:8000/crm/api/v1/marketing/un-subscribers/';

$url = 'http://hbc.unicorncrm.com/crm/api/v1/marketing/un-subscribers/';

//$url = 'http://features.unicorncrm.com/crm/api/v1/marketing/un-subscribers/';


$data = array('email' => $email);

$username = "unsubscriber";
$password = "unsubpepito";


$postfields = $data;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_POST, 1);
// Edit: prior variable $postFields should be $postfields;
curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // On dev server only!
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
$result = curl_exec($ch);

curl_close($ch);

/*
// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n".
                      "Authorization: Basic " . base64_encode($username . ":" . $password),
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);

$context  = stream_context_create($options);

$result = file_get_contents($url, false, $context);

var_dump($result);
*/


//var_dump($result);
?>


<script>
    window.location.replace("done.php");
</script>


//header("location:done.php");


/*


Here is an example of how to use the API in your own computer using python/requests library.
url = 'http://localhost:8000/crm/api/v1/marketing/un-subscribers/'
import requests
r = requests.post(url, auth=('edilio', 'w'), data=
{'email': 'pp@gmail.com'}
)
>>> r.status_code
201
>>> r.content
'
{"id":2,"email":"pp@gmail.com","created_date":"2015-11-03T15:31:58.242334Z"}
'
======
In production we should change the url to be url = 'http://hbc.unicorncrm.com/crm/api/v1/marketing/un-subscribers/'
and a valid user name and password in production
request library is using basic authentication(https://en.wikipedia.org/wiki/Basic_access_authentication)


*/