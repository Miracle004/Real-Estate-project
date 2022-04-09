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
        <form action="/project-1/Includes/view.php" method="POST" autocomplete="off">
        <div class="input-container">
            <input type="text" name="name" placeholder="Name" >
            <span class="error"></span>
        </div>

        <div class="input-container">
            <input type="text" name="usrname" placeholder="Username" >
            <span class="error"></span>
         </div>

         <div class="input-container" >
            <input type="email" name="email" placeholder="Email" >
            <span class="error"></span>
         </div>

         <div class="input-container" >
            <input type ="text" name="tel" placeholder="Telephone No" min="11" max="13">
            <span class="error"></span>
         </div>

         <div class="input-container" >
            <input type="password" name="password" placeholder="Password" >
            <span class="error"></span>
          </div>

         <div class="input-container">
            <input type="password" name="confirmpwd" placeholder="Confirm Password">
            <span class="error"></span>
          </div>

          <div class="radiobtn-container">
            <div class="radioBtn"><input type="radio" name="radiobtn">Client</div>
              <div class="radioBtn"><input type="radio" name="radiobtn">Agent</div>
          </div>
        <input type="submit" value="Submit" name="submit">
        </form>
        <div class="login-link">
          Already A Member? <a href="login.php" class="enter">SignIn</a>
        </div>
  </div>    

</body>
</html>