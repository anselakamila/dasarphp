<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pesanan";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connecttion failed: " . $conn->connect_error);
}
// echo "connect succesfully";


?>