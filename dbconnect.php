<?php
// $dbservername = "127.0.0.1";
// $dbusername = "root";
// $dbpassword = "";
// $dbname = "catastrophic_emporium";
// $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
// if (!$conn) {
//     die('Connection failed: '.mysqli_connect_error()).'<br>';
// } else {
//     echo 'MySQL connected successfully<br>';
// }
require 'vendor/autoload.php';
$client = new MongoDB\Client();
$maindb = $client ->catastrophic_emporium;
?>