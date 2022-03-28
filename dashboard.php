<?php

include('main.php')
    $$Login_User = new Login($_SESSION);
    if($_SESSION['login']){
        $dashboard = "Congratulations you have successfully logged in.";
    }
    else
        $dashboard = "Sorry you have not logged in yet";
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
        <h1 class="first_header"><?php $dashboard?></h1>
</body>
</html>