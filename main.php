<?php
session_start(); 
include('user.php');

$Login_User = new Login($_POST) ;
    if($Login_User->check_userData()){
        $_SESSION['username'] = $Login_User->username; 
        $_SESSION['type'] = "Admin" ;
        $_SESSION['login'] = true ;

    //Using the submitted user info in the setUserDetails function
    $Login_User->setUserDetails($_SESSION); 
    header('location: dashboard.php');
   
}
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
        <img src="logo.png" alt="" class="site-logo">
        <h1 class="first_header"></h1>
</body>
</html>