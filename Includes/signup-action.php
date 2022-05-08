<?php

if (isset($_POST["submit"])) {
    #Grabbing the data from the input fields.
    $name = $_POST["name"];
    $username = $_POST["usrname"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $password = $_POST["password"];
    $confirmPwd = $_POST["confirmPwd"];
    $type = $_POST["accountType"];


#instantiating the sign up controller class
//include("../Classes/database.conn.php");

include("../Classes/signupModel.php");

include("../Classes/signup-controller.php");

$register = new signupController($name, $username, $email, $tel, $password, $confirmPwd, $type);

#Running error handlers and user signup
    if($register->signupUser()){
        #redirecting the user back to  the home page after a successful registration.
        header("location: ../index.php?error=none");
    }
}
?>