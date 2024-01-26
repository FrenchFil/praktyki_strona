<?php
$host = "localhost";
$dbname = "login_db";
$username = "root";
$password = "";

$mysqli = new mysqli($host, $username, $password, $dbname);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
if($mysqli->connect_errno)
{
    die("Connection error". $mysqli->connect_error);
}
return $mysqli;

?>