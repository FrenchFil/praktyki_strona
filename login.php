<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $mysqli = require __DIR__ ."/database.php";
    $sql = sprintf("SELECT * FROM user WHERE email='%s'", $mysqli->real_escape_string($_POST["name"]));
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
    if ($result->num_rows > 0) {
        // Fetch the user information
    } else {
        echo "User not found";
    }
    if($user){
       if( password_verify($_POST["password"],$user["password_hash"]))
       session_start();
    $_SESSION["user_id"] = $user["id"];
    header("Location: new_index.php");
    exit();
    }    
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
</head>

<body>
    <h1>Login</h1>
    <form method="post">
    <label for="email">email</label>
    <input type="email" name="name" id="name">

    <label for="password">password</label>
    <input type="password" name="password" id="password">
    <button type="submit"></button>

    </form>

</body>
</html>