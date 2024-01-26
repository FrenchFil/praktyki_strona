<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Price calculator</title>

    <script src="calculator.js"></script>
    <script src="https://kit.fontawesome.com/89b213830a.js" crossorigin="anonymous"></script>
    <script src="showOnMouseOver.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Passion+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Passion+One&display=swap" rel="stylesheet">
</head>


<body>
    <h1>Register</h1>
    <form action="register.php" method="post" id="login">
        <div id="login">
            <label for="email"  class="thick_font" style="color:black" >Email</label>
            <input type="email" id="name" name="name" style="width:400px;border-top:1px solid; border-right:1px solid; border-left:1px solid;">
        </div>
        <div id="login">
            <label for="login" class="thick_font" style="color:black">Login</label>
            <input type="text" id="login" name="login" style="width:400px;border-top:1px solid; border-right:1px solid; border-left:1px solid;">
        </div>
        <div id="login">
            <label for="password" class="thick_font" style="color:black">Password</label>
            <input type="password" id="password" name="password" style="width:400px;border-top:1px solid; border-right:1px solid; border-left:1px solid;">
        </div>
        <div id="login">
            <label for="password_check" class="thick_font" style="color:black">Password Confirmation</label>
            <input type="password" id="password_check" name="password_check" style="width:400px;border-top:1px solid; border-right:1px solid; border-left:1px solid;">
        </div>
        
        <button type="submit">Register</button>
    </form>
</body>
</html>
