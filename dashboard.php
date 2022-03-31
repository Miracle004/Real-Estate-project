<?php
session_start();

include('User.php');
    $Login_User = new Login($_SESSION);
    #the  different messages displayed are as a result of the difference in the password length.
    if($_SESSION['login']){
        #message to display if an admin logs in
        if (strlen($Login_User->password) > 10) {
            $dashboard = "Congratulations Admin you have successfully logged in.<br> logout <a href='logout.php'>HERE.</a>";
        }
        #message to display if an agent logs in
        elseif(strlen($Login_User->password) === 5){
        $dashboard = "Congratulations Agent you have successfully logged in.<br> logout <a href='logout.php'>HERE.</a>";
        }
        #message to display if a client logs in
        else
        $dashboard = "Congratulations you have successfully logged in.<br> logout <a href='logout.php'>HERE.</a>";
    }
    else
        $dashboard = "Sorry you have not logged in yet.<br> logout <a href='logout.php'>HERE.</a>";    

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
        <h1 class="first_header"><?php echo  $dashboard ?></h1>
</body>
</html>