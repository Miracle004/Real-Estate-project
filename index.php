<?php
session_start();
include("../project-1/Classes/model.php");

include("../project-1/Classes/user.php");    

$Login_User = new Login();

if (isset($_SESSION["userId"])) {
    $login = 'logout';
    #Assuming the user has acess to the page after running a check of the User Type in the database.
    $propertyUpload = 'property_registration';
}
else
    $login ='login';
    #This is meant for users like client or an unregistered user;
    $propertyUpload = 'registration';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
    <header>
        <div class="site-logo" id="site-logo">
            <img src="logo.png" alt="" width="200" height="60">
        </div>
        <h1 class="first_header">WELCOME</h1>
        <nav>
            <ul>
                <li><a href='<?php echo $login .'.php';?>'><?php echo "$login" ;?></a></li>
                <li><a href="registration.php">Register</a></li>
                <li><a href='<?php echo $propertyUpload .'.php?forms=propertyupload';?>'>Upload Your Property</a></li>
            </ul>
        </nav>
    </header>
        <!--<img src="logo.png" alt="" class="site-logo">
        <div class="subParent">
        <h1 class="first_header">WELCOME</h1>
        <a href="login.php" class="this">Login</a>
       <a href="registration.html" class="this">Register</a>
       
    </div>-->
</body>
</html>