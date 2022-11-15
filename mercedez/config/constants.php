<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '12345678');
define('DB_NAME', 'MercedesTraffic');
define('SITEURL', 'http://localhost:3000/');

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
// echo $conn;
if (!$conn) {
    // echo "ket noi fail";
    die("loi ket noi " . mysqli_connect_error());
}
// echo "ket noi success";
