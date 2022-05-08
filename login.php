<?php
session_start();

if (isset($_GET['error']) && $_GET['error'] == 'dbconnectfailed') {
     $errorMsg = "IncorrectusernameOrpassword";
}
elseif(isset($_GET['error']) && $_GET['error'] == 'dbconnectfailed' ){
    $errorMsg = "IncorrectusernameOrpassword";
}

elseif(isset($_GET['error']) && $_GET['error'] == 'Accountnotfound'){
    $errorMsg = "Invalid input data";
}

elseif(isset($_GET['error']) && $_GET['error'] == 'Accountnotfound'){
    $errorMsg = "IncorrectPassword";
}

elseif(isset($_GET['error']) && $_GET['error'] == 'IncorrectPassword'){
    $errorMsg = "Re-enter your valid inputs";
}


elseif(isset($_GET['error']) && $_GET['error'] == 'dbconnectfailed'){
    $errorMsg = "PagenotFound";
}

elseif (isset($_GET['error']) && $_GET['error'] == 'emptyInputs') {
    $errorMsg = "Please Input valid data";
}

elseif (isset($_GET['error']) && $_GET['error'] == 'loginfailed') {
    $errorMsg = "Login Failed";
}
else{
    $errorMsg = "" ;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    </head>

    <body>
        
        <a href="index.php"><img src="logo.png" alt="" class="site-logo" ></a>
        <div class="parent">
            <h1 class="header">Login</h1>
            <div class="error"><?php echo $errorMsg ?></div>
        <!--The start of login form -->
            <form action="/project-1/Includes/login-action.php" method="POST" autocomplete="off">

                <div class="txt_field">
                    <input type="text" name="username" placeholder="Username"  required>
                </div>
                <span class = "error"></span>

                <div class="txt_field">
                    <input type="password" name="password" placeholder="Password"  required>
                </div>
                <span class = "error"></span>

                <div class="pass"><a href="password_recovery.html" class="sign">Forgot Password?</a></div>

                <input type="submit" name="submit" value="submit">

                <div class="register-link">
                    Not A Member? <a href="signup.php" class="sign">Sign-Up</a>
                </div>

            </form>
            <!--the end of login form. -->
        </div>

    </body>
    
</html>