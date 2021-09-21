<?php
$servername = "localhost";
$username = "root";
$password = "PowBOyu1TJh00oFZ";
$dbname = "rxonline_intcms";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql1 = "select * from carriers order by carrier_name";
$rslt1 = $conn->query($sql1);
if ($rslt1->num_rows > 0) {
    while ($row = $rslt1->fetch_assoc()) {
        echo '<li>' . $row["carrier_name"] . '</li>';
    };
};
$conn->close();

?>