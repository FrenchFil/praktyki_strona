<?php

if (empty($_POST["login"])) {
    die("You didn't input login");
}

if (strlen($_POST["password"]) < 8) {
    die("Your password must contain at least 8 characters");
}

if (empty($_POST["password_check"])) {
    die("Put password confirmation");
}

if (!preg_match("/[a-z]/i", $_POST["password"])) {
    die("Your password must contain at least one letter");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";
$sql = "INSERT INTO wp_users(user_email, user_nicename,user_login, user_pass) VALUES (?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if (!$stmt->prepare($sql)) {
    die("SQL NOT WORKING" . $mysqli->error);
}

$stmt->bind_param("ssss", $_POST["name"],$_POST["login"], $_POST["login"], $password_hash);
if($stmt->execute()) {
    
    echo('Registered');
 }
 else{
    die( $mysqli->error.''.$mysqli->errno);
 }

echo "Signup successful";
?>
