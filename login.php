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
        <a href="home.html"><img src="logo.png" alt="" class="site-logo" ></a>
        <div class="parent">
            <h1 class="header">Login</h1>
            
        <!--The start of login form -->
            <form action="main.php" method="POST" autocomplete="off">

                <div class="txt_field">
                    <input type="text" name="usrname" placeholder="Username"  >
                </div>
                <span class = "error"></span>

                <div class="txt_field">
                    <input type="password" name="password" placeholder="Password"  >
                </div>
                <span class = "error"></span>

                <div class="pass"><a href="password_recovery.html" class="sign">Forgot Password?</a></div>

                <input type="submit" name="submit" value="submit">

                <div class="register-link">
                    Not A Member? <a href="registration.html" class="sign">Sign-Up</a>
                </div>

            </form>
            <!--the end of login form. -->
        </div>

    </body>
    
</html>