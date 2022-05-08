<?php
session_start();
include("../project-1/Classes/login-model.php");

include("../project-1/Classes/login-controller.php");    

$Login_User = new loginController($_SESSION["userId"], $_SESSION["username"]);
// echo $login .'.php';
if (isset($_SESSION["userId"])) {
    $login = 'logout';
    #Assuming the user has acess to the page after running a check of the User Type in the database.
    $propertyUpload = 'property_registration';
}
else{
    $login ='login';
    #This is meant for users like client or an unregistered user;
    $propertyUpload = 'registration';
}
    //This are the error handlers for the sign-up page
    if (isset($_GET['error']) && $_GET['error'] == 'registrationfailed') {
        $errorMsg = "Registration Failed, please retry";
   }
   elseif(isset($_GET['error']) && $_GET['error'] == 'notRegistered' ){
       $errorMsg = "Please sign up here";
   }
   
   elseif(isset($_GET['error']) && $_GET['error'] == 'emptyInputs'){
       $errorMsg = "Please fill out the fields below";
   }
   
   elseif(isset($_GET['error']) && $_GET['error'] == 'name'){
    $errorMsg = "Only letters and whitespace are allowed";
}

elseif (isset($_GET['error']) && $_GET['error'] == 'username') {
    $errorMsg = "Please try a strong username";
}

   elseif(isset($_GET['error']) && $_GET['error'] == 'telephoneNo'){
       $errorMsg = "Please Input a correct phone number";
   }
   
   elseif(isset($_GET['error']) && $_GET['error'] == 'password'){
       $errorMsg = "Password does not match";
   }
   
   
   elseif(isset($_GET['error']) && $_GET['error'] == 'registereduser'){
       $errorMsg = "Sorry this user already exists please try different inputs ";
   }
   

   
   elseif (isset($_GET['error']) && $_GET['error'] == 'none') {
       $errorMsg = "Signup successful";
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
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <header>
            <nav>
                <ul id="services-list">
                    <li><a id="purchase" href="#">Buy</a></li>
                    <li><a href="property_registration.php">Sell</a></li>
                    <li><a href="#">Rent</a></li>
                </ul>

                <div class="site-logo" id="site-logo">
                    <img src="logo.png" alt="" width="200" height="60">
                </div>

                <ul id="feedback-list">
                    <li><a href="#" id="loginLink">Login</a></li>
                    <li><a href="#" id="registerLink">Register</a></li>
                    <li><a href='<?php echo $propertyUpload .'.php?forms=propertyupload';?>'>Upload Your Property</a></li>
                    <li><a href="#">Help</a></li>
                </ul>
            </nav>
            <h1 class="asyn">Hello</h1>
     <div id="boX">       
    <div class="parentontainer" id="search">
        <div class="search-space">
            <a><img src="search1.png"></a>
            <input type="search" name="search" id="searchIcon" placeholder="Search For Your Favorite Property Here">
        </div>

        <div class="multiselect">
            <div class="optionselect">
                <p>You want to?</p>
                <select>
                    <option value="Buy" >Buy</option>
                    <option value="Sell">Sell</option>
                    <option value="Rent">Rent</option>
                    <option value="Lease">Lease</option>
                  </select>
            </div>
            <div class="optionselect">
                <p>Which State?</p>
                <select name="state">
                    <option value="Lagos">Lagos</option>
                    <option value="Ekiti">Ekiti</option>
                    <option value="Abuja">Abuja</option>
                    <option value="Benin">Benin</option>
                  </select>
            </div>
            <div class="optionselect">
                <p>Locality?</p>
                <select name="Locality" >
                    <option value="vary" >vary1</option>
                    <option value="vary">vary2</option>
                    <option value="vary">vary3</option>
                    <option value="vary">vary4</option>
                  </select>
            </div>
            <div class="optionselect">
                <p>Area</p>
                <select name="Area" >
                    <option value="area1" >Area1</option>
                    <option value="area2">Area2</option>
                    <option value="area3">Area3</option>
                    <option value="area4">Area4</option>
                  </select>
            </div>
            <div class="optionselect">
                <p>Type</p>
                <select name="HouseType" >
                    <option value="Type" >Flat</option>
                    <option value="Type">Lakehouse</option>
                    <option value="Type">Apartment</option>
                    <option value="Type">Bungalow</option>
                  </select>
            </div>
            <div class="optionselect">
                <p>Sub Type</p>
                <select name="SubType" >
                    <option value="room">Single</option>
                    <option value="room">2-Rooms</option>
                    <option value="room">3-Rooms</option>
                    <option value="room">4-Rooms</option>
                  </select>
            </div>
            <div class="optionselect">
                <p>No Of Beds</p>
                <select name="beds" >
                    <option value="Beds" >1</option>
                    <option value="Beds">4</option>
                    <option value="Beds">5</option>
                    <option value="Beds">6</option>
                  </select>
            </div>
            <div class="optionselect">
                <p>Max Budget</p>
                <select name="budget" >
                    <option value="1000000">1000000</option>
                    <option value="5000000">5000000</option>
                    <option value="10000000">10000000</option>
                    <option value="50000000">50000000</option>
                  </select>
            </div>
            <div class="searchtype">
                <p>Search</p>
            <input type="submit" id="seArch" value="Search">
            </div>
        </div>
    
    </div>
</div>
                <div id="slider">
                    <div id="mainImg">cover Image</div>
                </div>
        </header>
        <main>
            <div class="services">
                <img src="payment-method.png" alt="" id="icon">
                <h3>Buy Your Dream Home</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui dolore cumque consectetur! Tempore delectus molestias asperiores eius? Odio at nostrum totam corrupti pariatur vitae. Ut minima aspernatur odit obcaecati pariatur.></p>
            </div>
            <div class="services">
                <img src="new-house.png" alt="" id="icon">
                <h3>Sell</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui dolore cumque consectetur! Tempore delectus molestias asperiores eius? Odio at nostrum totam corrupti pariatur vitae. Ut minima aspernatur odit obcaecati pariatur.></p>
            </div>
            <div class="services">
                <img src="house.png" alt="" id="icon">
                <h3>Rent a property you want</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui dolore cumque consectetur! Tempore delectus molestias asperiores eius? Odio at nostrum totam corrupti pariatur vitae. Ut minima aspernatur odit obcaecati pariatur.></p>
            </div>
        </main>
        <div class="usermodal" id="usermodal">
            <div class="close" id="closemodal" onclick="closeModal()">X</div>
            <div class="content-container">
                <div class="pageParent">
                    <h1 class="pageHeader">Register</h1>
                </div>
                <form action="/project-1/Includes/signup-action.php" method="POST" autocomplete="off">
                    <div class="input-container">
                        <span id = "error" class="error"><?php echo $errorMsg ?> </span>
                        <input type="text" name="name" placeholder="Name"  >
                    </div>

                    <div class="input-container">
                        <input type="text" name="usrname" placeholder="Username"  >
                    </div>

                    <div class="input-container" >
                        <input type="email" name="email" placeholder="Email"  >
                    </div>

                    <div class="input-container" >
                        <input type ="text" name="tel" placeholder="Telephone No" >
                    </div>

                    <div class="input-container" >
                        <input type="password" name="password" placeholder="Password"  >
                    </div>

                    <div class="input-container">
                        <input type="password" name="confirmPwd" placeholder="Confirm Password">
                    </div>

                    <div class="radiobtn-container">
                        <div class="radioBtn">
                        <input type="radio" id="rad1" name="accountType" value="Client">
                        <label for="rad1">Client</label>
                        </div>
                        <div class="radioBtn">
                        <input type="radio" id="rad2" name="accountType" value="Agent">
                        <label for="rad2">Agent</label>
                        </div>
                    </div>
                    <input type="submit" value="Signup" id="submit" name="submit">
                </form>
                <div class="login-link">
                        Already A Member? <a href="login.php" class="enter">SignIn</a>
                    </div>
            </div>  
        </div>  


    <div class="usermodal" id="userModal">
        <div class="close" id="exitModal"onclick="closemodal()">X</div>
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
    </div>



        <!--<img src="logo.png" alt="" class="site-logo">
        <div class="subParent">
        <h1 class="first_header">WELCOME</h1>
        <a href="login.php" class="this">Login</a>
       <a href="registration.html" class="this">Register</a>
       
    </div>-->
    <script type="application/javascript" src="index.js"></script>
</body>
</html>