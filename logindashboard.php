<?php 
session_start();

include("../project-1/Classes/user.php");

$Login_user = new Login($_SESSION);
#settting variable to get the session username
$userName = $Login_user->username;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="upload.css">
</head>
<body>
    <img src="logo.png" alt="" class="site-logo"><br>
    <img src="dummy2.jpg" alt="" class="dummy">
        <h1 class="main_header"><?php echo "WELCOME " .$userName;?></h1>
        <div class="nav">
            <span class="quickNav">Quick Links:</span>
            <div class="editProfile"><a href="#">Edit Your Profile</a></div>
            <div class="uploadProperty"><a href="property_registration.php">Upload A Property</a></div>
            <div class="clientRequest"><a href="#">Requests</a></div>
        </div>

        <main>
            <div class="row1"></div>
            <div class="row1"></div>
            <div class="row1"></div>
        </main>
        
</body>
</html>