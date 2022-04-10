<?php
session_start();

include('User.php');
$Login_User = new Login($_SESSION);
    
    if($_SESSION['login']){
        header("location: logindashboard.php");
    }
    else
        $dashboard = "Sorry you cannot access this page, redirecting you back to the home page. <a href='index.php'>HERE.</a>";    

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
        <h1 class="first_header"><?php echo $dashboard ?></h1>
</body>
</html>