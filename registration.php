<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <a href="index.php"><img src="logo.png" alt="" class="site-logo"></a>
  <div class="content-container">
    <div class="pageParent">
        <h1 class="pageHeader">Register</h1>

        </div>
        <form action="/project-1/Includes/registrationView.php" method="POST" autocomplete="off">
        <div class="input-container">
            <input type="text" name="name" placeholder="Name"  value='<?php $name ?>'>
            <span class="error"></span>
        </div>

        <div class="input-container">
            <input type="text" name="usrname" placeholder="Username"  value='<?php $username ?>'>
            <span class="error"></span>
         </div>

         <div class="input-container" >
            <input type="email" name="email" placeholder="Email"  value='<?php $email ?>'>
            <span class="error"></span>
         </div>

         <div class="input-container" >
            <input type ="text" name="tel" placeholder="Telephone No" min="11" max="13" value='<?php $tel ?>'>
            <span class="error"></span>
         </div>

         <div class="input-container" >
            <input type="password" name="password" placeholder="Password"  value='<?php $password ?>'>
            <span class="error"></span>
          </div>

         <div class="input-container">
            <input type="password" name="confirmpwd" placeholder="Confirm Password" value='<?php $confirmpwd ?>'>
            <span class="error"></span>
          </div>

          <div class="radiobtn-container">
            <div class="radioBtn">
              <input type="radio" id="rad1" name="type" value="Client">
              <label for="rad1">Client</label>
            </div>
              <div class="radioBtn">
                <input type="radio" id="rad2" name="type" value="Agent">
                <label for="rad2">Agent</label>
            </div>
          </div>
        <input type="submit" value="Submit" name="submit">
        </form>
        <div class="login-link">
          Already A Member? <a href="login.php" class="enter">SignIn</a>
        </div>
  </div>    

</body>
</html>